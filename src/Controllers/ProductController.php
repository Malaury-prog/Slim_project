<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController

{
    public static function all($nb = 2)
    {
        $products = Product::getAllProductsByDesc();
        $arrayProducts = [];
        $nb = count($products) < $nb ? count($products) : $nb;
        for ($i = 0; $i < $nb; $i++) {
            $arrayProducts[] = $products[$i];
        }
        return ($arrayProducts);
    }
}
