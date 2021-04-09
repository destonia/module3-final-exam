<?php


namespace App\Http\Services;


use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\ProductRepository;
use App\Models\Category;

class CategoryService
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getAll()
    {
        return $this->categoryRepo->getAll();
    }
    public function getById($id){
        return $this->categoryRepo->getById($id);
    }
}
