<?php
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $shipping_price = calculateShipping($weight, $distance);
    function calculateShipping($weight_test, $distance_test)
    {
        $price = ($weight_test / 20) + ($distance_test / 20);
        return $price;
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cost to ship</title>
  </head>
  <body>
    <p>Cost to ship is $<?php echo $shipping_price?></p>
  </body>
</html>
