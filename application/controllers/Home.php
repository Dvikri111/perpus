<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Masuk Pelanggan',
			'isi' => 'backend/log/v_login'
		);
		$this->load->view('backend/log/v_login', $data, FALSE);
	}
}

/* End of file Home.php */