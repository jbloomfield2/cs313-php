<?php
            if (isset($_SESSION["cart"]))
                {
                    $item1 = $_SESSION["cart"]["item1"];
                    $item2 = $_SESSION["cart"]["item2"];
                    $item3 = $_SESSION["cart"]["item3"];
                    $item4 = $_SESSION["cart"]["item4"];
                    $totalnum = $item1 + $item2 + $item3 + $item4;
                }
            
            if ($totalnum == 0)
                print "<tr><td>Your Cart is empty</td></tr>";
            if ($item1 > 0)
                print "<tr><td>Intel Core i5 6600k 3.5 ghz processor</td><td>$235.99</td><td>$item1</td></tr>";
            if ($item2 > 0)
                print "<tr><td>Razor Chroma backlit mechanical keyboard</td><td>$109.99</td><td>$item2</td></tr>";
            if ($item3 > 0)
                print "<tr><td>Kingston hyperx 16GB DDR4 ram</td><td>$79.99</td><td>$item3</td></tr>";
            if ($item4 > 0)
                print "<tr><td>lg 25' ultrawide monitor</td><td>$189.99</td><td>$item4</td></tr>";
            
            ?>