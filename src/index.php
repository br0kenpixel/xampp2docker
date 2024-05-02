<?php

echo ("Hello, World!<br /><br />");
echo ("You're using PHP " . phpversion() . ".<br />");

// Test database
$serverName = "db";
$databaseName = "root_db";
$dbUsername = "root";
$dbPassword = "root";
$pdoOpts = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$serverUri = "mysql:host={$serverName};dbname={$databaseName};charset=utf8mb4";

echo ("Connecting to: <a href=\"\">{$serverUri}</a><br />");

try {
    $pdo = new PDO($serverUri, $dbUsername, $dbPassword, $pdoOpts);
} catch (Exception $ex) {
    echo ("Could not connect to the database: " . $ex->getMessage() . "<br />");
    error_log($e->getMessage());
    die();
}

echo ("Database OK<br />");

try {
    $dbVersion = $pdo->query("SELECT VERSION()")->fetch()["VERSION()"];
} catch (Exception $ex) {
    echo ("Could not connect to the database version info: " . $ex->getMessage() . "<br />");
    error_log($e->getMessage());
    die();
}

echo ("Detected database: {$dbVersion}<br />");
