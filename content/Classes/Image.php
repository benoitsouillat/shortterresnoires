<?php

require_once(__DIR__ . '/RequestPDO.php');

class Image
{
    private $imageId = 0;
    private $path = '';
    private $reproId = 0;
    private $puppyId = 0;
    public function __construct(
        int $imageId = 0,
        string $path = '',
        int $reproId = null,
        int $puppyId = null
    ) {
        $this->imageId = $imageId ?? 0;
        $this->path = $path;
        $this->reproId = $reproId ?? 0;
        $this->puppyId = $puppyId ?? 0;
    }

    public function fetchToDatabase()
    {
        $pdo = new RequestPDO();
        if ($this->puppyId > 0) {
            $stmt = $pdo->connect()->prepare(savePuppyDiapo());
            $stmt->bindValue(':path', $this->path);
            $stmt->bindValue(':puppyID', $this->puppyId);
            $stmt->execute();
        } elseif (($this->reproId > 0) && (isset($_POST['reproID']))) {
            $stmt = $pdo->connect()->prepare(saveReproDiapo());
            $stmt->bindValue(':path', $this->path);
            $stmt->bindValue(':reproID', $this->reproId);
            $stmt->execute();
        } else {
            echo 'Une erreur s\'est produite, contacter l\'administrateur du site ! ';
        }
    }

    /**
     * Get the value of puppyId
     */
    public function getPuppyId()
    {
        return $this->puppyId;
    }

    /**
     * Set the value of puppyId
     *
     * @return  self
     */
    public function setPuppyId($puppyId)
    {
        $this->puppyId = $puppyId;

        return $this;
    }

    /**
     * Get the value of reproId
     */
    public function getReproId()
    {
        return $this->reproId;
    }

    /**
     * Set the value of reproId
     *
     * @return  self
     */
    public function setReproId($reproId)
    {
        $this->reproId = $reproId;

        return $this;
    }

    /**
     * Get the value of path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the value of path
     *
     * @return  self
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get the value of imageId
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Set the value of imageId
     *
     * @return  self
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }
}
