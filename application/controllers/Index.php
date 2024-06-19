<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function home()
	{
		$this->load->model('Event_Model');
		
		$data['events'] = $this->Event_Model->data();
		
		$this->load->view('frontend/index', $data);
	}
	
	public function detail($id)
	{
		$this->load->model('Event_Model');
		
		$data['events'] = $this->Event_Model->dataedit($id);
		
		$this->load->view('frontend/detail_event', $data);
	}
	public function contactus()
	{
		
		$this->load->view('frontend/contact_us');
	}
	public function aboutus()
	{
		
		$this->load->view('frontend/about_us');
	}
	
}
