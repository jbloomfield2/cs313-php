<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="til.css">
    <title>Today I Learned</title>
</head>

<body>
    <?php
    require ("db.php");
    require ("nav.php");

    $stmt = $db->prepare('SELECT p.id,p.title, p.content, p.points, u.username FROM post p INNER JOIN userdata u ON p.submitted_by = u.id ORDER BY p.id DESC LIMIT 20');
    $stmt->bindValue(':user', $user, PDO::PARAM_STR);
    $stmt->execute();
    ?>
        <div id="post">
            <h3>Welcome,
                <?php
                if (isset($_SESSION["username"]))
                {
                    $user = $_SESSION["username"];
                    print $user;
                }?>
            </h3><br>
            <p>Post anything interesting you have learned recently, shown below are the 20 most recent posts from users. Vote up posts which you find interesting and vote down posts which you don't find interesting. </p>
        </div>

        <?php
    foreach ($stmt as $row)
    {	
      echo '<div id="post">' . $row["points"] . ' points<br>';
      if (isset($_SESSION["username"]))
      {
        echo '<a href="vote.php?vote=up&post=' . $row['id'] . '"><img src="arr_up.png"></a>';
        echo '<a href="vote.php?vote=down&post=' . $row['id'] . '"><img src="arr_down.png"></a>';
      }
      
      echo '<p id="title"><b>' . $row["title"] . '<br><br></b>' . $row['content'] . '</p> . ';
      echo '<br>submitted by: <b><a href="posthistory.php?user=' . $row["username"] . '">' . $row["username"] . '</b></a>';
      echo '</div><br/>';
    }
    ?>
</body>

</html>
