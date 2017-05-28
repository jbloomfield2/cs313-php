<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="til.css">
    <title>Today I Learned</title>
</head>

<?php
require ("db.php");
require ("nav.php");
if (isset($_SESSION["username"]))
{
	$user = $_SESSION["username"];
	print "Welcome, $user";
}




foreach ($db->query('SELECT * FROM post') as $row)
{
	$id = $row["submitted_by"];
	$getname = $db->query('SELECT username FROM userdata WHERE id =' . $id);
	$result = $getname->fetchAll(PDO::FETCH_ASSOC);
	
  echo '<div id="post">' . $row["points"] . ' points<br>';
  echo '<p id="title"><b>' . $row["title"] . '</b><br>' . $row["content"] . '</p>';
  echo '<br>submitted by: <b>' . $result[0]["username"] . '</b>';
  echo '</div><br/>';
}
?>

</html>
