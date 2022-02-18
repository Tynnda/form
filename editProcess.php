<?php
require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Regions.php';

$success = connect('localhost', 'world', 'root', '');

// $id = $_GET['id'];
// $query = "SELECT * FROM `regions` WHERE `id` = ?";
// $region = DB::selectOne($query, [$id], 'Regions');

$region = new Regions;

$region->id = $id;
$region->name = $_POST['name'];
$region->slug = $_POST['slug'];


$region->update($_POST['name'], $_POST['slug']);

header('Location: edit.php?id=' . $region->id);
