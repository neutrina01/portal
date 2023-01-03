<?php
include_once "header.php";
$db = $GLOBALS['db'];
$templates = $db->getTemplatesRows();



echo "<ul>";
foreach ($templates as $templatesItem) {
    echo "<li>".$templatesItem['title']." <a href='delete.php?id=".$templatesItem['id']."'>Delete</a> <a href='update.php?id=".$templatesItem['id']."'>Update</a> </li>";
}

echo "</ul>";
?>
<br>
<a href='insert.php'>Insert new template</a><br>
<a href="main.php">Home</a><br>
<a href="http://localhost/portal2/">Return to web</a>