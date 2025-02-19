<?php

include_once(__DIR__ . "/../Models/sql/repro_request.php");
require_once(__DIR__ . "/../Controllers/function.php");
require_once(__DIR__ . "/RequestPDO.php");
require_once(__DIR__ . "/Image.php");
require_once(__DIR__ . "/../php/resizer.php");



class Repro
{
    const DEFAULT_IMG = "../../src/img/repro-default.jpg";

    private $id = 0;
    private $name = "";
    private $sex = "";
    private $birthdate;
    private $insert = "";
    private $breeder = "";
    private $adn = true;
    private $mainImg = "";
    private $notMyDog = false;
    private $retirement = false;
    private $pdo = null;

    public function __construct(
        string $name = "",
        string $sex = "Female",
        DateTime $birthdate = new DateTime('now'),
        string $insert = "",
        string $breeder = "du Domaine des Terres Noires",
        bool $adn = true,
        bool $notMyDog = false,
        bool $retirement = false,
        string $mainImg = self::DEFAULT_IMG,
        RequestPDO $pdo = null
    ) {
        $this->name = $name;
        $this->sex = $sex;
        $this->birthdate = $birthdate;
        $this->insert = $insert;
        $this->breeder = $breeder;
        $this->adn = $adn;
        $this->notMyDog = $notMyDog ?? false;
        $this->retirement = $retirement ?? false;
        $this->mainImg = $mainImg;
        $this->pdo = $pdo ?? new RequestPDO();
    }
    public function fillFromForm(): void
    {
        if (isset($_POST['reproID']) && $_POST['reproID'] != NULL) {
            $this->setId($_POST['reproID']);
            $this->setMainImg($_POST['mainImg']);
        }
        $this->setName($_POST['reproName']);
        $this->setSex($_POST['reproSex']);
        $this->setBirthdate($_POST['reproBirthdate']);
        $this->setInsert($_POST['reproInsert']);
        $this->setAdn($_POST['reproADN']);
        $this->setNotMyDog(isset($_POST['notMyDog']) ? 1 : 0);
        $this->setRetirement(isset($_POST['retirement']) ? 1 : 0);
        $this->setBreeder($_POST['reproBreeder']);
    }
    public function fillFromStdClass(stdClass $data): void
    {
        $this->setId($data->id ?? 0);
        $this->setName($data->name);
        $this->setSex($data->sex);
        $this->setBirthdate(new DateTime($data->birthdate ?? "2020-01-01"));
        $this->setInsert($data->insert);
        $this->setAdn($data->adn ?? true);
        $this->setNotMyDog($data->notMyDog ?? false);
        $this->setRetirement($data->retirement ?? false);
        $this->setBreeder($data->breeder ?? "du Domaine des Terres Noires");
        $this->setMainImg($data->mainImg ?? self::DEFAULT_IMG);
    }
    public function fetchFromDatabase(int $reproId)
    {
        $stmt = $this->pdo->connect()->prepare(getReproFromID());
        $stmt->bindParam(':reproID', $reproId);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        if (!$data) {
            return null;
        }
        $this->fillFromStdClass($data);
    }
    public function checkMainImg()
    {
        if (isset($_FILES['mainImg']) && !empty($_FILES['mainImg']) && $_FILES['mainImg']['size'] > 0) {
            if (isset($_POST['reproID']) && $_POST['reproID'] > 0) {
                $fileName = $this->getName() . '-' . $this->getId();
                $fileName = replace_reunion_char(replace_blank(replace_accent($fileName)));
            } else {
                $fileName = $this->getName() . '-0';
                $fileName = replace_reunion_char(replace_blank(replace_accent($fileName)));
            }
            $file_tmp = $_FILES['mainImg']['tmp_name'];
            $file_destination = '../../src/img/repros/' . $fileName . '.jpg';
            move_uploaded_file($file_tmp, $file_destination);
            resizeimage($file_destination, $fileName, '/../../src/img/repros/');
            $this->setMainImg($file_destination);
        } else {
            $this->setMainImg(isset($_POST['mainImg']) ? $_POST['mainImg'] : '../../src/img/repro-default.jpg');
        }
    }
    public function saveDiapoImg()
    {
        if (isset($_FILES['diapoImg']) && $_FILES['diapoImg']['name'][0] != null) {
            $images = $_FILES['diapoImg']['tmp_name'];
            $pdo = new RequestPDO();
            $stmt = $pdo->connect()->prepare(getAllRepros());
            $stmt->execute();
            $dataRepros = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $lastID = end($dataRepros)['id'];
            foreach ($images as $image) {
                $prefix = substr($image, -8, -4);
                $name = $this->getId() . '-' . $prefix;
                $destination = '../../src/img/diapos/repros/' . $name . '.jpg';
                move_uploaded_file($image, $destination);
                resizeimage($destination, $name, '/../../src/img/diapos/repros/');
                $diapo = new Image();
                $diapo->setPath($destination);
                if (isset($_POST['reproID']) && $_POST['reproID'] > 0) {
                    $diapo->setReproId($_POST['reproID']); // En cas de modification mais il faut prévoir le cas pour une création
                } else {
                    $diapo->setReproId($lastID); // Erreur inscrit sur le dernier chien créé et non pas sur le chien en création
                }
                $diapo->fetchToDatabase();
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of mainImg
     */
    public function getMainImg()
    {
        return $this->mainImg;
    }

    /**
     * Set the value of mainImg
     *
     * @return  self
     */
    public function setMainImg($mainImg)
    {
        $this->mainImg = $mainImg;

        return $this;
    }

    /**
     * Get the value of adn
     */
    public function getAdn()
    {
        return $this->adn;
    }

    /**
     * Set the value of adn
     *
     * @return  self
     */
    public function setAdn($adn)
    {
        $this->adn = $adn;

        return $this;
    }

    /**
     * Get the value of breeder
     */
    public function getBreeder()
    {
        return $this->breeder;
    }

    /**
     * Set the value of breeder
     *
     * @return  self
     */
    public function setBreeder($breeder)
    {
        $this->breeder = $breeder;

        return $this;
    }

    /**
     * Get the value of insert
     */
    public function getInsert()
    {
        return $this->insert;
    }

    /**
     * Set the value of insert
     *
     * @return  self
     */
    public function setInsert($insert)
    {
        $this->insert = $insert;

        return $this;
    }

    /**
     * Get the value of birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */
    public function setSex($sex)
    {
        if (in_array($sex, ["Male", "Female"]))
            $this->sex = $sex;
        else
            throw new InvalidArgumentException("Le sexe doit être Male ou Female !!");
        return $this;
    }

    /**
     * Get the value of notMyDog
     */
    public function getNotMyDog()
    {
        return $this->notMyDog;
    }

    /**
     * Set the value of notMyDog
     *
     * @return  self
     */
    public function setNotMyDog($notMyDog)
    {
        $this->notMyDog = $notMyDog;

        return $this;
    }

    /**
     * Get the value of retirement
     */
    public function getRetirement()
    {
        return $this->retirement;
    }

    /**
     * Set the value of retirement
     *
     * @return  self
     */
    public function setRetirement($retirement)
    {
        $this->retirement = $retirement;

        return $this;
    }
}
