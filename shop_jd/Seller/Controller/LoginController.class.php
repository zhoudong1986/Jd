<?php
namespace Seller\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$this->display();
    }

    public function login(){
    	// dump(I('post.'));
    	 dump(I('post.'));
    }
}