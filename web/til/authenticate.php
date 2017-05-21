<?php
require ("db.php");
$user = htmlspecialchars($_POST["username"]);
$pass = htmlspecialchars($_POST["pass"]);


$getuser = $db->query('SELECT * FROM userdata WHERE username=\'' . $user . '\'');
$result = $getuser->fetchAll(PDO::FETCH_ASSOC);

if ($user == $result[0]["username"] && $pass == $result[0]["password"])
{
    session_start();
    header("Location: tilhome.php");
    $_SESSION["username"] = $user;
}
else
{
	session_start();
	$_SESSION["fail"] = true;
	header("Location: login.php");
}

?>