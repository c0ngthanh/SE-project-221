<?php
    class BaseModel extends Database{
        protected $connect;
        public function __construct(){
            $this->connect = $this->connect();
        }

        /* Lay ra tat ca du lieu trong bang */
        public function All($table, $select = ['*'], $orderBys =[], $limit = 15){
            $columns = implode(',',$select);
            $orderByString = implode(' ',$orderBys);
            // die ($orderByString);
            if($orderByString){
                $sql = "select ${columns} from ${table} order by ${orderByString} limit ${limit}";
            }
            else{
                $sql = "select ${columns} from ${table} limit ${limit}";
            }
            $query = $this->_query($sql);
            $data = [];
            while($row=mysqli_fetch_assoc($query)){
                array_push($data,$row);
            }
            
            return $data;
        }

        /* Lay ra 1 bang ghi trong bang */
        public function find($table,$id){
            $sql = "select * from ${table} where ${table}.product_id = ${id}";
            $query = $this->_query($sql);            
            return mysqli_fetch_assoc($query);
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