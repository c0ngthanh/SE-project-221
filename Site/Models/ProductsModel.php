<?php
    class ProductsModel extends BaseModel{
        const TABLE = 'products';
        public function getAll($select = ['*'],$orderBys =[],$limit =10){
           return $this->All(self::TABLE,$select,$orderBys,$limit);
        }
        public function getAllbyCategoryId($select = ['*'],$orderBys =[],$limit =10,$categoryId){
            return $this->getAllbyCategory(self::TABLE,$select,$orderBys,$limit,$categoryId);
         }
        
        public function findById($id){
            return $this->find(self::TABLE,$id,'id');
        }

        public function store($data){
            $this->create(self::TABLE,$data);
        }

        public function updateData($id,$data){
            $this->update(self::TABLE,$id,$data,'id');
        }
    }
?>