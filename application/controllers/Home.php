<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function home(){
		$data['page_title'] = 'Home';
		$data['main_content'] = 'fe/home';
		$this->load->view('fe/includes/template',$data);
	}

	function about(){
		$data['page_title'] = 'About Us';
		$data['main_content'] = 'fe/about';
		$this->load->view('fe/includes/template',$data);
	}
	
	function contact(){
		$data['page_title'] = 'Contact Us';
		$data['main_content'] = 'fe/contact';
		$this->load->view('fe/includes/template',$data);
	}
}
