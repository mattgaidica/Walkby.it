<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stats extends CI_Controller {
  function __construct() {
		parent::__construct();
	}
	
	function index($shorty_code='') {
    if(!empty($shorty_code)) {
      $data['shorty'] = $this->walkbyit->get_shorty($shorty_code);
      if(!empty($data['shorty'])) {
        if($this->input->post('location') && $this->input->post('pin')) {
          if($this->input->post('reset')) {
            $reset = TRUE;
          } else {
            $reset = FALSE;
          }
          $result = $this->walkbyit->update_location($shorty_code, $this->input->post('pin'), $this->input->post('location'), $reset);
          
          if($result) {
            $data['shorty'] = $this->walkbyit->get_shorty($shorty_code);
          } else {
            $data['message'] = 'Could not change the location, invalid pin.';
          }
          
        }
        
        $pin_info = $this->walkbyit->get_pin_info($data['shorty']['code'],TRUE);
        if(!empty($pin_info['visible'])) {
          $data['message'] = 'Your pin is: <strong>'.$pin_info['pin'].'</strong>';
        }
        
        $this->load->view('stats_view',$data);
      } else {
        redirect('nodata');
      }
    } else {
      redirect('error');
    }
	}

}