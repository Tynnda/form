<?php
require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Regions.php';



$success = connect('localhost', 'world', 'root', '');

$id = $_GET['id'];
$query = "SELECT * FROM `regions` WHERE `id` = ?";
$region = DB::selectOne($query, [$id], 'Regions');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <br>
    <form action="addFormProcess.php" method="post">
        <h1>Region form update</h1>
        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text"
            name="name"
            value="<?= $region->name ?>"
            >
        </div>
        <div class="form-group">
            <label for="slug">Slug</label><br>
            <input type="text"
            name="slug"
            value="<?= $region->slug  ?>">
        </div>
        <br>
        <div class="form-group"><button type="submit">Save region</button></div>
    </form>
    
</body>
</html>