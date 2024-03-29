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
	
	function hosting(){
		$data['page_title'] = 'Web Hosting';
		$data['main_content'] = 'fe/hosting';
		$this->load->view('fe/includes/template',$data);
	}

	function webdev(){
		$data['page_title'] = 'Web Development';
		$data['main_content'] = 'fe/webdev';
		$this->load->view('fe/includes/template',$data);
	}
	
	function mobiletech(){
		$data['page_title'] = 'Mobile Technology';
		$data['main_content'] = 'fe/mobiletech';
		$this->load->view('fe/includes/template',$data);
	}

	function businesstech(){
		$data['page_title'] = 'Business Solutions';
		$data['main_content'] = 'fe/businesstech';
		$this->load->view('fe/includes/template',$data);
	}
	function onlineservices(){
		$data['page_title'] = 'Online Services';
		$data['main_content'] = 'fe/onlineservices';
		$this->load->view('fe/includes/template',$data);
	}
}
