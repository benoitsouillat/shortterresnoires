<?php

require_once(__DIR__ . "/Repro.php");
require_once(__DIR__ . "/Puppy.php");
require_once(__DIR__ . "/../Models/sql/repro_request.php");
require_once(__DIR__ . "/../Models/sql/litter_request.php");
require_once(__DIR__ . "/../Models/sql/puppy_request.php");
require_once(__DIR__ . "/RequestPDO.php");

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
    private $pdo = null;

    public function __construct(
        Repro $mother = null,
        Repro $father = null,
        int $numberOfMales = 0,
        int $numberOfFemales = 0,
        string $numberLof = "",
        DateTime $birthdate = null,
        bool $display = true,
        RequestPDO $pdo = null
    ) {
        $this->mother = $mother ?? new Repro();
        $this->father = $father ?? new Repro();
        $this->numberOfMales = $numberOfMales;
        $this->numberOfFemales = $numberOfFemales;
        $this->numberOfPuppies = $numberOfFemales + $numberOfMales;
        $this->numberLof = $numberLof;
        $this->birthdate = $birthdate ?? new DateTime('now');
        $this->display = $display;
        $this->pdo = $pdo ?? new RequestPDO();
    }

    public function fillFromStdClass(stdClass $data): void
    {
        $this->mother->fetchFromDatabase($data->mother);
        $this->father->fetchFromDatabase($data->father);
        $this->setId($data->litterId);
        $this->setBirthdate($data->birthdate);
        $this->setNumberOfPuppies($data->numberOfMales, $data->numberOfFemales);
        $this->setNumberOfMales($data->numberOfMales ?? 0);
        $this->setNumberOfFemales($data->numberOfFemales ?? 0);
        $this->setNumberLof($data->numberLOF ?? 'En cours d\'acquisition.');
        $this->setDisplay($data->display);
    }
    public function fillFromForm(array $post)
    {
        if (isset($post['litterID']) && $post['litterID'] != NULL) {
            $this->setId($post['litterID']);
        }
        $this->mother->fetchFromDatabase($post['mother']);
        $this->father->fetchFromDatabase($post['father']);
        $this->setBirthdate($post['birthdate']);
        $this->setNumberOfPuppies($post['numberOfMales'], $post['numberOfFemales']);
        $this->setNumberOfMales($post['numberOfMales']);
        $this->setNumberOfFemales($post['numberOfFemales']);
        $this->setNumberLof($post['numberLof']);
        $this->setDisplay(1);
    }

    public function countIds()
    {
        $stmt = $this->pdo->connect()->prepare(getAllLitters());
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return end($data)['litterId'];
    }

    public function generatePuppiesMales()
    {
        for ($i = 0; $i < $this->getNumberOfMales(); $i++) {
            $puppy = new Puppy("Mâle N°" . $i + 1);
            $litterStmt = $this->pdo->connect()->prepare(getLitterFromId());
            $litterStmt->bindValue(':litterId', $this->countIds());
            $litterStmt->execute();
            $litterData = $litterStmt->fetch(PDO::FETCH_OBJ);
            $this->setId($litterData->litterId);
            $puppy->setLitter($this);
            $puppy->setSex('Male');
            $stmt = $this->pdo->connect()->prepare(createPuppy());
            $stmt->bindValue(':name', $puppy->getName());
            if ($this->getId() > 0) {
                $stmt->bindValue(':litter', $this->getId());
            }

            $stmt->bindValue(':sex', $puppy->getSex());
            $stmt->bindValue(':color', $puppy->getColor());
            $stmt->bindValue(':available', $puppy->getAvailable());
            $stmt->bindValue(':mainImg', $puppy->getMainImg());
            $stmt->bindValue(':display', $puppy->getDisplay());

            $stmt->execute();
        }
    }

    public function generatePuppiesFemales()
    {
        // Détruire tous les chiots femelles de cette portée

        for ($i = 0; $i < $this->getNumberOfFemales(); $i++) {
            $puppy = new Puppy("Femelle N°" . $i + 1);
            $litterStmt = $this->pdo->connect()->prepare(getLitterFromId());
            $litterStmt->bindValue(':litterId', $this->countIds());
            $litterStmt->execute();
            $litterData = $litterStmt->fetch(PDO::FETCH_OBJ);
            $this->setId($litterData->litterId);
            $puppy->setLitter($this);
            $puppy->setSex('Female');
            $stmt = $this->pdo->connect()->prepare(createPuppy());
            $stmt->bindValue(':name', $puppy->getName());
            if ($this->getId() > 0) {
                $stmt->bindValue(':litter', $this->getId());
            }
            $stmt->bindValue(':sex', $puppy->getSex());
            $stmt->bindValue(':color', $puppy->getColor());
            $stmt->bindValue(':available', $puppy->getAvailable());
            $stmt->bindValue(':mainImg', $puppy->getMainImg());
            $stmt->bindValue(':display', $puppy->getDisplay());
            $stmt->execute();
        }
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
        if ($numberOfMales >= 0) {
            $this->numberOfMales = $numberOfMales;
        } else
            throw new InvalidArgumentException("Le Nombre de Mâle ne peut pas être négatif");
        return $this;
    }

    public function getNumberOfFemales()
    {
        return $this->numberOfFemales;
    }
    public function setNumberOfFemales($numberOfFemales)
    {
        if ($numberOfFemales >= 0) {
            $this->numberOfFemales = $numberOfFemales;
        } else
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
