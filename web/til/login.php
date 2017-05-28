<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php
	session_start();
	require ("nav.php");
	if ($_SESSION["fail"] == true)
	{
        $err = $_SESSION['err'];
		echo '<div id = "error">' . $err . '</div>';
		unset($_SESSION["fail"]);
	}
    if ($_SESSION['success'] == true)
    {
        echo '<div id="success">Account successfully created</div>';
        unset($_SESSION["success"]);
    }
		
	?><br><br>
        <div id="page">
            <form id="login" action="authenticate.php" method="post">
                <h3>Login to an existing account</h3>
                Username:
                <input type="text" id="username" name="username"><br><br> Password:
                <input type="password" id="pass" name="pass"><br><br>
                <input type="submit" value="Submit">
            </form>

            <form id="register" action="register.php" method="post">
                <h3>Create a new Account</h3>
                Desired Username:
                <input type="text" id="newusername" name="newusername"><br><br> Choose Password:
                <input type="password" id="newpass" name="newpass"><br><br>
                <input type="submit" value="Submit"><br><br>
            </form>

        </div>
</body>

</html>
