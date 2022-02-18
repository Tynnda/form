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
    <link rel="stylesheet" href="style-edit.css">
</head>
<body>
    <div class="newRegion">
        <a  href="addForm.php">CREATE A NEW REGION</a>
    </div>
    <hr/>

    <div class="region-list">

        <div class="region-list__region region-item">

            <div>
            <span><strong>id:</strong></span> <?= $region->id ?>
            </div>
            
            <div class="region-item__name"><span><strong>name:</strong></span>
                <?= $region->name ?>
            </div>
        
            <div class="region-item__country"><span><strong>slug:</strong></span>
                <?= $region->slug ?>
            </div>
            <br>
        
            <a href="update.php?id=<?= $region->id?>">EDIT</a>
            <br>
            <br>
            <form action="delete.php?id=<?=$region->id?>" method="post">
            <button class="delete-button" onclick="if(!confirm('Do you really want to delete it?')) return false;" style="color: red">delete</button>
            </form>
            <hr/>

        </div>

    </div>
    
</body>
</html>