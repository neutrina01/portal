<?php
include_once "header.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $insertTemplate = $db->insertTemplate($_POST['title'], $_POST['description'], $_POST['owner']);

    if($insertTemplate) {
        header("Location: templates.php");
    } else {
        echo "ERROR!!!";
    }
} else {
    ?>
    <form action="" method="post">
        Template's title: <br>
        <input name="title" type="text" placeholder="Template title"><br>
        Template's description:<br>
		<textarea rows = "5" cols = "60" name = "description">Template description</textarea><br>
        Template's owner:<br>
        <input name="owner" type="text" placeholder="Template owner"><br>
        <input type="submit" name="submit" value="Insert"><br>
    </form>
    <?php
}
?>




