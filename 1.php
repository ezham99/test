
<!DOCTYPE html>
        <html>
        <head>
            <center>
            <header><h1>RECEIPT</h1></header>
            <body>
<style>
        body {
            background-image: url("coffe.jpg") ;
            font-family: fantasy;
        }
</style>
    

<?php
session_start();
$coffee_options = array(
    "Latte" => 7.00,
    "Cappuccino" => 8.00,
    "Espresso" => 6.50,
    "Americano" => 6.00,
    "Mocha" => 8.00,
    "Macchiato" => 9.00,
    "Iced coffee" => 8.00
);
            $coffee_choice = $_SESSION['coffee'];
            $quantity = $_SESSION['quantity'];
            $size = $_SESSION['size'];
            $name = $_SESSION['name'];
            $phone = $_SESSION['phone'];
            $table = $_SESSION['table'];

            $total_cost = $coffee_options[$coffee_choice] * $quantity;

            echo "<p>Hi, $name! </p>";
            echo "<p>Table Number is: $table</p>";
            echo "<p>Order: $quantity $coffee_choice </p>";
            echo "<p>Size :$size</p>";

            if ($total_cost > 100) {
                $total_cost *= 0.9;
            echo "Order qualifies for a 10% discount.";
            }
            echo "<h2> Total: RM $total_cost.</h2>";
        ?>
</center>
</body>
        </head>
        </html> 
