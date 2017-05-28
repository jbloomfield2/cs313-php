<?php
require("db.php");
session_start();
$id = $_SESSION['uid'];
$title = $_POST['title'];
$content = $_POST['content'];

$stmt = $db->prepare('INSERT INTO post(title, content, submitted_by) VALUES(:title, :content, :uid)');
$stmt->bindValue(':title',$title);
$stmt->bindValue(':content', $content);
$stmt->bindValue(':uid', $id);
$stmt->execute();
$postid = $db->lastInsertId('post_id_seq');
print ($postid);
$stmt = $db->prepare('INSERT INTO posthistory(submitted_by, post, points) VALUES (:uid, :pid, 0)');
$stmt->bindValue(':uid', $id);
$stmt->bindValue(':pid', $postid);
$stmt->execute();
print($id);
print($title);
print($content);
header("Location: tilhome.php")
?>
