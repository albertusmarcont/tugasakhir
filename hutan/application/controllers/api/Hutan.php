<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Hutan extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('hutan_model');
  }
  public function hutandetail_get()
  {
    $where = '';
    if (null !== $this->get('id')) {
      $hutan_lindung = $this->get('id');
      $where ="id LIKE '" . $hutan_lindung ."'";
    }
    $data = $this->hutan_model->hutandetail($where);
    $this->response( ['hutanDetail'=> $data], 200);
  }
}

?>
