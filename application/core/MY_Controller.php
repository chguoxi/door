<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    public function display($tpl,$data=array(),$ret=false){
        $this->load->view('common/header');
        $this->load->view($tpl,$data,$ret);
        $this->load->view('common/header');
    }
    
    
}
