<?php
$host = "localhost";
$port = 3307;
$db_name = "phpMysqlCrud";
$db_username = "root";
$db_password = "";

try {
  // pdo = PHP data object
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db_name", $db_username, $db_password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  die("Connection Failed: " . $e->getMessage());
}
