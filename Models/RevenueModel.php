<?php
    class RevenueModel extends BaseModel
    {
        const TABLE_UP = 'dichvu';
        const TABLE_UP_DETAIL = 'chitietdichvu';
        const TABLE_BOOK ='datdichvu';
      
        public function selectrevenuetoday($company)
        {
            $sql = "SELECT datdichvu.iddat,SUM(DISTINCT(datdichvu.tonggia)) AS revenuetoday, datdichvu.trangthai, datdichvu.ngaydat FROM datdichvu,dichvu WHERE  datdichvu.madv = dichvu.madv and tencongty=	'$company'  and ngaydat=CURRENT_DATE()  and trangthai='approve'";
            return $this->_query($sql); 
        }
        public function selectrevenueyear($company)
        {
            $sql = "SELECT  datdichvu.iddat, YEAR(CURRENT_DATE()) AS yearnum ,
            ROUND(sum(datdichvu.tonggia)*count(DISTINCT datdichvu.iddat)/count(*)) as revenueyear, datdichvu.trangthai, datdichvu.ngaydat FROM datdichvu,dichvu WHERE  datdichvu.madv = dichvu.madv and tencongty=	'$company'  and YEAR(ngaydat)=YEAR(CURRENT_DATE()) and trangthai='approve'";
            return $this->_query($sql); 
        }

        public function selectrevenuemonth($company)
        {
            $sql = "SELECT  datdichvu.iddat, MONTHNAME(CURRENT_DATE()) AS monthname ,
            ROUND(sum(datdichvu.tonggia)*count(DISTINCT datdichvu.iddat)/count(*)) as revenuemonth, datdichvu.trangthai, datdichvu.ngaydat FROM datdichvu,dichvu WHERE  datdichvu.madv = dichvu.madv and tencongty=	'$company'  and MONTH(ngaydat)=MONTH(CURRENT_DATE()) and trangthai='approve'";
            return $this->_query($sql); 
        }
        

        public function selectordertoday($company)
        {
            $sql = "SELECT round(COUNT( DISTINCT( datdichvu.iddat))) as booknumtoday,
            datdichvu.trangthai, datdichvu.ngaydat FROM datdichvu,dichvu WHERE  datdichvu.madv = dichvu.madv and tencongty=	'$company'  and date(ngaydat)=date(CURRENT_DATE()) and trangthai='approve';
                   ";
            return $this->_query($sql); 
        }

        

        
        public function selectordermonth($company)
        {
            $sql = "SELECT round(COUNT( DISTINCT( datdichvu.iddat))) as booknummonth,  MONTHNAME(CURRENT_DATE()) AS monthname ,
            datdichvu.trangthai, datdichvu.ngaydat FROM datdichvu,dichvu WHERE  datdichvu.madv = dichvu.madv and tencongty=	'$company'  and MONTH(ngaydat)=MONTH(CURRENT_DATE()) and trangthai='approve';
                   ";
            return $this->_query($sql); 
        }

    
        public function selectorderyear($company)
        {
            $sql = "SELECT round(COUNT( DISTINCT( datdichvu.iddat))) as booknumyear,  YEAR(CURRENT_DATE()) AS yearnum ,
            datdichvu.trangthai, datdichvu.ngaydat FROM datdichvu,dichvu WHERE  datdichvu.madv = dichvu.madv and tencongty=	'$company'  and YEAR(ngaydat)=YEAR(CURRENT_DATE()) and trangthai='approve';
                   ";
            return $this->_query($sql); 
        }

    }
?>