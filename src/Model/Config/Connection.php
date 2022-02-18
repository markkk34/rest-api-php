<?php

class Connection
{
    protected PDO $pdo;

    public function __construct()
    {
        try {
            $dns = sprintf(
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

    /**
     * @return \PDO|null
     */
    public function getPDO() : ?PDO
    {
        return $this->pdo ?? null;
    }
}
