<?php
class RequestPDO
{
    private $dsn = "mysql:host=db;port=3306;dbname=terresnoires";
    private $username = "venture";
    private $password = "password";

    public function connect()
    {
        try {
            $pdo = new PDO($this->dsn, $this->username, $this->password);
            return $pdo;
        } catch (PDOException $e) {
            echo "Une erreur de connexion PDO s'est produite ! " . $this->dsn . PHP_EOL;
            return null;
        }
    }
}
