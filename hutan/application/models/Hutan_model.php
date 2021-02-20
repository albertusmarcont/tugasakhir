<?php

/**
 *
 */
class Hutan_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function hutandetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('hutan_lindung');
    return $query->result();
  }
}

 ?>
