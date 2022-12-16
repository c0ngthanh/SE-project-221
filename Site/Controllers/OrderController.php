<?php
class OrderController extends BaseController {
        private $OrderModel;
        public function __construct()
        {
            $this->loadModel('OrderModel');
            $this->OrderModel = new OrderModel;
        }
        public function store(){
            $order = $this->OrderModel->store($_POST);
            if(!empty($_SESSION['cart']))
            {
                foreach($_SESSION['cart'] as $product)
                {
                    $this->OrderModel->storeOrderDetail([
                        'orders_id'=> $order['id'],
                        'product_id' => $product['id'],
                        'product_qt' => $product['qty'],
                        'price' => $product['price']*$product['qty']
                    ]);
                }
                unset($_SESSION['cart']);
                header('Location:index.php?controller=cart');
            }
            
        }
    }
?>