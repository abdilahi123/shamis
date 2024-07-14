<?php
$dsn = 'mysql:host=localhost;dbname=nursery_school';
$username = 'root';
$password = '';

try {
    // Attempt to connect to the database
    $pdo = new PDO($dsn, $username, $password);
    // Set PDO to report errors using exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successfully connected to the database";
} catch (PDOException $e) {
    // Report any connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>
