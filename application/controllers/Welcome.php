<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($id)
	{
		$data['donnees'] = $this->data_model->get_data($id);
		$this->load->view('welcome_message', $data);
	}
}
