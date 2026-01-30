<?php

namespace App\Models;

class Product
{
    public $name;
    public $price;
    public $category;

    public function __construct(string $name, float $price, string $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public static function getAllProducts()
    {
        return [
            [
                "name" => "Videoprojecteur Optoma",
                "price" => 299.99,
                "categorie" => "Video"
            ],
            [
                "name" => "Macbook Pro",
                "price" => 1299.99,
                "categorie" => "Informatique"
            ]
        ];
    }
    public static function getAllProductsByDesc()
    {
        return [
            [
                "name" => "Macbook Pro",
                "price" => 1299.99,
                "categorie" => "Informatique"
            ],
            [
                "name" => "Videoprojecteur Optoma",
                "price" => 299.99,
                "categorie" => "Video"
            ]
        ];
    }
}
