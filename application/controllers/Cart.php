<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
  public function __construct()
  {
    parent::__construct() ;
    $this->load->model('Search_model') ;
  }


  public function identity($slug = null){
    $_SESSION['price_session']=$_SESSION['price_session'];
    $_SESSION['chkin_session']=$_SESSION['chkin_session'];
    $_SESSION['chkout_session']=$_SESSION['chkout_session'];
    $data['cars'] = $this->Search_model->get_carss($slug);
    $car_id = $data['cars'][0]['carID'];
    $data['page']='Cart/cart2';
    $this->load->view('menu/content',$data);
  }
  public function confirmpayment($slug = null){
    $_SESSION['price_session']=$_SESSION['price_session'];
    $_SESSION['chkin_session']=$_SESSION['chkin_session'];
    $_SESSION['chkout_session']=$_SESSION['chkout_session'];
    $data['detail']= $this->Search_model->get_details($slug);
    $data['cars'] = $this->Search_model->get_carss($slug);
    $data['car_id'] = $data['cars'][0]['carID'];
    $data['add_city']=$data['detail'][0]['city'];
    $data['page']='Cart/cart3';
    $this->load->view('menu/content',$data);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $insert_data=array(
        'bookingID' => '',
        'userID'=>$this->input->post('myID_add'),
        'carID'=>$this->input->post('carID_add'),
        'start_date'=>$this->input->post('check_in'),
        'end_date'=>$this->input->post('check_out'),
        'total_price'=>$this->input->post('prices'),
        'location'=>$this->input->post('city_add')
        );
      $succes=$this->Search_model->insert_new_booking($insert_data);
      if($succes)
      {
        redirect(site_url().'/Cart/confirmBooking/'.$slug);
      }
    }
  }
  public function confirmBooking($slug = null){
    $data['cars'] = $this->Search_model->get_carss($slug);
    $car_id = $data['cars'][0]['carID'];
    $data['page']='Cart/cart4';
    $this->load->view('menu/content',$data);
  }
  public function Cart5s(){

    $data['page']='Cart/cart5';
    $this->load->view('menu/content',$data);
  }
}
