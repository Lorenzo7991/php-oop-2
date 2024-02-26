<?php
require_once __DIR__ . '/../config/data-products.php';
class Product
{
    private $name;
    private $description;
    private $price;
    private $category;
    private $images;

    public function __construct($name, $description, $price, $category, $images)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->images = $images;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getImages()
    {
        return $this->images;
    }

}
?>