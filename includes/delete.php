<?php

require_once('dbConnection.php');
if($_SERVER['REQUEST_METHOD'] === "POST" && (isset($_POST['id']))) {
    try {
        $id = $_POST['id'];

        $query = $pdo->prepare("DELETE FROM students WHERE id=?");
        $query->execute([$id]);

        header("Location: ../index.php");
        die();
    } catch(PDOException $e) {
        die("Database Error: ".$e->getMessage());
    }
} else {
    header("Location: ../index.php");
}