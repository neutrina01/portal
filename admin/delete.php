<?php
include_once "header.php";
$db = $GLOBALS['db'];

if(isset($_GET['id'])) {
    $deleteTemplate = $db->deleteTemplate($_GET['id']);

    if($deleteTemplate) {
        header("Location: templates.php");
    } else {
        echo "ERROR!!!";
    }
} else {
    echo "ERROR!!!";
}
?>




