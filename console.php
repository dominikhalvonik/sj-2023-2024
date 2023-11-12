<?php
include_once "lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-2023-2024");


/*
$menuItem = $db->insertMenuRecord("Domov", "index.php");
$menuItem2 = $db->insertMenuRecord("Portfólio", "portfolio.php");
$menuItem3 = $db->insertMenuRecord("Q&A", "qna.php");
$menuItem4 = $db->insertMenuRecord("Kontakt", "kontakt.php");

var_dump($menuItem, $menuItem2, $menuItem3, $menuItem4);
*/

//$db->deleteMenuItems();

$db->updateMenuItem(1, "Domov");