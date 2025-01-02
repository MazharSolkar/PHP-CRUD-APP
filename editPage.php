<?php
require_once("./includes/dbConnection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = $pdo->prepare("SELECT * FROM students WHERE id=?;");
    $query->execute([$id]);

    $student = $query->fetch(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($student);
    // echo "</pre>";
} else {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"   
 rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-2">Student Details</h1>
        <form action="./includes/update.php" method="POST">
            <div class="card col-md-6 p-1 border-0 mx-auto">
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?=$student['name']?>">
                </div>
                <div class="mb-3">
                    <label for="course" class="form-label">course</label>
                    <input type="text" class="form-control" name="course" id="course" value="<?=$student['course']?>">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">city</label>
                    <input type="text" class="form-control" name="city" id="city" value="<?=$student['city']?>">
                </div>
                <div class="text-center">
                    <input type="hidden" name="id" value="<?= $student['id'] ?>">
                    <button class="btn btn-primary" type="submit">Update Details</button>
                </div>
            </div>
        </form>
    </div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
