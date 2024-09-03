<?php
// Product.php

class Product {
    // Private attributes
    private $title;
    private $image;
    private $price;

    // Constructor to initialize Product object
    public function __construct($title, $image, $price) {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }

    // Getter methods to retrieve private attributes
    public function getTitle() {
        return $this->title;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }
}
?>
