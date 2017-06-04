<?php
require("nav.php");
require("db.php");
if (!isset($_SESSION["username"]))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Create a new post</title>
    <link rel="stylesheet" href="til.css">
</head>

<body>
    <div id="post">
        <form id="newpost" action="create_post.php" method="post">
            <h3>Create a new post</h3><br>
            <label>Post Title</label><input type="text" id="title" name="title"><br><br>
            <label>Post Content</label><textarea id = "content" name="content"></textarea><br><br>
            <input type="submit">
        </form>
    </div>
</body>

</html>

