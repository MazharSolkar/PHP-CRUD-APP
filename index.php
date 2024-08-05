<?php
require_once("./includes/read.php");
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
    <h1>Student List</h1>
    <a href="insertPage.php"><button class="btn btn-success my-2">Add New Student</button></a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>  <th scope="col">Name</th>
            <th scope="col">Course</th>
            <th scope="col">City</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['course'] ?></td>
                <td><?= $student['city'] ?></td>
                <td class="d-flex gap-2">
                    <a href="editPage.php?id=<?= $student['id'] ?>" class="btn btn-primary">Edit</a>
                    
                    <form method="post" action="./includes/delete.php">
                        <input type="hidden" name="id" value="<?= $student['id'] ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
