<?php
require_once("dbConnection.php");

if(isset($_POST['id']) && $_SERVER['REQUEST_METHOD'] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $city = $_POST['city'];

    $query = $pdo->prepare("UPDATE students SET name=?, course=? , city=? WHERE id=?;");
    $query->execute([$name, $course, $city, $id]);

    header("Location: ../index.php");
}