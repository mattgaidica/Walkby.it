<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {
  function __construct() {
		parent::__construct();
	}

	function index() {
	  $data = array();
	  
    if($this->input->post('destination')) {
	    $location = prep_url($this->input->post('destination'));
	    if($this->input->post('custom')) {
	      $custom = $this->input->post('custom');
	    } else {
	      $custom = '';
	    }
	    $shorty_code = $this->walkbyit->add_shorty($location, $custom);
	    if(!empty($shorty_code)) {
	      $redirect = 'http://walkby.it/stats/'.$shorty_code;
	      redirect($redirect, TRUE, 301);
	    } else {
	      $data['message'] = 'We have really bad news, that link is taken.';
	    }
	  }
    
    $this->load->view('add_view', $data);
	}
}