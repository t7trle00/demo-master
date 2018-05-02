<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserve extends CI_Controller {
  public function __construct()
  {
    parent::__construct() ;
    $this->load->model('Search_model') ;
  }

  public function Reserves($slug = null){
    $data['cars'] = $this->Search_model->get_carss($slug);
    $data['calendar'] = $this->Search_model->get_calendar($slug) ;
    $data['location'] = $this->Search_model->get_location($slug) ;
    $data['car_id'] = $data['cars'][0]['carID'];
    $data['page']='Reserve/reserve';
    $this->load->view('menu/content',$data);
  }
  public function car($slug = null)
  {

    $data['price']= $this->input->post('prices');
    $data['check_in']= $this->input->post('check_in');
    $data['check_out']= $this->input->post('check_out');
    $_SESSION['price_session']=$data['price'];
    $_SESSION['chkin_session']=$data['check_in'];
    $_SESSION['chkout_session']=$data['check_out'];
    $data['cars'] = $this->Search_model->get_carss($slug);
    $car_id = $data['cars'][0]['carID'];
    $data['page'] = 'Cart/cart';
    $this->load->view('menu/content', $data);
  }
}
