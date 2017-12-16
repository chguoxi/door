<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    protected $title = '罗马大道';
    protected $discription = '条条大路通罗马，这条最宽敞';
    protected $keywords = '';
    
    public function display($tpl,$data=array(),$ret=false){
        $data['title'] = $this->title;
        $data['discription'] = $this->discription;
        $data['keywords'] = $this->keywords;
        
        $this->load->view('common/header',$data);
        $this->load->view($tpl,$data,$ret);
        $this->load->view('common/header');
    }
    
    
}
