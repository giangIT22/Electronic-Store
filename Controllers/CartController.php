<?php

class CartController extends BaseController{
    protected $categoryModel;
    protected $productModel;

    public function __construct(){
        $this->loadModel('CategoryModel');
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
        $this->categoryModel = new CategoryModel;

    }
    public function index(){
        $categories = $this->categoryModel->getAll();
        $products   = $_SESSION['cartProduct'] ?? null;

        return $this->view('frontend.carts.index',[
            'categories' => $categories,
            'products'   => $products
        ]);
    }

    public function store(){
        $productId = $_GET['id'] ?? null;
        $product   = $this->productModel->findProductById(['*'],$productId);
        
        if(empty($_SESSION['cartProduct']) || !array_key_exists($productId, $_SESSION['cartProduct'])){
            $product['qty'] = 1;
            $_SESSION['cartProduct'][$productId] = $product;
        }else{
            $_SESSION['cartProduct'][$productId]['qty'] +=1;
        }
        header('location:index.php?controller=cart');
    }
    
    public function update(){
        foreach($_POST['qty'] as $productId => $qty){
            if($qty <0 || !is_numeric($qty)){
                continue;
            }
            if($qty == 0 ){
                unset($_SESSION['cartProduct'][$productId]);
            }
            else{
                $_SESSION['cartProduct'][$productId]['qty'] = $qty;
            }
        }

        if(empty($_SESSION['cartProduct'])){
            header('location:index.php');
        }
        if(!empty($_SESSION['cartProduct'])){
            header('location:index.php?controller=cart');
        }
    }

    public function delete(){
        $productId = $_GET['id'] ?? null;
        unset($_SESSION['cartProduct'][$productId]);
        if(empty($_SESSION['cartProduct'])){
            header('location:index.php');
        }
        if(!empty($_SESSION['cartProduct'])){
            header('location:index.php?controller=cart');
        }
    }
}