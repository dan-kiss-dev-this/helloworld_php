<?php
  class Rectangle
  {
      public $length;
      public $width;

      function isSquare()
      {
        // echo 'line 9' . $this;
          if($this->length == $this->width) {
            return true;
          } else {
            return false;
          }
      }

  }
  
  $my_rectangle = new Rectangle();
  $my_rectangle->length = $_GET["length"];
  $my_rectangle->width = $_GET["width"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>make a rectangle</title>
  </head>
  <body>
    <div class="container">
      <?php
            if ($my_rectangle->isSquare()){
              echo "<h1>Congratulations! You made a square!</h1>";
            } else {
              echo "<h1>Sorry not a square</h1>";
            }
      ?>
    </div>
  </body>
</html>
