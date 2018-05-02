<?php
/**
 *
 */
class Search_model extends CI_model
{
  public function __construct(){
    $this->load->database();
  }
  public function get_carss($slug=FALSE)
  {
    if($slug === FALSE){
        $this->db->select('*') ;
        $this->db->from('carsphoto') ;
				$query = $this->db->get();
				return $query->result_array();
			}
			$query = $this->db->get_where('carsphoto', array('carID' => $slug));
			return $query->result_array();
		}
  public function get_calendar($carID)
  {
    $this->db->select('*') ;
    $this->db->from('calendar') ;
    $this->db->where('carID',$carID) ;
    return $this->db->get()->result_array() ;
  }
  public function get_location($carID)
{
  $this->db->select('city') ;
  $this->db->from('users') ;
  $this->db->join('cars','users.id = cars.userID','inner') ;
  $this->db->where('carID',$carID) ;
  $get_id = $this->db->get()->result_array() ;
  $this->db->select('city, title, cover_photo,carID') ;
  $this->db->from('users') ;
  $this->db->join('cars','users.id = cars.userID','inner') ;
  $this->db->where('users.city',$get_id[0]['city']) ;
  return $this->db->get()->result_array() ;
}
function get_details($carID){
  $this->db->select('cars.carID , cars.userID , cars.type_of_car , cars.title , cars.cover_photo , cars.year , cars.price , CONCAT(users.street, ", ", users.city, ", ",users.country) AS city, calendar.start_date,calendar.end_date');
  $this->db->from('cars');
  $this->db->join('users','cars.userID = users.id');
  $this->db->join('calendar','cars.carID = calendar.carID','left');
  $this->db->where('cars.carID',$carID);
  return $this->db->get()->result_array();
}
public function insert_new_booking($insert_data){
  $this->db->db_debug = false;
  $test=$this->db->insert('bookings',$insert_data);
  return $test;
}
}
