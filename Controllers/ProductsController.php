<?php
class ProductsController extends BaseController {
    public function index(){
        return $this->view('frontend.products.index');
    }
}
?>