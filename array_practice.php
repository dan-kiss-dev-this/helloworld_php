<?php
$groceries = array("eggs", "milk", "bread", "apples", "bananas", "fruit rollups", "steak", "kale", "pasta", "flour", "sugar", "vanilla");
// var_dump($groceries);
// array_push($groceries, 'apples', 'tomatoes');
// var_dump($groceries);
$rainbow = array('red', 'orange', 'yellow', 'green', 'violet', 'blue');
$book_prices = array(25.01, 10.99, 13.50, 33, 50);
$total_price = 0;
$dictionary = array('apple' => 'afruit commonly red or green', 'zebra' => 'an animal with black and white stripes', "computer" => "that big shiny box you use");
echo $dictionary["zebra"];
$cupcake_order = array('vanilla' => 12, 'chocolate' => 24, 'raspberry' => 6, 'caramel apple' => 36 );
$dictionary['cat'] = 'a small furry animal goes meow';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array Practice</title>
  </head>
  <body>
    <h1>My Grocery List</h1>
      <ul>
        <?php
          foreach($groceries as $purchase) {
            echo '<li>' . $purchase . "</li>";
          }
        ?>
        <p><?php echo $purchase ?></p>
      </ul>
      <h1>Colors in rainbows</h1>
      <ul>
        <?php
          foreach ($rainbow as $single_color) {
            echo "<li>" . $single_color . "</li>";
          }
        ?>
      </ul>
      <p>Price of books</p>
      <?php
        foreach($book_prices as $single_price) {
          $total_price += $single_price ;
        }
        echo $total_price;
      ?>
  </body>
</html>
