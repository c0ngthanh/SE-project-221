<?php
    class BaseModel extends Database{
        protected $connect;
        public function __construct(){
            $this->connect = $this->connect();
        }

        /* Lay ra tat ca du lieu trong bang */
        public function All($table){
            $sql = "SELECT * from ${table}";
            $query = $this->_query($sql);
            while($row=mysqli_fetch_assoc($query)){
                var_dump($row);
            }
        }

        /* Lay ra 1 bang ghi trong bang */
        public function findById($id){
            return __METHOD__;
        }

        /* Them moi mot du lieu vao bang */
        public function store(){

        }

        /*Cap nhat du lieu vao bang*/
        public function update($id){
            return __METHOD__;
        }

        /*Xoa du lieu trong bang*/
        public function delete($id){
            return __METHOD__;
        }

        private function _query($sql){
            return mysqli_query($this->connect,$sql);
        }
    }
?>