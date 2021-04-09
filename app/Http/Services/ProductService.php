<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Models\Product;
use App\Http\Services\BaseService;

class ProductService extends BaseService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }
    public function getById($id){
        return $this->productRepo->getById($id);
    }
    public function store($request){
        $product = new Product();
        $product->fill($request->all());
        $product->category_id = $request->category_id;
        $path = $this->updateLoadFile($request, 'photo', 'product-images');
        $product->photo = $path;
        $this->productRepo->store($product);
    }
}
