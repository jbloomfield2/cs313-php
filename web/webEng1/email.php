<?php
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($to,$subject,$message);
print "<h2>message sent</h2>"

?>
