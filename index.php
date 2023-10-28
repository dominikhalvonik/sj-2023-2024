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

$currentDateTime = returnCurrentDateTime();
var_dump($currentDateTime);
printSomething("Something new", 50);
?>

</body>
</html>