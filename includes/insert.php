<?php
require_once("dbConnection.php");

if($_SERVER['REQUEST_METHOD'] === "POST") {
    try {
        $name = htmlspecialchars($_POST['name']);
        $course = htmlspecialchars($_POST['course']);
        $city = htmlspecialchars($_POST['city']);
        
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