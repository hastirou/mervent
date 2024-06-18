<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('event_model');
		$this->load->library('form_validation');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

    public function index()
    {
        $data['content'] = 'admin/event/index';
		$data['current_user'] = $this->auth_model->current_user();
		$data['data'] = $this->event_model->data();
	
		$this->load->view('admin/layouts/app', $data);
	}

    public function create()
    {
        $data['content'] = 'admin/event/create';
        $data['current_user'] = $this->auth_model->current_user();

        $this->load->view('admin/layouts/app', $data);
    }

	public function save(){
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['content'] = 'admin/event/create';
			$data['current_user'] = $this->auth_model->current_user();

			$this->load->view('admin/layouts/app', $data);
		}else{
			$config['upload_path']          = './assets/event/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['encrypt_name'] 		= TRUE;
			$config['max_size']             = 3024;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('photo')){
				print_r($this->upload->display_errors());
			}else{
				$photo = $this->upload->data();

				$data['title'] = $this->input->post('title');
				$data['date'] = $this->input->post('date');
				$data['lastupdated'] = $this->input->post('date');
				$data['description'] = $this->input->post('description');
				$data['category'] = $this->input->post('category');
				$data['location'] = $this->input->post('location');
				$data['photo'] = $photo['file_name'];

				$this->event_model->save($data);

				redirect('admin/event');
			}
		}
	}

	public function edit($id){
		$data['content'] = 'admin/event/edit';
		$data['current_user'] = $this->auth_model->current_user();
		$data['event'] = $this->event_model->dataedit($id);

		$this->load->view('admin/layouts/app', $data);
	}

	public function update($id){
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['content'] = 'admin/event/edit';
			$data['current_user'] = $this->auth_model->current_user();

			$this->load->view('admin/layouts/app', $data);
		}else{
			$config['upload_path']          = './assets/event/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['encrypt_name'] 		= TRUE;
			$config['max_size']             = 3024;

			$this->load->library('upload', $config);

			$data['title'] = $this->input->post('title');
			$data['date'] = $this->input->post('date');
			$data['lastupdated'] = $this->input->post('date');
			$data['description'] = $this->input->post('description');
			$data['category'] = $this->input->post('category');
			$data['location'] = $this->input->post('location');

			if (!empty($_FILES['photo'])) {
				if (!$this->upload->do_upload('photo')){
					print_r($this->upload->display_errors());
				}else{
					if ($photo = $this->upload->data()){
						$this->removeImage($id);
						$data['photo'] = $photo['file_name'];
					}
				}
			}

			if ($this->event_model->update($id, $data)) {
				redirect('admin/event');
			}
		}
	}

	public function detail($id)
	{
		$data['content'] = 'admin/event/detail';
		$data['current_user'] = $this->auth_model->current_user();
		$data['event'] = $this->event_model->dataedit($id);

		$this->load->view('admin/layouts/app', $data);
	}

	public function remove($id)
	{
		$this->removeImage($id);
		$this->event_model->delete($id);

		redirect('admin/event');
	}

	private function removeImage($id)
	{
		$event = $this->event_model->dataedit($id);
		$filename = explode(".", $event->photo)[0];
		return array_map('unlink', glob(FCPATH."./assets/event/$filename.*"));
	}
	
}
