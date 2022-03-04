<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface 
{
    public function getAllProducts() 
    {
        return Product::all();
    }

    public function getProductById($orderId) 
    {
        return Product::findOrFail($orderId);
    }

    public function deleteProduct($orderId) 
    {
        Product::destroy($orderId);
    }

    public function createProduct(array $orderDetails) 
    {
        return Product::create($orderDetails);
    }

    public function updateProduct($orderId, array $newDetails) 
    {
        return Product::whereId($orderId)->update($newDetails);
    }
}
