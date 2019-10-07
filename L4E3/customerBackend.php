<?php

echo "<link rel='stylesheet' type='text/css' href='style.css' />";

$ship = $_POST["shipping"];
$item1 = $_POST["item1"];
$item2 = $_POST["item2"];
$item3 = $_POST["item3"];
$user = $_POST["user"];
$password = $_POST["pw"];

echo "<h1> Aaron's Online Store Receipt </h1>";

echo "<h3> Welcome: " . $user . "<br> </h3>";
echo "<h3> Password: " . $password . "<br><br> </h3>";

echo "<strong>RTX 2080 TI - Quantity: $item1" . "<br></strong>";
echo "Price per item: $800" . "<br>";
$total1 = $item1 * 800;
echo "Total: $$total1" . "<br><br>";

echo "<strong>H440 - Quantity: $item2" . "<br></strong>";
echo "Price per item: $100" . "<br>";
$total2 = $item2 * 100;
echo "Total: $$total2" . "<br><br>";

echo "<strong>Intel i9 - Quantity: $item3" . "<br></strong>";
echo "Price per item: $700" . "<br>";
$total3 = $item3 * 700;
echo "Total: $$total3" . "<br><br>";


if ($ship == "free") {
  $shipcost = 0;
  echo "Shipping Method: 7 Day - Free" . "<br>";
}
elseif ($ship == "overnight") {
  $shipcost = 50;
  echo "Shipping Method: Overnight - 50.00" . "<br>";
}
else {
  echo "Shipping Method: 3 Day Shipping - 5.00" . "<br>";
  $shipcost = 5;
}
$total = $total1 + $total2 + $total3 + $shipcost;
echo "<h3>Grand Total: $$total</h3>";
echo "<h2><br><br>" . "Thank you for shopping with us!</h2>";
 ?>
