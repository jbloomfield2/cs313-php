<?php
session_start();
if (!isset($_SESSION["cart"]))
    $_SESSION["cart"] = array("item1" => 0, "item2" => 0, "item3" => 0 ,"item4" => 0);
$numadded = 0;


if (isset($_GET["item1"]))
{
    $numadded++;
    $_SESSION["cart"]["item1"] += 1;
}

if (isset($_GET["item2"]))
{
    $numadded++;
    $_SESSION["cart"]["item2"] += 1;
}

if (isset($_GET["item3"]))
{
    $numadded++;
    $_SESSION["cart"]["item3"] += 1;
}

if (isset($_GET["item4"]))
{
    $numadded++;
    $_SESSION["cart"]["item4"] += 1;
}

if ($numadded > 0)
    print "<div id = \"note\">Added $numadded items</div>";

?>
<!DOCTYPE html>
<html lang="">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Browse Items</title>
</head>

<body>
    
        <div id="header"><a href="viewcart.php">View shopping cart</a></div>
        <form name="order" action = "shop.php" method = "get">
        <table>
            <thead>please make your desired selection: </thead>
            <tr>
                <th>CPU</th>
                <th>keyboard</th>
                <th>Memory</th>
                <th>Monitors</th>
            </tr>
            <tr>
                <td><img src="https://images-na.ssl-images-amazon.com/images/I/41kyOSaGrQL.jpg" style="height:160px;"></td>
                <td><img src="https://images-na.ssl-images-amazon.com/images/I/81wvukMTHKL._SL1500_.jpg" style="height:160px;"></td>
                <td><img src="https://images-na.ssl-images-amazon.com/images/I/61pfjK4csnL._SL1000_.jpg" style="height:160px;"></td>
                <td><img src="https://images-na.ssl-images-amazon.com/images/I/31jrx-UBbEL.jpg" style="height:160px;"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name = "item1">
                    Intel Core i5 6600k 3.5 ghz processor <b>$235.99</b></td>
                <td><input type="checkbox" name = "item2"/>
                    Razor Chroma backlit <br /> mechanical keyboard <b>$109.99</b></td>
                <td><input type="checkbox" name = "item3"/>
                    Kingston hyperx 16GB DDR4 ram <b>$79.99</b></td>
                <td><input type="checkbox" name = "item4"/>
                    lg 25' ultrawide monitor <b>$189.99</b></td>
            </tr>

        </table>
            <input type="submit">
    </form>
</body>
</html>