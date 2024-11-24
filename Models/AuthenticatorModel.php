<?php
    class AuthenticatorModel extends BaseModel
    {
        const TABLE_SIGNUP = 'doitac';
        const TABLE_UP_INF = 'ttdoitac';
        
        public function sign_upData($username, $data)
        {
            
            $this->insert(self::TABLE_SIGNUP, $username,$data); 
        }
        public function sign_upDataContact($username, $data)
        {
            
            $this->insert_contact(self::TABLE_UP_INF, $username,$data); 
        }

        public function sign_inData($data)
        {
            $this->acc(self::TABLE_SIGNUP ,$data);
        }

        public function changeData($username, $data)
        {
            $this->change_pass(self::TABLE_SIGNUP, $username, $data);
        }
        public function changeInf($username, $email, $data)
        {
            $this->change_inf(self::TABLE_UP_INF, $username, $email, $data);
        }

        public function updateData($username , $data)
        {
            $this->update_Inf(self::TABLE_UP_INF, $username, $data); 
        }

        public function infData($sql)
        {   
            $this->getByQuery($sql); 
        }
        public function logoutData()
        {
            $this->logout();
        }
    }
?>