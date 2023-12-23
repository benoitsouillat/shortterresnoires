<?php

require_once(__DIR__ . "/Repro.php");
require_once(__DIR__ . "/../Models/sql/repro_request.php");

class Litter
{

    private $id = 0;
    private $mother = null;
    private $father = null;
    private $numberOfPuppies = 0;
    private $numberOfMales = 0;
    private $numberOfFemales = 0;
    private $numberLof = "";
    private $birthdate = "2020-01-01";
    private $display = true;

    public function __construct(
        Repro $mother = null,
        Repro $father = null,
        int $numberOfMales = 0,
        int $numberOfFemales = 0,
        string $numberLof = "",
        DateTime $birthdate = new DateTime('now'),
        bool $display = true
    ) {
        $this->mother = $mother;
        $this->father = $father;
        $this->numberOfMales = $numberOfMales;
        $this->numberOfFemales = $numberOfFemales;
        $this->numberOfPuppies = $numberOfFemales + $numberOfMales;
        $this->numberLof = $numberLof;
        $this->birthdate = $birthdate;
        $this->display = $display;
    }

    public function fillFromStdClass(stdClass $data): void
    {
        $this->setId($data->litterId);
        $this->setMother($data->mother);
        $this->setFather($data->father);
        $this->setBirthdate($data->birthdate);

        $this->setNumberOfPuppies($data->numberOfMales, $data->numberOfFemales);
        $this->setNumberOfMales($data->numberOfMales ?? 0);
        $this->setNumberOfFemales($data->numberOfFemales ?? 0);
        $this->setNumberLof($data->numberLOF ?? 'En cours d\'acquisition.');
        $this->setDisplay($data->display);
    }
    public function fillFromForm(array $post)
    {
        $this->setMother($post['mother']);
        $this->setFather($post['father']);
        $this->setBirthdate($post['birthdate']);
        $this->setNumberOfPuppies($post['numberOfMales'], $post['numberOfFemales']);
        $this->setNumberOfMales($post['numberOfMales']);
        $this->setNumberOfFemales($post['numberOfFemales']);
        $this->setNumberLof($post['numberLof']);
        $this->setDisplay(1);
    }


    public function getId()
    {
        return $this->id;
    }
    public function getMother()
    {
        return $this->mother;
    }
    public function setMother($mother)
    {
        $this->mother = $mother;

        return $this;
    }
    public function getFather()
    {
        return $this->father;
    }
    public function setFather($father)
    {
        $this->father = $father;

        return $this;
    }
    public function getNumberOfMales()
    {
        return $this->numberOfMales;
    }
    public function setNumberOfMales($numberOfMales)
    {
        if ($numberOfMales >= 0)
            $this->numberOfMales = $numberOfMales;
        else
            throw new InvalidArgumentException("Le Nombre de Mâle ne peut pas être négatif");

        return $this;
    }

    public function getNumberOfFemales()
    {
        return $this->numberOfFemales;
    }
    public function setNumberOfFemales($numberOfFemales)
    {
        if ($numberOfFemales >= 0)
            $this->numberOfFemales = $numberOfFemales;
        else
            throw new InvalidArgumentException("Le Nombre de femelle ne peut pas être négatif");

        return $this;
    }
    public function getNumberOfPuppies()
    {
        return $this->numberOfPuppies;
    }
    public function setNumberOfPuppies($numberOfFemales, $numberOfMales)
    {
        $this->numberOfPuppies = $numberOfFemales + $numberOfMales;

        return $this;
    }
    public function getNumberLof()
    {
        return $this->numberLof;
    }

    public function setNumberLof($numberLof)
    {
        $this->numberLof = $numberLof;

        return $this;
    }
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function setBirthdate($birthdate)
    {
        $this->birthdate = new DateTime($birthdate);
        return $this;
    }

    public function getDisplay()
    {
        return $this->display;
    }
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
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
}
