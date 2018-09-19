<?php
class Home extends CI_Controller{
	public function index(){
		$this->load->helper('url');
		$this->load->view('home');
	}

public function feature(){
		$this->load->helper('url');
		$this->load->view('feature');
	}
	public function price(){
		$this->load->helper('url');
		$this->load->view('price');
	}
	public function contact(){
		$this->load->helper('url');
		$this->load->view('contact');
	}
	public function about(){
		$this->load->helper('url');
		$this->load->view('about');
	}


}

?>