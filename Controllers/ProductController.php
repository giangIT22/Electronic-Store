<?php

class ProductController extends BaseController{
    protected $productModel;
    protected $categoryModel;
    public function __construct(){
        $this->loadModel('ProductModel');
        $this->loadModel('CategoryModel');
        $this->productModel = new ProductModel;     
        $this->categoryModel = new CategoryModel;   
    }

    public function index(){

    }

    public function show(){
        $productId = $_GET['id'] ?? null;
        $categories = $this->categoryModel->getAll();
        $product = $this->productModel->findProductById(['*'], $productId);
        $products = $this->productModel->getByCategoryId($product['category_id'], $productId);
        return $this->view('frontend.products.show',[
            'product'     => $product,
            'products'    => $products,
            'categories'  => $categories
        ]);
    }

    public function more(){
        $categories = $this->categoryModel->getAll();
        $categoryId = $_GET['id'] ?? 24;
        $products = $this->productModel->getListProducts($categoryId);

        return $this->view('frontend.products.more',[
            'categories' => $categories,
            'products'   => $products,
        ]);
    }
}
