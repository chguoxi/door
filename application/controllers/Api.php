<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Api extends MY_Controller {
    
    public function captcha(){
        $id = $this->input->get('id');
        
        $this->load->helper('captcha');
        $vals = array(
            'img_path'  => './captcha/',
            'img_url'   => $this->config->item('base_url').'captcha/',
            //'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '150',
            'img_height'    => 30,
            'expiration'    => 7200,
            'word_length'   => 4,
            'font_size' => 16,
            'img_id'    => $id ? $id : 'register',
            'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            
            // White background and border, black text and red grid
            'colors'    => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );
        
        $cap = create_captcha($vals);
        
        $session_key = $this->session->session_id .$id ;
        $this->$session_key  = array(
            'word'=>$cap['word'],
            'expired' => (int)$cap['time'] + $this->config->item('captcha_expired_time')
        );
        //echo $cap['image'];
    }
}
