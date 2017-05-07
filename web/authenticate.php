<?php
$user = htmlspecialchars($_POST["username"]);
$pass = htmlspecialchars($_POST["pass"]);

if ($pass == 5678)
{
    header("Location: home.php");
}
else
{
    header("Location: login.php");
}

?>