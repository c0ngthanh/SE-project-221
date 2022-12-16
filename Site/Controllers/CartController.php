<?php
class CartController extends BaseController {
    private $CartModel;
    public function __construct()
    {
        $this->loadModel('CartModel');
        $this->loadModel('ProductsModel');
        $this->CartModel = new CartModel;
    }
    public function index(){
        return $this->view('frontend.cart.index',[]);
    }
    
    public function show(){
    }

    public function store(){
        $productID = $_GET['id'] ?? 'null';
        // $product = $this->Products
        // echo $productID;
    }
}
?>