<?php
require_once("dbConnection.php");

$query = $pdo->prepare("SELECT * FROM students");
$query->execute();

$students = $query->fetchAll();