<?php

class Authentication extends CI_Model {

    private $tableName = 'users';

    public function signin()
    {
        $query = $this->db->get($this->tableName, 10);
        return $query->result();
    }

    public function signup($signupData)
    {
        $this->debugKey(false);
        $email = $signupData[0];
        $password = $signupData[1];
        $userData = array('email' => $email, 'password' => $this->bcrypt->hash_password($password));
        $query = $this->db->insert($this->tableName, $userData);
        if ($query == 1){
            return 'successful';
        }else{
          return 'failed';
        }
        $this->debugKey(true);
    }

    public function debugKey($switchOn)
    {
        $db_debug = $this->db->db_debug;
        if(!$switchOn){
            return $this->db->db_debug = FALSE;
        }
        return $this->db->db_debug = $db_debug;
    }
}