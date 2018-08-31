<?php
    $user_age = $_GET["user_age"];
    $response = checkAge($user_age);
    function checkAge($user_age_test)
    {
        if ($user_age_test >= 22 || $user_age_test == 'look at my id') {
            return "you can drink";
        }
        elseif ($user_age_test == 21 && $user_age_test/2 == 10.5) {
          return 'you just turned 21 ok then welcome';
        }
        else {
          return 'you cant drink';
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
