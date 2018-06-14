<?php

class Users extends CI_Model {

    private $tableName = 'users';

    public function getUsers()
    {
        $query = $this->db->get($this->tableName, 10);
        return $query->result();
    }

    public function updateUser($updateData)
    {
        $this->db->update($this->tableName, $updateData);
    }
}