<?php

class Article {

    private $id;
    private $name;
    private $artist;
    private $image;
    private $description;
    private $weight;
    private $price;
    private $in_sale;
    private $genre_id;
    private $format_id;
    

    public function __construct($id, $name, $artist, $description, $weight, $price, $image, $in_sale, $genre_id, $format_id) {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->image = $image;
        $this->description = $description;
        $this->weight =$weight;
        $this->price = $price;
        $this->image = $image;
        $this->in_sale = $in_sale;
        $this->genre_id = $genre_id;
        $this->format_id = $format_id;
    }

        public function getId()
        {
            return $this->id;
        }
         
        public function setId($id)
        {
            $this->id = $id;
        }
    
        public function getName()
        {
            return $this->name;
        }
    
        public function setName($name)
        {
            $this->name = $name;
        }
    
        public function getArtist()
        {
            return $this->artist;
        }
    
        public function setArtist($artist)
        {
            $this->artist = $artist;
        }
    
        public function getDescription()
        {
            return $this->description;
        }
    
        public function setDescription($description)
        {
            $this->description = $description;
        }
    
        public function getWeight()
        {
            return $this->weight;
        }

        public function setWeight($weight)
        {
            $this->weight = $weight;
        }
    
        public function getPrice()
        {
            return $this->price;
        }
    
        public function setPrice($price)
        {
            $this->price = $price;
        }
    
        public function getIn_sale()
        {
            return $this->in_sale;
        }
    
        public function setIn_sale($in_sale)
        {
            $this->in_sale = $in_sale;
        }
    
        public function getGenre_id()
        {
            return $this->genre_id;
        }
    
        public function setGenre_id($genre_id)
        {
            $this->genre_id = $genre_id;
        }
    
        public function getFormat_id()
        {
            return $this->format_id;
        }
    
        public function setFormat_id($format_id)
        {
            $this->format_id = $format_id;
        }

        public function getImage()
        {
            return $this->image;
        }

        public function setImage($image)
        {
            $this->image = $image;
        }
    }

    require('chaussure.php');
    require('vetement.php');
