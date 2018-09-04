<?php
  class CD
  {
    public $title;
    public $artist;
    public $cover_art;
    public $price;

    function __construct($album_name, $band_name, $image_path, $album_price = 10.99){
        $this->title = $album_name;
        $this->artist = $band_name;
        $this->cover_art = $image_path;
        $this->price = $album_price;
    }

  }

  $first_cd = new CD('Master of Reality 2', 'Black Sabbath', 'images/hello_grand.jpg');
  $second_cd = new CD("Electric Ladyland","Jimi Hendrix","images/hello_grand.jpg");
  $third_cd = new CD("Nevermind","Nirvana","images/hello_grand.jpg",15.99);
  // old way here before using constructor $third_cd->title = "Nevermind";
  // $third_cd->artist = "Nirvana";
  // $third_cd->cover_art = "images/hello_grand.jpg";
  // $third_cd->price = 10.99;

  $cds = array($first_cd, $second_cd, $third_cd);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/boot
strap/3.2.0/css/bootstrap.min.css'>
    <title>My CD Store</title>
</head>
<body>
    <div class="container">
        <?php
            foreach ($cds as $album) {
                echo "<div class='row'>
                    <div class='col-md-6'>
                      <img src='$album->cover_art'>
                    </div>
                    <div class='col-md-6'>
                        <p>$album->title</p>
                        <p>By $album->artist</p>
                        <p>$$album->price</p>
                    </div>
                </div>
            "; }
?>
  </div>
</body>
</html>
