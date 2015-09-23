<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');
		$this->user_model->register($this->input->post('fname'), $this->input->post('lname'), $this->input->post('email'), $this->input->post('password'));
		$this->load->view('register');
	}
}