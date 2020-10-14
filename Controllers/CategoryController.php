<?php
class CategoryController extends BaseController{
    protected $categoryModel;
    protected $productModel;

    public function __construct(){
        $this->loadModel('CategoryModel');
        $this->loadModel('ProductModel');
        $this->productModel  = new ProductModel;
        $this->categoryModel = new CategoryModel;

    }

    public function show(){
        $categories = $this->categoryModel->getAll();
    
        $categoryId = $_GET['id'] ?? null;

        $category   = $this->categoryModel->findCategoryById(['*'], $categoryId);

        $products = $this->productModel->getByCategoryId($categoryId);
        return $this->view('frontend.categories.show',[
            'categories' => $categories,
            'products'   => $products,
            'category'   => $category
        ]);
    }
}