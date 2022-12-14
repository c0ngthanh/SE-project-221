<?php
class HomeController extends BaseController {
    // private $ProductsModel;
    // public function __construct()
    // {
    //     $this->loadModel('ProductsModel');
    //     $this->ProductsModel = new ProductsModel;
    // }
    public function index(){
        return $this->view('frontend.home.index');
    }
    
    // public function show(){
    //     $products_id = $_GET['id'] ?? 'null';
    //     $product_id = $this->ProductsModel->findById($products_id);
    //     return $this->view('frontend.products.show',[
    //         'product_id' => $product_id, //
    //     ]);
    // }
    
    // public function store(){
    //     $data =[
    //         'name' => 'iphone 12',
    //         'price' => '26000000',
    //         'image' => null,
    //         'category_id' => 2
    //     ];
    //     $this->ProductsModel->store($data);
    // }
    // public function update(){
    //     if(isset($_GET['id'])){
    //         $id =$_GET['id'];
    //         $data =[
    //         'name' => 'iphone 12',
    //         'price' => '26000000',
    //         'image' => null,
    //         'category_id' => 2
    //     ];
    //     $this->ProductsModel->updateData($id,$data);
    //     }
    // }
}
?>