<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moja prva stranka</title>
</head>
<body>
<?php
//ini_set("memory_limit", "1G");
//include "functions.php";
include_once "functions.php";
//require "functions.php";
//require_once "functions.php";
include_once "Trieda.php";
include_once "DietaTriedy.php";

use ukf\Trieda;
use ukf\DietaTriedy;

$currentDateTime = returnCurrentDateTime();
var_dump($currentDateTime);
printSomething("Something new", 1);

$trieda = new Trieda();
$trieda->printHelloMessage();
var_dump($trieda->mojPublAtt);
$trieda->printRandomNumber([1,2,3,4], 10);

$dieta = new DietaTriedy();
var_dump($dieta->nasobokNahodnehoCisla(10));
?>

</body>
</html>