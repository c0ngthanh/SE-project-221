<?php
class CartController extends BaseController {
    private $CartModel;
    private $ProductsModel;
    public function __construct()
    {
        $this->loadModel('CartModel');
        $this->loadModel('ProductsModel');
        $this->CartModel = new CartModel;
        $this->ProductsModel = new ProductsModel;
    }
    public function index(){
        if(isset($_SESSION['cart'])){
            $products = $_SESSION['cart'];
            return $this->view('frontend.cart.index',[
                'products' => $products
            ]);
        }
        else return $this->view('frontend.cart.index',[
        ]);
    }
    
    public function show(){
    }

    public function store(){
        $productId = $_GET['id'] ?? 'null';
        $product = $this->ProductsModel->findById($productId);
        if(!$product == NULL)
        {
            if(empty($_SESSION['cart']) || !array_key_exists($productId,$_SESSION['cart']))
            {
                $product['qty'] =1;
                $_SESSION['cart'][$productId]=$product;
                echo "sản phẩm chưa có trong giỏ hàng";
                ;
            }
            else
            {
                $_SESSION['cart'][$productId]['qty'] +=1;
                echo "sản phẩm đã có trong giỏ hàng";
            }
        }  
        header('Location:?controller=cart&action=index');
    }
    public function delete(){
        $productId = $_GET['id'] ?? 'null';
        if(empty($_SESSION['cart']) || !array_key_exists($productId,$_SESSION['cart']))
        {
            echo "sản phẩm chưa có trong giỏ hàng";
        }
        else
        {
            unset($_SESSION['cart'][$productId]);
        }
        if(!empty($products))
        {
            $$tt= 0;
            foreach($products as $products)
            {
                $tt+= $products['price']*$products['qty'];
            }
            $vat = $tt/10;
        }
        header('Location:?controller=cart&action=index');
    }
}
?>