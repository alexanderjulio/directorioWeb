<?php

$dbHost = 'localhost';
$dbName = 'directorio';
$dbUser = 'root';
$dbPass = 'caballo1';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
}