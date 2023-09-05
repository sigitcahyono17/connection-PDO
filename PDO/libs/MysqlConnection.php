<?php
class MysqlConnection {
    private ?PDO $connection = null;
    
    public function __construct(
        string $host,
        string $database,
        string $user,
        string $password,
    ) {
        // $host = "127.0.0.1";
        // $database = "net_watch";
        // $user = "root";
        // $pass = "";

        try {
            $this->connection = new PDO(
                "mysql:host=$host; dbname=$database",
                $user, $password
            );
        } catch (PDOException $e) {
                print "Error!: {$e->getMessage()}";
        }
    }

    public function getConnection(): ?PDO
    {
        return $this->connection;
    }
}