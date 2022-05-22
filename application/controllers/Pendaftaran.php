<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Pendaftaran_model');
	}

	public function index()
	{
		$data['pendaftaran'] = $this->Pendaftaran_model->retrieve();
		$this->load->view('Pendaftaran_view', $data);
	}

	public function form_tambah()
	{
		$this->load->view('Tambah_view');
	}

	public function submit()
	{
		$this->Pendaftaran_model->add($this->input->post('var'));
		$data['submitted'] = true;
		$this->load->view('Tambah_view', $data);
	}

	public function delete()
	{
		$this->Pendaftaran_model->delete($this->uri->segment(3));
		$this->index();
	}

	public function form_update()
	{
		$data['pendaftaran'] = $this->Pendaftaran_model->getPendaftaran($this->uri->segment(3));
		$this->load->view('Update_view', $data);
	}

	public function update()
	{
		$this->Pendaftaran_model->update(
			$this->input->post('old_nik'),
			$this->input->post('var')
		);
		$this->index();
	}
}
