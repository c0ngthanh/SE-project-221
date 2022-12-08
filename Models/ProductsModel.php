<?php
    class ProductsModel extends BaseModel{
        const TABLE = 'products';
        public function getAll($table){
           return $this->All($table);
        }
        
        public function findById($id){
            return __METHOD__;
        }

        public function delete($id){
            return __METHOD__;
        }
    }
?>