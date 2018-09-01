<?php
  $input = 15;
  function pingPong4($evaluate) {
    $counter = 0;
    $my_array = array();
    while ($counter < $evaluate) {
      $counter +=1;
      if ($counter % 15 == 0 ) {
        array_push($my_array, 'pingpong');
      } elseif ($counter % 5 == 0) {
        array_push($my_array, 'pong');
      } elseif ($counter % 3 == 0) {
          array_push($my_array, 'ping');
      } else {
        array_push($my_array, $counter);
      }
    }
    var_dump($my_array);
  }
  $answer = pingPong4($input);
?>
