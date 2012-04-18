<?php
class Init {
  function __construct() {
  }
  
  function disable_csrf() {
    if(stripos($_SERVER['REQUEST_URI'],'/api') !== FALSE) {
      $CFG =& load_class('Config', 'core');
      $CFG->set_item('csrf_protection', FALSE);
    }
  }

}