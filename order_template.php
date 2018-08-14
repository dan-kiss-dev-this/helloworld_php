<?php
    $recipient = 'Rich';
    $downtown_address = '208 sw 5th ave, Portland, or';
    $northwest_address = '1978 19th ave, Portland, or';
    $south_address = '1493 19th ave, Portland, or';
    $downtown_order = '302 cups';
    $northwest_order = '502 cups';
    $south_order = '1002 cups';
    $salem_address = '123 st, salem or';
    $salem_order = '402 cups';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order Form</title>
  </head>
  <body>
    <p>Hi <?php echo $recipient ?>, </p>
    <p>Just making my weekly order. Details are below.</p>
    <p><?php echo $downtown_order ?></p>
    <p><?php echo $downtown_address ?></p>
    <p><?php echo $northwest_order ?></p>
    <p><?php echo $northwest_address ?></p>
    <p><?php echo $south_order ?></p>
    <p><?php echo $south_address ?></p>
    <p><?php echo $salem_order ?></p>
    <p><?php echo $salem_address ?></p>
    <p></p>
    <p>Thanks,</p>
    <p>Diane</p>
  </body>
</html>
