<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Services\CategoryService;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $productService;
    protected $categoryService;

    public function __construct(
        ProductService $productService,
        CategoryService $categoryService
    )
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        $category = $this->categoryService->getAll();
        return view('back-end/index', compact('products','category'));
    }

    public function create()
    {
        $categories = $this->categoryService->getAll();
        return view('back-end/product-create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->productService->store($request);
        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
