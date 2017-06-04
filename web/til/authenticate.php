<?php
require ("db.php");
$user = htmlspecialchars($_POST["username"]);
$pass = htmlspecialchars($_POST["pass"]);

$getuser = $db->query('SELECT * FROM userdata WHERE username=\'' . $user . '\'');
$result = $getuser->fetchAll(PDO::FETCH_ASSOC);
$verify = password_verify($pass, $result[0]["password"]);


if ($user == $result[0]["username"] && $verify == true)
{
    session_start();
    header("Location: tilhome.php");
    $_SESSION["username"] = $user;
    $_SESSION["uid"] = $result[0]["id"];
}
else
{
	session_start();
	$_SESSION["fail"] = true;
    $_SESSION['err'] = 'invalid username or password';
	header("Location: login.php");
}

?>