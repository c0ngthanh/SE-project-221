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
        /* Lay ra du lieu theo category_id */
        public function getAllbyCategory($table, $select = ['*'], $orderBys =[], $limit = 10,$categoryId){
            $columns = implode(',',$select);
            $orderByString = implode(' ',$orderBys);
            // die ($orderByString);
            if($orderByString){
                $sql = "select ${columns} from ${table} where product_category = ${categoryId} order by ${orderByString} limit ${limit}";
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
        public function find($table,$id,$column_id){
            $sql = "select * from ${table} where ${table}.${column_id} = ${id} limit 1";
            $query = $this->_query($sql);
            return mysqli_fetch_assoc($query);
        }

        /* Them moi mot du lieu vao bang */
        public function create($table,$data = []){
            $keys = implode(',',array_keys($data));
            $values = array_map(function($value){
                return "'".$value."'";
            },array_values($data));
            $values = implode(',',$values);

            $sql = "insert into ${table}(${keys}) values(${values})";
            $this->_query($sql);
            return $this->__query("SELECT LAST_INSERT_ID() as id");
        }

        /*Cap nhat du lieu vao bang*/
        public function update($table,$id,$data,$addr_id){
            $dataSets = [];
            foreach($data as $key => $value){
                array_push($dataSets,"${key} = '" .$value. "'");
            }
            $dataString = implode(',',$dataSets);
            $sql = "update ${table} set ${dataString} where ${addr_id} = $id";
            die($sql);
        }

        /*Xoa du lieu trong bang*/
        public function delete($id){
            return __METHOD__;
        }

        private function _query($sql){
            return mysqli_query($this->connect,$sql);
        }
        private function __query($sql){
            $result= mysqli_query($this->connect,$sql);
            return mysqli_fetch_array($result);
        }
    }
?>