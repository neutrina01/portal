<?php
include_once "header.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $updateTemplate = $db->updateTemplate($_POST['title'], $_POST['description'], $_POST['owner'], $_POST['id']);

    if($updateTemplate) {
        header("Location: templates.php");
    } else {
        echo "ERROR!!!";
    }
} else {
    if(isset($_GET['id'])) {
        $templates = $db->getSpecificTemplate($_GET['id']);
        ?>
        <form action="" method="post">
            Template's name: <br>
            <input name="title" type="text" value="<?php echo $templates['title'] ?>"><br>
            Description:<br>
            <textarea rows = "5" cols = "60" name = "description"><?php echo $templates['description'] ?></textarea><br>
            Owner:<br>
            <input name="owner" type="text" value="<?php echo $templates['owner'] ?>"><br>
            <input name="id" type="hidden" value="<?php echo $templates['id'] ?>">
            <input type="submit" name="submit" value="Update"><br>
        </form>
        <?php
    } else {
        header("Location: templates.php");
    }
}
?>




