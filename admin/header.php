<?php
include_once "../class/db.php";

use portal\DB; /*použiť dalšiu triedu pre ďalšie fungovanie*/

$db = new DB("localhost","portal","root","", 3306);
global $db;

session_start();
?>