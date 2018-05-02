<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

  public function search_engine(){
    $data['page']='Search/search_enginess';
    $this->load->view('menu/content',$data);
  }
  public function search_engines()
  {
    $data['location']= $this->input->post('l_name');
    $data['check_in']= $this->input->post('check_in');
    $data['check_out']= $this->input->post('check_out');
    $data['price_range']= $this->input->post('pri_range');
    $data['option'] = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
    $data['option_model'] = isset($_POST['taskOption_model']) ? $_POST['taskOption_model'] : false;
    $data['page']='Search/search_engine_main';
    $this->load->view('menu/content',$data);
  }
  /*public function car($slug = null){
    $data['cars'] = $this->search_model->get_carss($slug);
    $car_id = $data['cars']['carID'];
    $data['page'] = 'main/tests2';
    $this->load->view('menu/content', $data);
  }*/
}
