<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Regions.php';


$success = connect('localhost', 'world', 'root', '');


$region = new Regions;

$region->name = $_POST['name'];
$region->slug = $_POST['slug'];

$region->insert();

echo('<pre>');
var_export($region);
echo('</pre>');

header('Location: edit.php?id=' . $region->id);