<?php

class ModelAkunCustomer extends CI_Model {
    public function masukkanData($data){
        $this->db->insert('tb_akuncust', $data);
    }
}
