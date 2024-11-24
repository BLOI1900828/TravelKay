<?php
    class OrderModel extends BaseModel
    {
        const TABLE_UP = 'dichvu';
        const TABLE_UP_DETAIL = 'chitietdichvu';
        const TABLE_BOOK ='datdichvu';
      
        public function select($company)
        {
            $sql = "SELECT  DISTINCT datdichvu.iddat,datdichvu.username,datdichvu.tonggia,datdichvu.trangthai, datdichvu.ngaydat FROM datdichvu,dichvu WHERE  datdichvu.madv=dichvu.madv and tencongty='$company' ";
            return $this->_query($sql); 
        }


        public function orderview($username)
        {
            $sql = "SELECT  dichvu.tendv, chitietdichvu.noikhoihanh,datdichvu.ngaydat, datdichvu.iddat, datdichvu.tonggia, chitietdichvu.thoigian, chitietdichvu.ngaybatdau,chitietdichvu.phuongtien FROM datdichvu,dichvu,chitietdichvu WHERE  datdichvu.madv = dichvu.madv and dichvu.madv=chitietdichvu.madv and datdichvu.username='$username'";
            return $this->_query($sql); 

            
        }

        public function add_approve($data,$idbook)
        {
            
            $this->up_approve(self::TABLE_BOOK, $data, $idbook); 
            

        }

        public function add_refuse($data,$idbook)
        {
            
            $this->up_refuse(self::TABLE_BOOK, $data, $idbook); 
            

        }

    }
?>