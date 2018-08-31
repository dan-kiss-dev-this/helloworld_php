<?php
    $groceries = array("eggs", "milk", "bread", "apples", "bananas", "fruit rollups", "steak", "kale", "pasta", "flour", "sugar", "vanilla");
    // var_dump($groceries);
    // array_push($groceries, 'apples', 'tomatoes');
    // var_dump($groceries);
    $rainbow = array('red', 'orange', 'yellow', 'green', 'violet', 'blue');
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
  </body>
</html>
