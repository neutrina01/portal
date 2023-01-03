<?php
include_once "header.php";

if(isset($_SESSION['is_admin'])) {
?>

<ul>
    <li><a href="main.php">Home</a></li>
    <li><a href="templates.php">Edit templates</a></li>
    <li><a href="http://localhost/portal2/">Return to web</a></li>
</ul>

<?php
} else {
    ?>
    <form action="login.php" method="post">
        Username:<br>
        <input type="text" name="username" placeholder="Username"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
}
?>
