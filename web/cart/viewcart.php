<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart Contents</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="header"><a href="clearcart.php">Clear contents of Cart</a>      <a href="shop.php">Back to shop</a></div>
        <h2>Your cart:</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php
                require("cart.php")?>

        </table>
        <a href="checkout.php">Proceed to Checkout</a>
    </body>
</html>
