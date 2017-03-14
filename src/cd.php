<?php

    class CD
    {
        private $title;
        private $artist;
        private $cover_art;
        private $price;

        function __construct($album_name, $band_name, $image_path, $album_price = 10.99)
    {
        $this->title = $album_name;
        $this->artist = $band_name;
        $this->cover_art = $image_path;
        $this->price = $album_price;
    }

    function setPrice($new_price)
    {
        $float_price = (float) $new_price;
        if ($float_price != 0) {
          $formatted_price = number_format($float_price, 2);
          $this->price = $formatted_price;
        }
    }

    function getPrice()
    {
      return $this->price;
    }

    function getTitle()
        {
            return $this->title;
        }

        function setArtist($new_artist)
        {
            $this->artist = $new_artist;
        }

        function getArtist()
        {
            return $this->artist;
        }

        function setCoverArt($new_cover_art)
        {
            $this->cover_art = $new_cover_art;
        }

        function getCoverArt()
        {
            return $this->cover_art;
        }

    }

    $first_cd = new CD("Master of Reality", "Black Sabbath", "images/sabbath.jpg");
    $second_cd = new CD("Electric Ladyland", "Jimi Hendrix", "images/hendrix.jpg");
    $third_cd = new CD("Nevermind", "Nirvana", "images/nirvana.jpg");
    $fourth_cd = new CD("I don't get it", "Pork Lion", "images/porklion.jpg", 49.99);
    $fourth_cd->setPrice("1.3925");

    $cds = array($first_cd, $second_cd, $third_cd, $fourth_cd);
?>
