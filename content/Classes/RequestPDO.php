<?php

class RequestPDO
{
    private $dsn = "mysql:host=localhost;port=3306;dbname=terresnoires";
    private $username = "root";
    private $password = "";

    public function connect()
    {
        try {
            $pdo = new PDO($this->dsn, $this->username, $this->password);
            return $pdo;
        } catch (PDOException $e) {
            echo "Une erreur de connexion PDO s'est produite !";
        }
    }
}
