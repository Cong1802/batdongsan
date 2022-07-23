<?php 
	/**
	* 
	*/
	class M_otp extends CI_Model
	{
		protected $_table  = 'otp';
		// protected $_table2 = 'otp_forgot';
		
		public function checkEmail($email) {
			$this->db->select('email');
			$this->db->where('email', $email);
			return $this->db->get($this->_table)->num_rows();
		}
		public function insert($data) {
			$this->db->insert($this->_table,$data);
			return $this->db->insert_id();
		}
		public function update($phone,$data) {
			$this->db->where('phone', $phone);
			return $this->db->update($this->_table, $data);
		}
		public function checkOTP($phone) {
			$this->db->select('code');
			$this->db->where('phone', $phone);
			return $this->db->get($this->_table)->row_array();
		}
		public function checkPhoneOTP($phone) {
			$this->db->select('id');
			$this->db->where('phone', $phone);
			return $this->db->get($this->_table)->num_rows();
		}
		public function insertOTP($data) {
			$this->db->insert($this->_table,$data);
			return $this->db->insert_id();
		}
	}
?>
