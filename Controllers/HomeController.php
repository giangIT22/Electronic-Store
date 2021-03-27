<?php

class HomeController extends BaseController{
    protected $productModel;
    protected $categoryModel;
    public function __construct(){
        $this->loadModel('ProductModel');
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;
        $this->productModel = new ProductModel;
    }

    public function index(){
        $products = $this->productModel-> getProducts(8);
        $categories = $this->categoryModel->getAll();
        return $this->view('frontend.home.index',[
            'products'  => $products,
            'categories'=> $categories
        ]);
    }
}