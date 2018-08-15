<?php
  $repeat_text = $_GET["repeat_text"];
  $number_of_repeats = $_GET["number_of_repeats"];
  $repeated_text = str_repeat($repeat_text, $number_of_repeats);
  $input_phrase = $repeat_text;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The repeater tm</title>
  </head>
  <body>
    <h1>Look at your phase being repeated</h1>
    <p><?php echo strtoupper($repeated_text); echo str_word_count($repeated_text) . ' words'; ?></p>
  </body>
</html>
