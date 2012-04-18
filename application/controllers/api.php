<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
	function index() {
    echo 'This is API!';
	}
	
	function make() {
	  if($this->input->post('location')) {
	    $location = prep_url($this->input->post('location'));
	    $shorty_code = $this->walkbyit->add_shorty($location);
	    if(!empty($shorty_code)) {
	      if($this->input->post('pin')) {
	        $this->walkbyit->update_pin($shorty_code,$this->input->post('pin'));
	      }
	      $this->stats($shorty_code);
	    } else {
	      header('HTTP/1.0 400 Bad Request',TRUE,400);
        echo json_encode(array('error'=>'Could not make the shorty.'));
	    }
	  }
	}
  
  function stats($shorty_code='') {
    if($this->input->post('code')) {
      $shorty_code = $this->input->post('code');
    }
    
    if(!empty($shorty_code)) {
      $shorty = $this->walkbyit->get_shorty($shorty_code);
      $pin_info = $this->walkbyit->get_pin_info($shorty_code,TRUE);
      if(!empty($pin_info['visible'])) {
        $shorty['pin'] = $pin_info['pin'];
      }
      unset($shorty['id']);
      header('HTTP/1.0 200 OK',TRUE,200);
      echo json_encode($shorty);
    } else {
      header('HTTP/1.0 400 Bad Request',TRUE,400);
      echo json_encode(array('error'=>'Could not provide stats.'));
    }
  }  
	
}