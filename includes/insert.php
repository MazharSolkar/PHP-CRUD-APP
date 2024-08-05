<?php
require_once("dbConnection.php");

if($_SERVER['REQUEST_METHOD'] === "POST") {
    try {
        $name = $_POST['name'];
        $course = $_POST['course'];
        $city = $_POST['city'];
        
        $query = $pdo->prepare("INSERT INTO students (name, course, city) VALUES (:name, :course, :city);");
    
        $query->bindParam(":name", $name);
        $query->bindParam(":course", $course);
        $query->bindParam(":city", $city);
    
        $query->execute();
    
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Database Error: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}