<?php
class ProductsController extends BaseController {
    private $ProductsModel;
    public function __construct()
    {
        $this->loadModel('ProductsModel');
        $this->ProductsModel = new ProductsModel;
    }
    public function index(){
        $select = ['id','name'];
        $order = [
            'column' => 'id',
            'order' => 'desc'
        ];
        $limit =15;
        $products = $this->ProductsModel->getAll($select,$order,$limit);
        return $this->view('frontend.products.index',[
            'products' => $products, //
        ]);
    }
    
    public function show(){
        $products_id = $_GET['id'] ?? 'null';
        $product_id = $this->ProductsModel->findById($products_id);
        return $this->view('frontend.products.show',[
            'product_id' => $product_id, //
        ]);
    }
    
    public function store(){
        $data =[
            'name' => 'iphone 12',
            'price' => '26000000',
            'image' => null,
            'category_id' => 2
        ];
        $this->ProductsModel->store($data);
    }
    public function update(){
        if(isset($_GET['id'])){
            $id =$_GET['id'];
            $data =[
            'name' => 'iphone 12',
            'price' => '26000000',
            'image' => null,
            'category_id' => 2
        ];
        $this->ProductsModel->updateData($id,$data);
        }
    }
}
?>