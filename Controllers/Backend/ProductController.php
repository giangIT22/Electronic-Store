<?php

class ProductController extends BaseController{
    use UploadFile;

    protected $productModel;
    protected $validateError;
    protected $categoryModel;
    protected $productImageModel;

    public function __construct(){
        parent::__construct();
        $this->loadModel('ProductModel');
        $this->loadModel('CategoryModel');
        $this->loadModel('ProductImageModel');
        $this->categoryModel = new CategoryModel;
        $this->productModel = new ProductModel;
        $this->productImageModel = new ProductImageModel;

    }

    public function index(){
        $products = $this->productModel->getProducts();

        return $this->view('backend.products.index',[
            'products' => $products
        ]);
    }
    
    private function getImage(){//lấy ảnh
        $image = null;

        if(!empty($_FILES['image']['name'])){
            $this->setFileName($_FILES['image']['name']);
            $this->setFolderUpload('./public/uploads');
            $this->setFileTemp($_FILES['image']['tmp_name']);
            $image = $this->upload();
        }

        return $image;
    }

    public function create(){
        $categories = $this->categoryModel->getAll();
        return $this->view('backend.products.create',[
            'categories' => $categories
        ]);
    }

    public function save(){
        $categories = $this->categoryModel->getAll();
        $data = [
            'name'           => $_REQUEST['name'],
            'sku'            => $_REQUEST['sku'],
            'price'          => $_REQUEST['price'],
            'user_id'        => $_SESSION['user']['id'],
            'description'    => $_REQUEST['description'],
            'category_id'    => $_REQUEST['category_id'] 
        ];

       if(!$this->validate($_REQUEST)){
            return $this->view('backend.products.create',[
                'errors'   => $this->validateError,
                'categories' => $categories
            ]);
       }

        if(!empty($_REQUEST['price_Sale'])){
            $data['price_sale'] = $_REQUEST['price_sale'];
        }

        if($this->getImage()){//kiểm tra lấy ảnh
            $data['image'] = $this->getImage();
        }

        if(isset($_GET['id']) && $_GET['id']){
            $this->productModel->updateData($_GET['id'], $data);
        }else{
            $this->productModel->createData($data);
        }

        header('location:index.php?module=backend&controller=product');
    }

    public function edit(){
        $id = $_GET['id'] ?? null;
        $product = $this->productModel->findProductById(['*'], $id);
        $categories = $this->categoryModel->getAll();
        return $this->view('backend.products.create',[
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function delete(){
        $id = $_GET['id'] ?? null;

        if($id && is_numeric($id)){
            $this->productModel->deleteData($id);
            header('location:index.php?module=backend&controller=product');
        }
    }
    public function validate($input){
        $errors = [];

        //validate for name 
        if(empty($input['name'])){
            $errors['name'] = "vui lòng nhập tên sản phẩm ";
        }
        else if(strlen(trim($input['name'])) <2 ){
            $errors['name'] = "Tên sản phẩm không hợp lệ";
        }

        if(empty($input['sku'])){
            $errors['sku'] = "vui lòng nhập sku";
        }

        if(empty($input['price'])){
            $errors['price'] = "vui lòng nhập giá tiền";
        }else if(!is_numeric($input['price']) && !empty($input['price'])){
            $errors['price'] = "Dữ liệu nhập vào phải là số";
        }

        if(!is_numeric($input['price_sale']) && !empty($input['price_sale'])){
            $errors['price_sale'] = "Dữ liệu nhập vào phải là số";
        }

        if(empty($input['description'])){
            $errors['description'] = "vui lòng nhập thông tin mô tả";
        }

        //check danh mục
        if(empty($input['category_id'])){
            $errors['category_id'] = "vui lòng chọn danh mục";
        }
        //check image format
        if(!empty($_FILES['image']['type'])){
            $type =explode('/',  $_FILES['image']['type']);
            if($type[0] != 'image'){
                $errors['image'] = "Ảnh không đúng định dạng";
            }
        }
        $this->validateError = $errors; 

        return count($errors) ===  0;
    }
}