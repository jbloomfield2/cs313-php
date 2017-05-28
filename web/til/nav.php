<!DOCTYPE html>
<div id="nav">
    <a id="home" href="tilhome.php">Home</a>
    <?php
    session_start();
    if (isset($_SESSION['username']))
    {
        echo '<a id="logout" href="logout.php">logout (' . $_SESSION['username'] . ')</a>';
        echo '<a id="Newpost" href="new_post.php">New Post</a>';
    }
    else
    {
        echo '<a id="login/register" href="login.php">Login/Register</a>';
        
    }
    ?>
</div>
