<?php
/**
 *
 */
class Car_model extends CI_model
{

  function get_cars(){
    $this->db->select('cars.carID , cars.userID , cars.type_of_car , cars.title , cars.cover_photo , cars.year , cars.price , CONCAT(users.street, ", ", users.city, ", ",users.country) AS city, calendar.start_date,calendar.end_date');
    $this->db->from('cars');
    $this->db->join('users','cars.userID = users.id');
    $this->db->join('calendar','cars.carID = calendar.carID','left');
    return $this->db->get()->result_array();
  }
  function get_car($carID){
    $this->db->select('*');
    $this->db->from('cars');
    $this->db->join('users','cars.userID = users.id');
    $this->db->where('cars.carID',$carID);
    return $this->db->get()->result_array();
  }
  function get_cas(){
    $this->db->select('carID');
    $this->db->from('bookings');
    return $this->db->get()->result_array();
  }
}

?>
