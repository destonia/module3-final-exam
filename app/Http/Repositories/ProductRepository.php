<?php


namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepository
{
    public function getAll(){
        return Product::all();
    }

    public function getById($id){
        return Product::findOrFails($id);
    }
    public function store($product){
        $product->save();
    }
}
