<?php
Class Data_model extends CI_Model
{
  public function __construct(){
    parent::__construct();
  }

  public function get_data($val){
      $this->db->from('pages');
      $this->db->where('id', $val);
      $query = $this->db->get();
      return $query->row_array();
  }

}

