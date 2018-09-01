<?php
    class Contact
    {
        public $name;
        public $phone;
        public $address;
        public $image_path;
    }
    $hendrix = new Contact();
    $hendrix->name = "Jimi Hendrix";
    $hendrix->phone = "503-826-9371";
    $hendrix->address = "208 se 5th st portland or 97204";
    $hendrix->image_path = "images/hello_grand.jpg";

    $elvis = new Contact();
    $elvis->name = "Elvis Presley";
    $elvis->phone = "617-356-3571";
    $elvis->address = "Graceland";
    $elvis->image_path = "images/hello_grand.jpg";

    $einstein = new Contact();
    $einstein->name = 'Albert Einstein';
    $einstein->phone = "415-738-4935";
    $einstein->address = "3718 MLK oakland CA";
    $einstein->image_path = "images/hello_grand.jpg";

    $address_book_objects = array($hendrix, $elvis, $einstein);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>addresses of hendrix and others</title>
  </head>
  <body>
    <div class="container">
      <h1>Address Book</h1>
      <ul>
        <?php
          foreach($address_book_objects as $contact) {
            echo "<li>";
            echo $contact->name;
            echo "<ul>";
            echo "<li><img src='$contact->image_path'></li>";
            echo "<li> $contact->phone </li>";
            echo "<li> $contact->address </li>";
            echo "</ul>";
            echo "</li>";
          }
        ?>
      </ul>
    </div>
  </body>
</html>
