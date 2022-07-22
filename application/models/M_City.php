<?php
Class M_City extends CI_Model
{
	protected $_table = 'city';
	protected $_table1 = 'city2';
	protected $_table2 = 'ward';
	// protected $order = array('cit_id' => 'desc');

	public function get_data_city()
	{
		$this->db->from($this->_table);

		$i = 0;
	}
	
	public function getList() {
		$this->db->select(['cit_id','cit_name']);
		return $this->db->get($this->_table)->result_array();
	}
	public function getDistrict() {
		$this->db->select(['cit_id','cit_name']);
		return $this->db->get($this->_table1)->result_array();
	}
	public function getWard() {
		$this->db->select(['ward_id', 'ward_name']);
		return $this->db->get($this->_table2)->result_array();
	}
}
?>
