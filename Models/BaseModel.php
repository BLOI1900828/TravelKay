<?php
    class BaseModel extends Database
    {
        protected $connect;
      
        public function __construct()
        {
            $this->connect = $this->connect();   
        }

        // insert table
        public function insert($table, $username,$data = [])
        {   
            // $link_sign_in = $_SESSION['link_sign_in'];
            // $link_up_inf= $_SESSION['link_up_inf'];
            $columns = implode(',', array_keys($data));
            $newValues = array_map(function($value){
                return "'" . $value . "'";
            }, array_values($data));

            $newValues = implode(',', $newValues);
   
            $sql = "INSERT INTO ${table}(${columns}) VALUES(${newValues})";
            // echo $sql;
            $this->_query($sql);

           
            // header("Location:  $link_up_inf");
        }
        public function insert_service($table, $data = [])
        {   
  
            $columns = implode(',', array_keys($data));
            $newValues = array_map(function($value){
                return "'" . $value . "'";
            }, array_values($data));

            $newValues = implode(',', $newValues);
   
            $sql = "INSERT INTO ${table}(${columns}) VALUES(${newValues})";
            // echo $sql;
            $this->_query($sql);
        }

        public function insert_deta($table, $data = [])
        {   
  
            $columns = implode(',', array_keys($data));
            $newValues = array_map(function($value){
                return "'" . $value . "'";
            }, array_values($data));

            $newValues = implode(',', $newValues);
   
            $sql = "INSERT INTO ${table}(${columns}) VALUES(${newValues})";
            // echo $sql;
            $this->_query($sql);
        }


      


        public function edit_service($table, $data, $svcode)
        {
            $dataSets = [];
            
            foreach ($data as $key => $val) {
                array_push($dataSets, "${key} = '". $val . "'");
            }
            $dataSetString = implode(',', $dataSets);
           
            $sql = "UPDATE ${table} SET ${dataSetString} WHERE madv = '${svcode}'";
            // die($sql);
            
            $this->_query($sql);
        }


        public function edit_detail($table, $data, $svcode)
        {
            $dataSets = [];
            
            foreach ($data as $key => $val) {
                array_push($dataSets, "${key} = '". $val . "'");
            }
            $dataSetString = implode(',', $dataSets);
           
            $sql = "UPDATE ${table} SET ${dataSetString} WHERE madv = '${svcode}'";
            // echo $sql;
    
            $this->_query($sql);
        }


        public function up_approve($table, $data, $idbook)
        {
            $dataSets = [];
            
            foreach ($data as $key => $val) {
                array_push($dataSets, "${key} = '". $val . "'");
            }
            $dataSetString = implode(',', $dataSets);
           
            $sql = "UPDATE ${table} SET ${dataSetString} WHERE iddat = '${idbook}'";
            // echo $sql;
    
            $this->_query($sql);
        }


        public function up_refuse($table, $data, $idbook)
        {
            $dataSets = [];
            
            foreach ($data as $key => $val) {
                array_push($dataSets, "${key} = '". $val . "'");
            }
            $dataSetString = implode(',', $dataSets);
           
            $sql = "UPDATE ${table} SET ${dataSetString} WHERE iddat = '${idbook}'";
            // echo $sql;
    
            $this->_query($sql);
        }






        public function insert_contact($table, $username,$data = [])
        {   
            // $link_sign_in = $_SESSION['link_sign_in'];
            // $link_up_inf= $_SESSION['link_up_inf'];
            $columns = implode(',', array_keys($data));
            $newValues = array_map(function($value){
                return "'" . $value . "'";
            }, array_values($data));

            $newValues = implode(',', $newValues);
   
            $sql = "INSERT INTO ${table}(${columns}) VALUES(${newValues})";
            // echo $sql;
            $this->_query($sql);

            // header("Location:  $link_up_inf");
        }
        // insert update table
        public function insertInf($table, $data = [])
        {   
            // $link_sign_in = $_SESSION['link_sign_in'];
            $columns = implode(',', array_keys($data));
            $newValues = array_map(function($value){
                return "'" . $value . "'";
            }, array_values($data));

            $newValues = implode(',', $newValues);
   
            $sql = "INSERT INTO ${table}(${columns}) VALUES(${newValues})";
            // echo $sql;
            $this->_query($sql);
            // echo "<script type='text/javascript'>document.location='index.php?controller=home';</script>";
            // header("Location:  $link_sign_in");
        }
        // update inf
        public function update_Inf($table, $username, $data)
        {
            $dataSets = [];
            
            foreach ($data as $key => $val) {
                array_push($dataSets, "${key} = '". $val . "'");
            }
            $dataSetString = implode(',', $dataSets);
           
            $sql = "UPDATE ${table} SET ${dataSetString} WHERE username = '${username}'";
            // echo $sql;
    
            $this->_query($sql);
        }

        // select account
        public function acc($table, $data = [])
        {
            // $link_home = $_SESSION['link_home'];
            $dataSets = [];
            
            foreach ($data as $key => $val) {
                array_push($dataSets, "${key} = '". $val . "'");
            }
            $dataSetString = implode(' AND ', $dataSets);

            $sql = "SELECT * FROM ${table} WHERE ${dataSetString}";
            // echo $sql;
            $query = $this->_query($sql);
            if(mysqli_num_rows($query) > 0){
                // header("Location:  $link_home");
                $qr_data = mysqli_fetch_array($query);
                $_SESSION['username'] = $qr_data[0];
                $username = $_SESSION['username'];
                $_SESSION['email'] = $qr_data[1];
                $sqls = "SELECT * FROM ttdoitac WHERE username= '$username'";
                $querys = $this->_query($sqls);
                $qr_data = mysqli_fetch_assoc($querys);
                $_SESSION['company'] = $qr_data['tencongty'];

            }
            else{   
                echo 'Dang nhap that bai';
                die;
            }
        }

        // change pass
        public function change_pass($table, $username, $data)
        {
            $dataSets = [];
            
            foreach ($data as $key => $val) {
                array_push($dataSets, "${key} = '". $val . "'");
            }
            $dataSetString = implode(',', $dataSets);
           
            $sql = "UPDATE ${table} SET ${dataSetString} WHERE username = '${username}'";
    
            $this->_query($sql);
            echo "<script type='text/javascript'>document.location='index.php?controller=authenticator&action=change_pass&user=$username&stt=success';</script>";
        }

        // change inf
        public function change_inf($table, $username, $email, $data)
        {
            $dataSets = [];
            
            foreach ($data as $key => $val) {
                array_push($dataSets, "${key} = '". $val . "'");
            }
            $dataSetString = implode(',', $dataSets);
           
            $sql = "UPDATE ${table} SET ${dataSetString} WHERE username = '${username}' AND email = '${email}'";
            // echo $sql;
    
            $this->_query($sql);
            // echo "<script type='text/javascript'>document.location='index.php?controller=authenticator&action=change_pass&user=$username&stt=success';</script>";
        }
        

        // logout
        public function logout()
        {   
            $link_home = $_SESSION['link_home'];
            session_unset();
            session_destroy();
            header("Location:  $link_home");
        }

        public function getByQuery($sql){
            $query = $this->_query($sql);
            $dataList = [];

            while($row= mysqli_fetch_assoc($query)){
                array_push($dataList, $row);
            }
            return $dataList;
        }

    

        //--------------------------
        public function _query($sql)
        {
            return mysqli_query($this->connect, $sql);
        }
    }
?>