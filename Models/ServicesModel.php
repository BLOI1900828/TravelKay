<?php
    class ServicesModel extends BaseModel
    {
        const TABLE_UP = 'dichvu';
        const TABLE_UP_DETAIL = 'chitietdichvu';
      
        public function select($company)
        {
            $sql = "SELECT * FROM dichvu WHERE tencongty = '$company'";
            return $this->_query($sql); 
        }

        public function selectviewedit($svcode)
        {
            $sql = "SELECT * FROM dichvu WHERE madv = '$svcode'";
            
            
            return $this->_query($sql); 
        }
        public function selectdetailedit($svcode)
        {
            $sql = "SELECT * FROM chitietdichvu WHERE madv = '$svcode'";
            
            
            return $this->_query($sql); 
        }

        public function selectview($svcode)
        {
            $sql = "SELECT * FROM dichvu WHERE madv = '$svcode'";
            return $this->_query($sql); 

            
        }

        public function selectdetail($svcode)
        {
            $sql = "SELECT * FROM chitietdichvu WHERE madv = '$svcode'";
            return $this->_query($sql); 

            
        }

        public function insert_sv($data)
        {
            
            $this->insert_service(self::TABLE_UP, $data); 
        }
        public function insert_detail($data)
        {
            
            $this->insert_deta(self::TABLE_UP_DETAIL, $data); 
        }

        public function edit_sv($data,$svcode)
        {
            
            $this->edit_service(self::TABLE_UP, $data, $svcode); 
        }

        public function edit_deta($data,$svcode)
        {
            
            $this->edit_detail(self::TABLE_UP_DETAIL, $data, $svcode); 
        }

    }
?>