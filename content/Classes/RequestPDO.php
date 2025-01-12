<?php

class RequestPDO
{
    private $dsn = "mysql:host=q4115.myd.infomaniak.com;port=3306;dbname=q4115_terresnoires";
    private $username = "q4115_benoit";
    private $password = "Eto!le3110";

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
