<?php
/**
 *
 */
class Car
{
    public $make_model;
    public $price;
    public $miles;

    function worthBuying($max_price1)
    {
        return $this->price < $max_price1;
    }
}

$porsche = new Car();
$porsche->make_model = '2014 Porshe 911';
$porsche->price = 114000;
$porsche->miles = 7888;

$ford = new Car();
$ford->make_model = "2011 Ford F450";
$ford->price = 55995;
$ford->miles = 14241;

$lexus = new Car();
$lexus->make_model = "2013 Lexus RX 350";
$lexus->price = 44700;
$lexus->miles = 20000;

$mercedes = new Car();
$mercedes->make_model = "Mercedes Benz CLS550";
$mercedes->price = 39900;
$mercedes->miles = 37979;

$cars = array($porsche, $ford, $lexus, $mercedes);
$max_price = $_GET['price'];
$cars_matching_search = array();
foreach ($cars as $car) {
  if ($car->worthBuying($max_price)) {
    array_push($cars_matching_search, $car);
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Car dealer form</title>
  </head>
  <body>
    <h1>Your dealership</h1>
    <ul>
      <?php
        foreach ($cars_matching_search as $car) {
          echo "<li> $car->make_model </li>";
          echo "<ul>";
            echo "<li> $car->price </li>";
            echo "<li> Miles: $car->miles </li>";
          echo "</ul>";
        }
      ?>
    </ul>
  </body>
</html>
