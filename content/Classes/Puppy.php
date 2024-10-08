<?php
require_once(__DIR__ . "/../Controllers/function.php");
require_once(__DIR__ . '/../Classes/RequestPDO.php');
require_once(__DIR__ . '/../Classes/Litter.php');
require_once(__DIR__ . '/../Classes/Image.php');
require_once(__DIR__ . '/../php/resizer.php');

class Puppy
{
    private $id = 0;
    private $name = "";
    private $litter = null;
    private $sex = 'Female';
    private $color = 'Noir';
    private $necklace = '';
    private $available = 'Disponible';
    private $mainImg = "../../src/img/puppy-default.jpg";
    private $display = true;
    private $pdo = null;
    private $price = 0;

    public function __construct(
        string $name = "",
        Litter $litter = null,
        string $sex = 'Female',
        string $color = 'Noir',
        string $necklace = '',
        string $available = "Disponible",
        string $mainImg = "../../src/img/puppy-default.jpg",
        int $price = 1200,
        bool $display = true,
        RequestPDO $pdo = null
    ) {
        $this->name = $name;
        $this->litter = $litter;
        $this->sex = $sex;
        $this->color = $color;
        $this->necklace = $necklace;
        $this->available = $available;
        $this->mainImg = $mainImg;
        $this->price = $price;
        $this->display = $display;
        $this->pdo = $pdo ?? new RequestPDO();
    }

    private function fillLitter(int $litterId)
    {
        $stmt = $this->pdo->connect()->prepare(getLitterFromId());
        $stmt->bindValue(':litterId', $litterId);
        $stmt->execute();
        $litter = new Litter();
        $dataLitter = $stmt->fetch(PDO::FETCH_OBJ);
        $litter->fillFromStdClass($dataLitter);
        $this->setLitter($litter);
    }

    public function fillFromPost()
    {
        $this->fillLitter($_POST['litter']);
        $this->setId($_POST['puppyID']);
        $this->setName($_POST['puppyName']);
        $this->setSex($_POST['puppySex']);
        $this->setColor($_POST['puppyColor']);
        $this->setNecklace($_POST['puppyNecklace']);
        $this->setAvailable($_POST['puppyAvailable']);
        $this->setPrice($_POST['price']);
        $this->setMainImg($_POST['mainImg']);
        // $this->setDisplay($_POST['puppyDisplay']);
    }

    public function fillFromStdClass(stdClass $data)
    {
        $this->fillLitter($data->litter);
        $this->setId($data->id);
        $this->setName($data->name);
        $this->setSex($data->sex);
        $this->setColor($data->color);
        $this->setAvailable($data->available);
        $this->setNecklace($data->necklace);
        $this->setPrice($data->price);
        $this->setMainImg($data->mainImg);
        $this->setDisplay($data->display);
    }

    public function fillFromFetchAssoc(array $array)
    {
        $this->fillLitter($array['litter']);
        $this->setId($array['puppyID']);
        $this->setName($array['name']);
        $this->setSex($array['sex']);
        $this->setColor($array['color']);
        $this->setAvailable($array['available']);
        $this->setNecklace($array['necklace']);
        $this->setPrice($array['price']);
        $this->setMainImg($array['mainImg']);
        $this->setDisplay($array['display']);
    }

    public function fetchFromDatabase($puppyID)
    {
        $stmt = $this->pdo->connect()->prepare(getPuppyFromId());
        $stmt->bindParam(':puppyID', $puppyID);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->fillFromFetchAssoc($data);
    }

    public function fetchToDatabase()
    {
        $stmt = $this->pdo->connect()->prepare(managePuppy());
        $stmt->bindValue(':puppyID', $this->getId());
        $stmt->bindValue(':name', $this->getName());
        $stmt->bindValue(':litter', $this->getLitter()->getId());
        $stmt->bindValue(':sex', $this->getSex());
        $stmt->bindValue(':color', $this->getColor());
        $stmt->bindValue(':necklace', $this->getNecklace());
        $stmt->bindValue(':available', $this->getAvailable());
        $stmt->bindValue(':mainImg', $this->getMainImg());
        $stmt->bindValue(':price', $this->getPrice());
        $stmt->bindValue(':display', $this->getDisplay());
        $stmt->execute();
    }
    public function createToDatabase()
    {
        $stmt = $this->pdo->connect()->prepare(createPuppy());
        $stmt->bindValue(':name', $this->getName());
        $stmt->bindValue(':litter', $this->getLitter()->getId());
        $stmt->bindValue(':sex', $this->getSex());
        $stmt->bindValue(':color', $this->getColor());
        $stmt->bindValue(':necklace', $this->getNecklace());
        $stmt->bindValue(':available', $this->getAvailable());
        $stmt->bindValue(':mainImg', $this->getMainImg());
        $stmt->bindValue(':price', $this->getPrice());
        $stmt->bindValue(':display', $this->getDisplay());
        $stmt->execute();
    }

    public function checkMainImg()
    {
        if (isset($_FILES['mainImg']) && !empty($_FILES['mainImg']) && $_FILES['mainImg']['size'] > 0) {
            if (isset($_POST['puppyID']) && $_POST['puppyID'] > 0) {
                $fileName = $this->getName() . '-' . $this->getId();
                $fileName = replace_reunion_char(replace_blank(replace_accent($fileName)));
            }
            $file_tmp = $_FILES['mainImg']['tmp_name'];
            $file_destination = '../../src/img/puppies/' . $fileName . '.jpg';
            try {
                move_uploaded_file($file_tmp, $file_destination);
            } catch (ErrorException $e) {
                echo "Erreur : Impossible de déplacer cette image dans son dossier de destination.";
                die();
            }
            try {
                resizeimage($file_destination, $fileName, '/../../src/img/puppies/');
            } catch (ErrorException $e) {
                echo "Erreur : Impossible de redimensionner l'image " . $e;
                die();
            }
            $this->setMainImg($file_destination);
        }
    }

    public function saveDiapoImg()
    {
        if (isset($_FILES['diapoImg']) && $_FILES['diapoImg']['name'][0] != null) {
            $images = $_FILES['diapoImg']['tmp_name'];
            foreach ($images as $image) {
                $prefix = substr($image, -8, -4);
                $name =  $this->getId() . '-' . $prefix;
                $destination = '../../src/img/diapos/puppies/' . $name . '.jpg';
                move_uploaded_file($image, $destination);
                resizeimage($destination,  $name, '/../../src/img/diapos/puppies/');
                $diapo = new Image();
                $diapo->setPath($destination);
                $diapo->setPuppyId($_POST['puppyID']);
                $diapo->fetchToDatabase();
            }
        }
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of litter
     */
    public function getLitter()
    {
        return $this->litter;
    }

    /**
     * Set the value of litter
     *
     * @return  self
     */
    public function setLitter($litter)
    {
        $this->litter = $litter;

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
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of available
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set the value of available
     *
     * @return  self
     */
    public function setAvailable($available)
    {
        $this->available = $available;

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
     * Get the value of display
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set the value of display
     *
     * @return  self
     */
    public function setDisplay($display)
    {
        $this->display = $display;

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
     * Get the value of necklace
     */
    public function getNecklace()
    {
        return $this->necklace;
    }

    /**
     * Set the value of necklace
     *
     * @return  self
     */
    public function setNecklace($necklace)
    {
        $this->necklace = $necklace;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
