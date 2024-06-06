<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model', 'auth');
		$this->load->library('form_validation', null, 'validation');
	}
	
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$rules = $this->auth->rules();
		$this->validation->set_rules($rules);

		if ($this->validation->run() == FALSE) {
			return $this->load->view('frontend/login_form');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($this->auth->login($username, $password)) {
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

		$this->load->view('frontend/login_form');
	}

	public function logout()
	{
		$this->auth->logout();
		redirect(site_url());
	}
}
