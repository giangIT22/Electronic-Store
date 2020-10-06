<?php

class CategoryController extends BaseController{
    protected $categoryModel;
    protected $validateErrors;
    protected $productModel;
    public function __construct(){
        parent::__construct();
        $this->loadModel('CategoryModel');
        $this->loadModel('ProductModel');
        $this->categoryModel = new CategoryModel;
        $this->productModel  = new ProductModel;
    }

    public function index(){
        $categories = $this->categoryModel->getAll();
        return $this->view('backend.categories.index',[
            'categories' => $categories
        ]);
    }

    public function create(){
        return $this->view('backend.categories.create');
    }
    
    public function save(){
        $data = [
            'name'           => $_REQUEST['name'],
            'description'    => $_REQUEST['description'],
            'user_id'        => $_SESSION['user']['id'],
            'is_home'        => $_REQUEST['is_home'] ?? 0,
        ];

       if(!$this->validate($_REQUEST)){
            return $this->view('backend.categories.create',[
                'errors'   => $this->validateError,
            ]);
       }


        if(isset($_GET['id']) && $_GET['id']){
            $this->categoryModel->updateData($_GET['id'],$data);
        }else{
            $this->categoryModel->createData($data);
        }
  

        header('location:index.php?module=backend&controller=category');

    }

    private function validate(array $input){
        $errors = [];

        //validate for name 
        if(empty($input['name'])){
            $errors['name'] = "vui lòng nhập tên danh mục ";
        }
        else if(strlen(trim($input['name'])) <2 ){
            $errors['name'] = "Tên danh mục không hợp lệ";
        }

        if(empty($input['description'])){
            $errors['description'] = "vui lòng nhập thông tin mô tả";
        }

        $this->validateError = $errors;

        return count($errors) ===  0;
    }

    public function delete(){
        $id = $_GET['id'] ?? null;
        if($id && is_numeric($id)){
            $this->productModel->deleteProductByIdCategory($id);
            $this->categoryModel->deleteData($id);
        }
        header('location:index.php?module=backend&controller=category');
    }

    public function edit(){
        $id = $_GET['id'] ?? null;

        $category = $this->categoryModel->findCategoryById(['*'], $id);

        return $this->view('backend.categories.create',[
            'category' => $category
        ]);
    }
}