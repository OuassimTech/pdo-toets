<?php
$servername = "localhost";
$username = "ob_ad";
$password = "TYhNw3LOUfCyoeP2";
$dbname = "pdo_toets";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>