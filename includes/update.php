<?php
require_once("dbConnection.php");

if(isset($_POST['id']) && $_SERVER['REQUEST_METHOD'] == "POST") {

    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $course = htmlspecialchars($_POST['course']);
    $city = htmlspecialchars($_POST['city']);

    $query = $pdo->prepare("UPDATE students SET name=?, course=? , city=? WHERE id=?;");
    $query->execute([$name, $course, $city, $id]);

    header("Location: ../index.php");
}