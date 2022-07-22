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
    public function insertImgNews($data_img)
    {
        $this->db->insert($this->_table6, $data_img);
    	return $this->db->insert_id();
    }
	public function getNewsProjectIndex() {
		$this->db->select(['id', 'project_name', 'total_investment', 'cdt_addr_com']);
		$this->db->where('type', 1);
		return $this->db->get($this->_table5)->result_array();
	}
	public function detailProject($id) {
		$this->db->select('*');
		$this->db->join('users', 'post_news.customer = users.id');
		$this->db->join('followed_user', 'users.id = followed_user.userID');
		$this->db->where('post_news.id', $id);
		return $this->db->get($this->_table5)->row_array();
	}
	public function getIRETheBigOne() {
		$this->db->select(['id', 'project_name', 'news_view', 'addr_detail', 'detail_area', 'total_investment', 'banner_img', 'time_create']);
		$this->db->order_by('news_view', 'DESC');
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		$this->db->limit(1);
		return $this->db->get($this->_table5)->row_array();
	}
	public function getIREAll() {
		$this->db->select(['post_news.id', 'project_name', 'addr_detail', 'detail_area', 'Gia_thoa_thuan', 'bds_type', 'name', 'companyName', 'user_avt', 'banner_img', 'news_view', 'time_create', 'createdDate', 'avtDate']);
		$this->db->join('users', 'post_news.customer = users.id');
		$this->db->where('type', 1);
		$this->db->where('time_expired >=', time());
		$this->db->order_by('news_view', 'DESC');
		return $this->db->get($this->_table5)->result_array();
	}
	public function getProjectNews() {
		$this->db->select(['post_news.id', 'introduce', 'project_name', 'addr_detail', 'total_investment', 'detail_area', 'Gia_thoa_thuan', 'bds_type', 'name', 'companyName', 'user_avt', 'banner_img', 'news_view', 'time_create', 'createdDate', 'avtDate']);
		$this->db->join('users', 'post_news.customer = users.id');
		$this->db->where('type', 1);
		$this->db->where('time_expired >=', time());
		$this->db->order_by('news_view', 'DESC');
		$this->db->limit(6);
		return $this->db->get($this->_table5)->result_array();
	}
	public function getIRENewestTheBigOne() {
		$this->db->select(['id', 'project_name', 'news_view', 'addr_detail', 'detail_area', 'total_investment', 'banner_img', 'time_create']);
		$this->db->order_by('time_create', 'DESC');
		$this->db->where('type', 1);
		$this->db->limit(1);
		return $this->db->get($this->_table5)->row_array();
	}
	public function getIRENewestAll() {
		$this->db->select(['post_news.id', 'project_name', 'addr_detail', 'detail_area', 'total_investment', 'name', 'companyName', 'user_avt', 'banner_img', 'news_view', 'time_create', 'createdDate', 'avtDate']);
		$this->db->join('users', 'post_news.customer = users.id');
		$this->db->where('type', 1);
		$this->db->order_by('time_create', 'DESC');
		$this->db->limit(7);
		return $this->db->get($this->_table5)->result_array();
	}
	public function getIREAboutToExpireTheBigOne() {
		$this->db->select(['id', 'project_name', 'news_view', 'addr_detail', 'detail_area', 'total_investment', 'banner_img', 'time_create']);
		$this->db->where('expired_from <=', time());
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		$this->db->order_by('time_expired', 'ASC');
		$this->db->limit(1);
		return $this->db->get($this->_table5)->row_array();
	}
	public function getIREAboutToExpireAll() {
		$this->db->select(['post_news.id', 'project_name', 'addr_detail', 'detail_area', 'total_investment', 'bds_type', 'name', 'companyName', 'user_avt', 'banner_img', 'news_view', 'time_create', 'createdDate', 'avtDate']);
		$this->db->join('users', 'post_news.customer = users.id');
		$this->db->where('expired_from <=', time());
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		$this->db->order_by('time_expired', 'ASC');
		$this->db->limit(7);
		return $this->db->get($this->_table5)->result_array();
	}
	public function SumOutstandingPJ() {
		$this->db->select('id');
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		return $this->db->get($this->_table5)->num_rows();
	}
	public function OutstandingPJTBO() {
		$this->db->select(['id', 'project_name', 'addr_detail', 'day_of_delivery', 'status', 'desc_project', 'nhapmin', 'nhapmax', 'banner_img', 'time_create']);
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		$this->db->order_by('news_view', 'DESC');
		$this->db->limit(1);
		return $this->db->get($this->_table5)->row_array();
	}
	public function OutstandingPJAll() {
		$this->db->select(['id', 'project_name', 'addr_detail', 'cdt_come_name', 'progress', 'nhapmin', 'nhapmax', 'detail_area', 'time_done', 'news_view', 'time_create', 'banner_img']);
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		$this->db->order_by('news_view', 'DESC');
		$this->db->limit(7);
		return $this->db->get($this->_table5)->result_array();
	}
	public function OutstandingPJStatus2() {
		$this->db->select(['id', 'project_name', 'addr_detail', 'news_view', 'cdt_come_name', 'progress', 'detail_area', 'time_done', 'time_done', 'nhapmin', 'nhapmax', 'time_create', 'banner_img']);
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		$this->db->where('status', 2);
		$this->db->order_by('news_view', 'DESC');
		$this->db->limit(6);
		return $this->db->get($this->_table5)->result_array();
	}
	public function OutstandingPJStatus1() {
		$this->db->select(['id', 'project_name', 'addr_detail', 'news_view', 'cdt_come_name', 'progress', 'detail_area', 'time_done', 'time_done', 'nhapmin', 'nhapmax', 'time_create', 'banner_img']);
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		$this->db->where('status', 1);
		$this->db->order_by('news_view', 'DESC');
		$this->db->limit(6);
		return $this->db->get($this->_table5)->result_array();
	}
	public function CityNews() {
		$this->db->select(['id', 'project_name', 'time_create', 'banner_img', 'select_city']);
		$this->db->where('time_expired >=', time());
		$this->db->where('type', 1);
		return $this->db->get($this->_table5)->result_array();
	}
}
?>
