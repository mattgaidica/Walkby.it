<?php
class Walkbyit extends CI_Model {
	
	function __construct()	{
		parent::__construct();
	}
	
	function add_shorty($location, $custom=FALSE) {
	  $data = array(
	    'location'=>$location,
	    'visits'=>0,
	    'created'=>time()
	  );
	  
	  if(!empty($custom)) {
	    $custom_id = shorty_decode($custom);
	    $q = $this->db->get_where('shortys', array('id'=>$custom_id));
	    foreach($q->result_array() as $row) {
	      return FALSE;
      }
      $data['code'] = $custom;
      $data['id'] = $custom_id;
      $data['custom'] = 1;
	  } else {
	    $this->db->select_max('id');
	    $q = $this->db->get_where('shortys', array('custom'=>0));
	    foreach($q->result_array() as $row) {
	      $data['id'] = $row['id'] + 1;
	      break;
      }
      $data['code'] = shorty_encode($data['id']);
      $data['custom'] = 0;
	  }
	  $data['link'] = 'http://walkby.it/'.$data['code'];
	  $this->load->library('Qrcode');
    $this->qrcode->link($data['link']);
    $data['qr_link'] = $this->qrcode->get_link();
    $this->db->insert('shortys',$data);
	  
	  $this->add_pin($data['code']);
	  
	  return $data['code'];
	}
	
	function add_pin($shorty_code, $override='') {
	  $shorty = $this->get_shorty($shorty_code);
	  if(!empty($shorty)) {
	    if(!empty($override)) {
	      $pin = $override;
	      $visible = 0;
	    } else {
	      $this->load->helper('string');
	      $pin = random_string('alnum',4);
  	    $visible = 1;
	    }

	    $data = array(
	      'shorty_code'=>$shorty_code,
	      'pin'=>$pin,
	      'visible'=>$visible
	    );
	    $this->db->insert('pins',$data);
	    return $pin;
	  } else {
	    return FALSE;
	  }
	}

	function get_pin_info($shorty_code, $remove_visibility=FALSE) {
	  $q = $this->db->get_where('pins',array('shorty_code'=>$shorty_code));
	  foreach($q->result_array() as $pin_info) {
	    if($remove_visibility) {
	      $this->db->update('pins',array('visible'=>0),array('shorty_code'=>$shorty_code));
	    }
	    return $pin_info;
    }
    return FALSE;
	}
	
	function get_shorty($shorty_code, $add_visit=FALSE) {
	  $q = $this->db->get_where('shortys',array('code'=>$shorty_code));
	  foreach($q->result_array() as $shorty) {
	    if($add_visit) {
	      $this->add_visit($shorty);
	    }
      return $shorty;
    }
    return FALSE;
	}
	
	function update_pin($shorty_code,$pin) {
	  $this->db->update('pins',array('pin'=>$pin),array('shorty_code'=>$shorty_code));
	  return TRUE;
	}
	
	function update_location($shorty_code, $pin, $location, $reset=FALSE) {
	  $pin_info = $this->get_pin_info($shorty_code);
	  if(!empty($pin_info) && $pin_info['pin'] == $pin) {
	    $data = array(
	     'location'=>prep_url($location)
	    );
	    if($reset) {
	      $data['visits'] = 0;
	    }
      
      $this->db->update('shortys', $data, array('code'=>$shorty_code));
      return TRUE;
	  } else {
	    return FALSE;
	  }
	}
	
	function add_visit($shorty) {
	  $this->db->set('visits','visits + 1',FALSE);
	  $this->db->where('id',$shorty['id']);
	  $this->db->update('shortys');
	  return TRUE;
	}
	
	function clean_house() {
	  //ALTER TABLE [tablename] AUTO_INCREMENT = [number]
	}
}
?>