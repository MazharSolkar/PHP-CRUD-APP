<?php
require_once("dbConnection.php");

$statement = $pdo->prepare("SELECT * FROM students");
$statement->execute();

$students = $statement->fetchAll();