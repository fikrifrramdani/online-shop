<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Shophisteria';
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/navbar');
		$this->load->view('templates_user/slider');
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/dashboard');
		$this->load->view('templates_user/footer');
	}
}
