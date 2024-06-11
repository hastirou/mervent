<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['content'] = 'backend/dashboard';
		$data['current_user'] = $this->auth_model->current_user();
	
		$this->load->view('backend/layouts/app', $data);
	}	
}
