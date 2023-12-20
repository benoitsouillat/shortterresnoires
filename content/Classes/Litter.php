<?php

require_once "./Repro.php";

class Litter
{

    private $id = 0;
    private $mother = null;
    private $father = null;
    private $numberOfPuppies = 0;
    private $numberOfMales = 0;
    private $numberOfFemales = 0;
    private $numberLof = "";
    private $birthdate = "01012000";
    private $display = true;

    public function __construct(
        Repro $mother = null,
        Repro $father = null,
        int $numberOfMales = 0,
        int $numberOfFemales = 0,
        string $numberLof = "",
        DateTime $birthdate,
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
        $mother = new Repro();
        $mother->fillFromStdClass($data->mother); // Supposez que $data->mother est un objet stdClass
        $this->setMother($mother);

        $father = new Repro();
        $father->fillFromStdClass($data->father); // Supposez que $data->father est un objet stdClass
        $this->setFather($father);

        $this->setNumberOfPuppies($data->numberOfPuppies);
        $this->setNumberOfMales($data->numberOfMales);
        $this->setNumberOfFemales($data->numberOfFemales);
        $this->setNumberLof($data->numberLof);
        $this->setBirthdate($data->birthdate);
        $this->setDisplay($data->display);
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
    public function setNumberOfPuppies($numberOfPuppies)
    {
        $this->numberOfPuppies = $numberOfPuppies;

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
        $this->birthdate = $birthdate;

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
}
