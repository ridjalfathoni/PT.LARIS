<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
 public function __construct()
 {
 	parent::__construct();
 	//Do your magic here
 }
	public function index()
	{
		$data['main_view'] = 'barang/data_view';
		$this->load->view('template', $data);
	}

	public function tambah()
	{
		$data['main_view'] = 'barang/tambah_view';
		$this->load->view('template', $data);
	}
	

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */