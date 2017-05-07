<?php
session_start();
$addr1 = htmlspecialchars($_GET["addr1"]);
$addr2 = htmlspecialchars($_GET["addr2"]);
$city = htmlspecialchars($_GET["city"]);
$state = htmlspecialchars($_GET["state"]);
$zip = htmlspecialchars($_GET["zip"]);

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Thanks for your order</title>
        <link rel="stylesheet" href = style.css>
    </head>
    <body>
        <div id="header"><a href="shop.php">Back to shop</a></div><br>
        <h2>Your order is complete</h2>
        
        This order contains:
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php
                require("cart.php")?>

        </table>
        
        Shipping to:<br><br>
        <?php
             echo "$addr1<br>$addr2<br>$city $state, $zip";
            ?>
    </body>


</html>