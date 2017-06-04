<!DOCTYPE html>
<html>
<?php
require ("db.php");
require ("nav.php");
$user = $_GET['user'];

$stmt = $db->prepare('SELECT * FROM post p INNER JOIN userdata u ON p.submitted_by = u.id WHERE u.username = :user');
$stmt->bindValue(':user', $user, PDO::PARAM_STR);
$stmt->execute();
    
foreach ($stmt as $row)
{
  echo '<div id="post">' . $row["points"] . ' points<br>';
  echo '<p id="title"><b>' . $row["title"] . '</b><br>' . $row['content'] . '</p>';
  echo '</div><br/>';
}
?>

<head>
    <link rel="stylesheet" href="til.css">
    <title>post history for <?php echo $user ?></title>
</head>



</html>