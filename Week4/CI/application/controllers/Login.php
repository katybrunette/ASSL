<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');

		if($user_id=$this->user_model->login($this->input->post('email'), $this->input->post('password'))){
			redirect('/welcome/favorites/'.$user_id, 'refresh');
		}

		
	}
}