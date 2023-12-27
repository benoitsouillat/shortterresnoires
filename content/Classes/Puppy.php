<?php

require_once('../Classes/RequestPDO.php');
require_once('../Classes/Litter.php');
class Puppy
{
    private $id = 0;
    private $name = "";
    private $litter = null;
    private $sex = 'Female';
    private $color = 'Noir';
    private $available = 'Disponible';
    private $necklace = '';
    private $mainImg = "../../src/img/puppy-default.jpg";
    private $display = true;
    private $pdo = null;

    public function __construct(
        string $name = "",
        Litter $litter = null,
        string $sex = 'Female',
        string $color = 'Noir',
        string $necklace = '',
        string $available = "Disponible",
        string $mainImg = "../../src/img/puppy-default.jpg",
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

    public function fillFromPost(array $post)
    {
        $this->fillLitter($post['litter']);
        $this->setId($post['puppyID']);
        $this->setName($post['puppyName']);
        $this->setSex($post['puppySex']);
        $this->setColor($post['puppyColor']);
        $this->setAvailable($post['puppyAvailable']);
        $this->setMainImg($post['mainImg']);
        // $this->setDisplay($post['puppyDisplay']);
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
        $this->setDisplay($data->display);
        $this->setMainImg($data->mainImg);
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
        $this->setDisplay($array['display']);
        $this->setMainImg($array['mainImg']);
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
        $stmt->bindValue(':available', $this->getAvailable());
        $stmt->bindValue(':mainImg', $this->getMainImg());
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
        $stmt->bindValue(':available', $this->getAvailable());
        $stmt->bindValue(':mainImg', $this->getMainImg());
        $stmt->bindValue(':display', $this->getDisplay());
        $stmt->execute();
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
}