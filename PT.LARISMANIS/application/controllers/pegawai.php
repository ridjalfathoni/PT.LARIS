<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

public function __construct()
{
	parent::__construct();
	//Do your magic here
}
	public function index()
	{
		$data['main_view'] = 'pegawai/data_view';
		$this->load->view('template', $data);
	}

	public function tambah()
	{
		$data['main_view'] = 'pegawai/tambah_view';
		$this->load->view('template', $data);
	}

}

/* End of file pegawai.php */
/* Location: ./application/controllers/pegawai.php */