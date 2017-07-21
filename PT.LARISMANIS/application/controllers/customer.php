<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'customer/data_view';
		$this->load->view('template', $data);
	}

	public function tambah()
	{
		$data['main_view'] = 'customer/tambah_view';
		$this->load->view('template', $data);
	}

}

/* End of file customer.php */
/* Location: ./application/controllers/customer.php */