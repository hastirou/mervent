<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

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
        $data['content'] = 'admin/event/index';
		$data['current_user'] = $this->auth_model->current_user();
	
		$this->load->view('admin/layouts/app', $data);
	}

    public function create()
    {
        $data['content'] = 'admin/event/create';
        $data['current_user'] = $this->auth_model->current_user();

        $this->load->view('admin/layouts/app', $data);
    }
	
}