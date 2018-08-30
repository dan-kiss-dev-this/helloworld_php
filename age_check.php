<?php
    $user_age = $_GET["user_age"];
    $response = checkAge($user_age);
    function checkAge($user_age_test)
    {
        if ($user_age_test >= 21) {
            return "you can drink";
        }
    }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Age check</title>
  </head>
  <body>
    <p>So <?php echo $response ?></p>
  </body>
</html>
