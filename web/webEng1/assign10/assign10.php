<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$addr = $_POST['addr'];
$phone = $_POST['phone'];
$total = $_POST['total'];
$card = $_POST['card'];
$expmo = $_POST['expmo'];
$expyear = $_POST['expyear'];
switch($expmo)
{
	case 01:
		$cardexp = "January";
		break;
	case 02:
		$cardexp = "February";
		break;
	case 03:
		$cardexp = "March";
		break;
	case 04:
		$cardexp = "April";
		break;
	case 05:
		$cardexp = "May";
		break;
	case 06:
		$cardexp = "June";
		break;
	case 07:
		$cardexp = "July";
		break;
	case 08:
		$cardexp = "August";
		break;
	case 09:
		$cardexp = "September";
		break;
	case 10:
		$cardexp = "October";
		break;
	case 11:
		$cardexp = "November";
		break;
	case 12:
		$cardexp = "December";
		break;
}



print "<html>
      <head>
	  <link rel=\"stylesheet\" href=\"style.css\">
      <title>Review your order</title>
      </head>
      <body>
      <h2>Review your order:</h2>
	  <form  action = \"assign10_a.php\" method = \"post\">
		<b>Ship to:</b><br>
		$fname $lname<br>
		$addr<br>
		$phone<br><br>
		<b>This order contains:</b><br>";

	if(isset($_POST['item1']))
         print "Intel Core i5 6600k 3.5 ghz processor: $235.99<br>";
	if(isset($_POST['item2']))
         print "Razor Chroma backlit mechanical keyboard : $109.99<br>";
	if(isset($_POST['item3']))
         print "Kingston hyperx 16GB DDR4 ram: $79.99<br>";
	if(isset($_POST['item4']))
         print "LG 25' ultrawide monitor: $189.99<br>";
      
      print "
	  <b>Subtotal:</b><br>
		$total<br>
		Payment will be charged to:<br>
		$card which expires in $cardexp $expyear<br><br>
		<input type = \"submit\" value = \"Cancel\"
		name = \"cancel\">
		<input type = \"submit\" value = \"Confirm\"
		style = \"margin-left:50px\" name = \"confirm\"><br>
	  </form>
	  </body>
      </html>";
?>