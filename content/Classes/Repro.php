<?php

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

    public function __construct(
        string $name = "",
        string $sex = "Female",
        DateTime $birthdate = new DateTime('now'),
        string $insert = "",
        string $breeder = "du Domaine des Terres Noires",
        bool $adn = true,
        string $mainImg = self::DEFAULT_IMG
    ) {
        $this->name = $name;
        $this->sex = $sex;
        $this->birthdate = $birthdate;
        $this->insert = $insert;
        $this->breeder = $breeder;
        $this->adn = $adn;
        $this->mainImg = $mainImg;
    }
    public function fillFromStdClass(stdClass $data): void
    {
        $this->setId($data->id);
        $this->setName($data->name);
        $this->setSex($data->sex);
        $this->setBirthdate(new DateTime($data->birthdate ?? "2020-01-01"));
        $this->setInsert($data->insert);
        $this->setBreeder($data->breeder ?? "du Domaine des Terres Noires");
        $this->setAdn($data->adn ?? true);
        $this->setMainImg($data->mainImg ?? self::DEFAULT_IMG);
    }

    public static function fetchFromDatabase(PDO $conn, int $reproId): ?Repro
    {
        $stmt = $conn->prepare("SELECT * FROM `repros` WHERE id = :reproId");
        $stmt->bindParam(':reproId', $reproId, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_OBJ);

        if (!$data) {
            return null; // Aucun objet Repro trouvé avec cet identifiant
        }

        $repro = new Repro();
        $repro->fillFromStdClass($data);

        return $repro;
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
}
