<?php
require_once("dbConnection.php");

if($_SERVER['REQUEST_METHOD'] === "POST") {
    try {
        $name = $_POST['name'];
        $course = $_POST['course'];
        $city = $_POST['city'];
        
        $query = $pdo->prepare("INSERT INTO students (name, course, city) VALUES (?, ?, ?);");
        $query->execute([$name,$course,$city]);
    
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Database Error: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}