<?php 

    require "loadEnv.php";

    $host = $_ENV['DB_HOST'] ?? "localhost";
    $dbname = $_ENV['DB_DATABASE'] ?? "portfolio";
    $username = $_ENV['DB_USERNAME'] ?? "root";
    $password = $_ENV['DB_PASSWORD'] ?? "";

    try {
        // Create PDO connection
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
?>