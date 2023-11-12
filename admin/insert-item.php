<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-2023-2024");

//$_GET, $_POST, $_SESSION,$_COOKIE, $_SERVER, $_REQUEST, $_ENV, $_FILE
if(isset($_POST['submit'])) {
    $insert = $db->insertMenuRecord($_POST['name'], $_POST['url']);

    if($insert) {
        header("Location: home.php?status=1");
    } else {
        header("Location: home.php?status=2");
    }
} else {
    header("Location: home.php");
}