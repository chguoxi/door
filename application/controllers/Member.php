<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Member extends MY_Controller {
    protected $pageData = array(
        'index'=>array('title'=>'个人中心'),
        'join'=>array('title'=>'登陆/注册'),
        //'login'=>array('title'=>'登陆'),
    );
    
    public function index(){
        $this->display('member/index');
    }
    
    /**
     * 登陆注册渲染页面
     */
    public function join(){
        $this->display('member/join');
    }
    
    /**
     * 处理登陆请求
     */
    private function _doLogin(){
        
    }
    
    /**
     * 处理注册请求
     */
    private function _doRegister(){
        
    }
}
