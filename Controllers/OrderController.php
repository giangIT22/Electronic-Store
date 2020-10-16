<?php

class OrderController extends BaseController{
    protected $orderModel;

    public function __construct(){
        $this->loadModel('OrderModel');
        $this->orderModel = new OrderModel;

    }

    public function store(){
        if(!empty($_SESSION['cartProduct'])){
            $order = $this->orderModel->store($_POST);
            foreach($_SESSION['cartProduct'] as $product){
                $this->orderModel->storeOrderDetail([
                        'order_id'           => $order['id'],
                        'product_id'         => $product['id'],
                        'product_name'       => $product['name'],
                        'product_price'      => $product['price'],
                        'product_qty'        => $product['qty'],
                ]);
            }
        }

        unset($_SESSION['cartProduct']);

        header('location:index.php');
    }
}