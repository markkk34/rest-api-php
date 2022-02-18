<?php

use PDO;

class Connection
{
    protected PDO $pdo;

    public function connect()
    {
        try {
            $dns = sprinf(
                "mysql:host=%s;port=%s;dbname=%s;charset=%s",
                Config::HOST,
                Config::PORT,
                Config::DB_NAME,
                Config::CHARSET
            );

            $this->pdo = new PDO(
                $dns,
                Config::USERNAME,
                Config::PASSWORD
            );
        } catch (PDOException $exception) {
            echo 'PDO exception' . '<br>' . $exception;
        }
    }
}
