<?php


namespace App\Http\Repositories;


use App\Models\Category;

class CategoryRepository
{
    public function getById($id){
        return Category::findOrFails($id);
    }
    public function getAll(){
        return Category::all();
    }
}
