<?php
class ProductsController extends BaseController {
    private $ProductsModel;
    public function __construct()
    {
        $this->loadModel('ProductsModel');
        $this->ProductsModel = new ProductsModel;
    }
    public function index(){
        $select = ['product_id','product_name'];
        $order = [
            'column' => 'product_id',
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
}
?>