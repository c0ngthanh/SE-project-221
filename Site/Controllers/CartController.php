<?php
class CartController extends BaseController {
    private $CartModel;
    public function __construct()
    {
        $this->loadModel('CartModel');
        $this->CartModel = new CartModel;
    }
    public function index(){
        // $select = ['category_id','category_name'];
        // $order = [
        //     'column' => 'category_id',
        //     'order' => 'asc'
        // ];
        // $limit =15;
        //$category = $this->CategoryModel->getAll($select,$order,$limit);
        return $this->view('frontend.cart.index',[]);
    }
    
    public function show(){
        // return $this->view('frontend.category.show',[
        //     'category_id' => $category_id, //
        // ]);
    }

}
?>