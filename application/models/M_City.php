<?php
Class M_City extends CI_Model
{
	protected $_table = 'city';
	// protected $order = array('cit_id' => 'desc');

	public function get_data_city()
	{
		$this->db->from($this->_table);
		$i = 0;
	}
	
	public function getList() {
		$this->db->select(['cit_id','cit_name']);
		$this->db->order_by('cit_id', 'DESC');
		return $this->db->get($this->_table)->result_array();
	}
	public function listDistricts($cit_id)
    {
        $this->db->select(['cit_name','cit_id']);
        $this->db->where('cit_parent',$cit_id);
        return $this->db->get('city2')->result_array();
    }
	public function GetDistricts($district_id)
    {
        $this->db->select(['cit_name','cit_id']);
        $this->db->where('cit_parent',$district_id);
        return $this->db->get('city2')->row_array();
    }
	public function GetWard($district_id)
    {
        $this->db->select(['ward_name','ward_id']);
        $this->db->where('district_id',$district_id);
        return $this->db->get('ward')->row_array();
    }
}
?>
