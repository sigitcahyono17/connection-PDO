<?php

class MysqlConnectiontion {
    private ?PDO $connection = null;

    public function __construct(string $host, string $database, string $user, string $password = "")
    {
        try {
            $dsn = "mysql:host={$host};dbname={$database}";

            $this->connection = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection(): ?PDO 
    {
        return $this->connection;
    }
}
