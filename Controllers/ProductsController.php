<?php
class ProductsController extends BaseController{
    public function index(){
        return $this->view('frontend.products.index');
        // echo __METHOD__;
    }
}
?>
<h1>Products</h1>