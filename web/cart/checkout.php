<?php
session_start();
if(!isset($_SESSION["cart"]))
    header("Location: shop.php")
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Checkout</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div id="header"><a href="viewcart.php">Return to cart</a></div>
    <h2>Enter your Address:</h2>
        <form action="thankyou.php" method ="get">
            <label>Address Line 1:</label>  <input type = "text" name = "addr1"><br><br>
            <label>Address Line 2:</label>  <input type = "text" name = "addr2"><br><br>
            <label>City:</label>  <input type = "text" name = "city"><br><br>
            <label>State:</label>  <input type = "text" name = "state"><br><br>
            <label>Zip:</label>  <input type = "text" name = "zip"><br><br>
            <button type="submit">Submit</button>
    
        </form></body>

</html>
