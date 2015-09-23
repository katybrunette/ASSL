<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->model('test_model', '', TRUE);
		$data['test_value']=$this->test_model->test_database();
		$this->load->view('test', $data);
	}
}