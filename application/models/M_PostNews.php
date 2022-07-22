<?php
/**
* 
*/
class M_PostNews extends CI_Model
{
    protected $_table 	= 'city';
    protected $_table2  = 'city2';
    protected $_table3	= 'ward';
    protected $_table4	= 'street';
    protected $_table5  = 'post_news';
    protected $_table6  = 'new_images';
    protected $order    = array('cit_id' => 'desc');
	
    public function listProvince()
    {
        $this->db->select(['cit_id','cit_name']);
        return $this->db->get($this->_table)->result_array();
    }
    public function listDistricts($cit_id)
    {
        $this->db->select(['cit_name','cit_id']);
        $this->db->where('cit_parent',$cit_id);
        return $this->db->get($this->_table2)->result_array();
    }
    public function listWards($cit_id)
    {
        $this->db->select(['ward_id','ward_name']);
        $this->db->where('district_id',$cit_id);
        return $this->db->get($this->_table3)->result_array();
    }
    public function getStreetBy($cit_id)
    {
        $this->db->select(['street_id','street_name']);
        $this->db->where('district_id',$cit_id);
        return $this->db->get($this->_table4)->result_array();
    }
    public function insertNewsAfterLogin($data)
    {
        $this->db->insert($this->_table5, $data);
    	return $this->db->insert_id();
    }
    public function insertProjectNews($data)
    {
        $this->db->insert($this->_table5, $data);
    	return $this->db->insert_id();
    }
    public function insertNewsRoom($data)
    {
        $this->db->insert($this->_table5, $data);
    	return $this->db->insert_id();
    }
    public function insertNewsHome($data)
    {
        $this->db->insert($this->_table5, $data);
    	return $this->db->insert_id();
    }
    public function insertImgNews($data_img)
    {
        $this->db->insert($this->_table6, $data_img);
    	return $this->db->insert_id();
    }
}
?>