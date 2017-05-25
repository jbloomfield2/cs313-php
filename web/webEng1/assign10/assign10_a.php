<?php
if(isset($_POST['cancel']))
{
	print "
	<html>
      <head>
	  <link rel=\"stylesheet\" href=\"style.css\">
      <title>Order Cancelled</title>
	  </head>
	  <body>
	  <form>
	  <h2>Your Order has been Cancelled.<br> no charges were made to your card.<br></h2>
	  </form>
	  </body>
	  </html>";
}

if(isset($_POST['confirm']))
{
	print "
	<html>
      <head>
	  <link rel=\"stylesheet\" href=\"style.css\">
      <title>Order successful</title>
	  </head>
	  <body>
	  <form>
	  <h2>Your Order has been Succesfully placed.<br>
	  expect your items within 4-7 business days.<br></h2>
	  </form>
	  </body>
	  </html>";
}
?>