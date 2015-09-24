<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorites extends CI_Controller {

	public function index(){
		
	}

	public function add($user_id, $trick_id){
		$this->load->model('user_model');
		$this->user_model->add_favorite($user_id, $trick_id);
		$this->load->view('add_to_favorites');
	}

}