<?php

class RequestPDO
{
    private $dsn = "mysql:host=localhost;port=3306;dbname=terresnoires";
    private $username = "root";
    private $password = "";

    public function connect()
    {
        $pdo = new PDO($this->dsn, $this->username, $this->password);
        return $pdo;
    }
}
