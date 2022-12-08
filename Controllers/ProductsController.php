<?php
class ProductsController extends BaseController {
    private $ProductsModel;
    public function __construct()
    {
        $this->loadModel('ProductsModel');
        $this->ProductsModel = new ProductsModel;
    }
    public function index(){
        // $pageTitle = 'testing';
        $products = $this->ProductsModel->getAll(ProductsModel::TABLE);
        return $this->view('frontend.products.index',[
            'products' => $products,
        ]);
    }

}
?>