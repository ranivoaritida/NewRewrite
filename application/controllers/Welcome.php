<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require("Base_Controller.php");
class Welcome extends Base_Controller {
	public function index() 
	{
		$this->load->view('essai');

	}
	public function eto(){
		$this->load->view('test');
	}
	public function eo(){
		$this->load->view('test');
	}
	public function post($php,$html,$css){
		echo $php .'<br>';
		echo $html .'<br>';
		echo $css .'<br>';
	}
	
	
}
