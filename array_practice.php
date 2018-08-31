<?php
    $groceries = array("eggs", "milk", "bread");
    var_dump($groceries);
    array_push($groceries, 'apples', 'tomatoes');
    var_dump($groceries);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array Practice</title>
  </head>
  <body>
    <h1>My Grocery List</h1>
    <h3><?php echo $groceries[0]; ?></h3>
    <h3><?php echo $groceries[1]; ?></h3>
    <h3><?php echo $groceries[2]; ?></h3>
  </body>
</html>
