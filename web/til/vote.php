<?php
$post = $_GET['post'];
$vote = $_GET['vote'];

echo $vote;
echo $post;
require("db.php");
$stmt = $db->prepare('SELECT points FROM post where id = :post');
$stmt->bindValue(':post', $post);
$stmt->execute();
$points = $stmt->fetch();
echo $points['points'];

if ($vote == 'up')
{
    $score = $points['points'] + 1;
    $stmt = $db->prepare('UPDATE post SET points = :score WHERE id = :post');
    $stmt->bindValue(':score', $score);
    $stmt->bindValue(':post', $post);
    $stmt->execute();
    header("Location: tilhome.php");
}
elseif ($vote == 'down')
{
    $score = $points['points'] - 1;
    $stmt = $db->prepare('UPDATE post SET points = :score WHERE id = :post');
    $stmt->bindValue(':score', $score);
    $stmt->bindValue(':post', $post);
    $stmt->execute();
    header("Location: tilhome.php");
}

?>