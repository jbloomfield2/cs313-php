<!DOCTYPE html>
<html>
    <head>
    <title>login</title>
	<link rel = "stylesheet" href = "til.css">
    </head>
    <body>
    <?php
	session_start();
	require ("nav.php");
	if ($_SESSION["fail"] == true)
	{
		echo '<div id = "error">Invalid username or password</div>';
		unset($_SESSION["fail"]);
	}
		
	?><br><br>
        <form action = "authenticate.php" method = "post">
            Username<input type = "text" id = "username" name = "username"><br><br>
            Password<input type = "password" id = "pass" name = "pass"><br><br>
            <input type = "submit" value="Submit">
        </form>
    </body>
    
</html>