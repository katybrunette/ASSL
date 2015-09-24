<?php

class Tricks_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
		
		public function search($keyword){
			$this->db->like('title', $keyword);
			$query=$this->db->get('tricks');
			return $query->result();
		}

}