<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tricks extends CI_Controller {

	public function index()
	{
		
	}

	public function search(){
		$this->load->model('tricks_model');
		$data['results']=$this->tricks_model->search($this->input->post('keyword'));
		$this->load->view('search_results', $data);
	}
}