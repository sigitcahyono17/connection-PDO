<?php
$host = "127.0.0.1";
$database = "net_watch";
$user = "root";
$pass = "";

try {
    //code...
    $connection = new PDO(
        "mysql:host=$host; dbname=$database",
        $user, $pass
    );
} catch (PDOException $e) {
    print "Error!: {$e->getMessage()}";
}
// print_r(PDO::getAvailableDrivers());
?>
