<?php
require_once("dbConnection.php");

if(isset($_POST['id'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $city = $_POST['city'];

    $query = $pdo->prepare("UPDATE students SET name= :name, course= :course, city= :city WHERE id=$id;");
    $query->bindParam(':name', $name);
    $query->bindParam(':course', $course);
    $query->bindParam(':city', $city);
    $query->execute();

    header("Location: ../index.php");
}