<?php
    class OrderModel extends BaseModel{
        const TABLE = 'orders';
        // public function getAll($select = ['*'],$orderBys =[],$limit =15){
        //    return $this->All(self::TABLE,$select,$orderBys,$limit);
        // }
        
        // public function findById($id){
        //     return $this->find(self::TABLE,$id,'id');
        // }
        public function store($input){
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $date = date('Y-m-d H:i:s');
            return $this->create(self::TABLE,[
                'lname' => $input['lname'],
                'fname' => $input['fname'],
                'order_phone' => $input['phone'],
                'mail' => $input['email'],
                'diachi' => $input['diachi'],
                'district'  => $input['district'],
                'ward'  =>$input['ward'],
                'payment' => 'cash',
                'status' => 'waiting',
                'time' =>   $date
            ]);
        }
        public function storeOrderDetail($input){
            $orderId= $this->create('orders_detail',[
                'orders_id'=> $input['orders_id'],
                'product_id' => $input['product_id'],
                'product_qt' => $input['product_qt'],
                'price' => $input['price']
            ]);
        }
    }
?>