<?php
  $repeat_text = $_GET["repeat_text"];
  $number_of_repeats = $_GET["number_of_repeats"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The repeater tm</title>
  </head>
  <body>
    <h1>Look at your phase being repeated</h1>
    <p><?php echo str_repeat($repeat_text, $number_of_repeats);?></p>
  </body>
</html>
