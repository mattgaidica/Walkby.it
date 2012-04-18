<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shorty extends CI_Controller {
  function __construct() {
		parent::__construct();
	}
  
	function index($shorty_code='') {
	  if(!empty($shorty_code)) {
	    $shorty = $this->walkbyit->get_shorty($shorty_code,TRUE);
      if(!empty($shorty)) {
        redirect($shorty['location']);
      } else {
        redirect('error');
      }
	  } else {
	    redirect('/');
	  }
	}

}