<?php

class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
		
		public function login($email, $password){
			$this->db->select('id');
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			$query=$this->db->get('users');
			

		if($query->result()){
			return $query->result()[0]->id;
		}else{
			return FALSE;
		}

		}

		public function register($fname, $lname, $email, $password){
			$data = array(
				'fname' => $fname,
	        	'lname' => $lname,
	        	'email' => $email,
	        	'password' => $password
			);

		$this->db->insert('users', $data);

		}
		
		public function get_favorites($user_id){
			$this->db->select('*');
			$this->db->from('user_favorites');
			$this->db->join('tricks','user_favorites.trick_id = tricks.id');
			$this->db->where('user_favorites.user_id', $user_id);
			$query=$this->db->get();
			return $query->result();
		}


}
