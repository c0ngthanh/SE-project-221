<?php
class CategoryController extends BaseController {
    private $CategoryModel;
    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->CategoryModel = new CategoryModel;
    }
    public function index(){
        $select = ['category_id','category_name'];
        $order = [
            'column' => 'category_id',
            'order' => 'asc'
        ];
        $limit =15;
        $category = $this->CategoryModel->getAll($select,$order,$limit);
        return $this->view('frontend.category.index',[
            'category' => $category, //
        ]);
    }
    
    public function show(){
        $id = $_GET['id'] ?? 'null';
        $category_id = $this->CategoryModel->findById($id);
        return $this->view('frontend.category.show',[
            'category_id' => $category_id, //
        ]);
    }

}
?>