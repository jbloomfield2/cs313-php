<?php
require("db.php");
session_start();

$newuser = $_POST['newusername'];
$pass = $_POST['newpass'];
$stmt = $db->prepare('SELECT username FROM userdata WHERE username=:newuser');
$stmt->bindValue(':newuser', $newuser, PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($row[0]['username'] == $newuser)
{
    $_SESSION["fail"] = true;
    $_SESSION['err'] = 'Username already taken';
	header("Location: login.php");
}
else
{
    $stmt = $db->prepare('INSERT INTO userdata(username, password) VALUES (:user, :pass)');
    $stmt->bindValue(':user', $newuser);
    $stmt->bindValue(':pass', $pass);
    $stmt->execute();
    $_SESSION['success'] = true;
    header("Location: login.php");
}
?>
