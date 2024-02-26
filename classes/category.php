<?php

class Category
{
    private $name;
    private static $validCategories = array("Dog", "Cat", "Birds", "Fish");
    private $error;

    public function __construct($name)
    {
        if ($this->isValidCategory($name)) {
            $this->name = $name;
        } else {
            $this->error = "Invalid category.";
            $this->name = null;
        }
    }

    private function isValidCategory($category)
    {
        return in_array($category, self::$validCategories);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getError()
    {
        return $this->error;
    }
}

?>