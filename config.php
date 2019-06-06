<?php

$dsn = "mysql:dbname=cadaster_users;host=localhost";
$dbuser = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpassword);
} catch(PDOexception $exception) {
    echo "ERROR: ".$exception->getMessage();
}

?>