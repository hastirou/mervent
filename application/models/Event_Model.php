<?php

class Event_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private $tabel = 'event';

	public function data($limit = null){
		if (!is_null($limit)){
			$this->db->limit($limit);
		}

		$query = $this->db->get($this->tabel);
		return $query->result();
	}

	public function save($data){
		$this->db->insert($this->tabel, $data);
	}

	public function delete($id){
		$this->db->delete($this->tabel, ['id' => $id]);
	}

	public function edit($data,$id){
		$this->db->update($this->tabel, $data, ['id' => $id]);
	}

	public function dataedit($id){
		return $this->db->get_where($this->tabel, ["id" => $id])->row();
	}

	public function update($id, $data){

		return $this->db->update($this->tabel, $data, array('id' => $id));
	}
}
