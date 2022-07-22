<?php
/**
* 
*/
class M_ManageNews extends CI_Model
{
	protected $_table       = 'post_news';
    protected $order        = array('id' => 'desc');
    protected $_tbl_city 	= 'city';
    protected $_tbl_city2   = 'city2';
    protected $_tbl_ward	= 'ward';
    protected $_tbl_street	= 'street';
    protected $_tbl_users	= 'users';
	
    public function getCity($id_city)
    {

        if($id_city != 0)
        {
            $this->db->where('cit_id',$id_city);
            $this->db->select(['cit_name']);
            return ($this->db->get($this->_tbl_city)->row_array())['cit_name'];
        }
        else
        {
            $this->db->select(['cit_name','cit_id']);
            return ($this->db->get($this->_tbl_city)->result_array());
        }
       
    }
    //---------- tin đăng mua bán
    public function getNewsPurchase($offset, $perpage,$keyword,$stt,$cit_id) {
       
        if ($stt != 0) {
            $this->db->where('stt_news',$stt);
        }
        if ($cit_id != '') {
            $this->db->where('select_city', $cit_id);
        }
        if ($keyword != '') {
            $this->db->like('project_name', $keyword);
        }
        $this->db->where('type', 4);
        $this->db->where('type_news', 1);
        $this->db->limit($perpage, $offset);
        $this->db->order_by('id_news', 'desc');
        return $this->db->get('post_news')->result_array();
    }
    public function countAll_getNewsPurchase($keyword,$stt,$cit_id) {
        $this->db->select('id_news');
        if ($stt !== 0) {
            $this->db->where('stt_news',$stt);
        }   
        if ($keyword !== '') {
            $this->db->like('project_name', $keyword);
        }
       
        if ($cit_id !== '') {
            $this->db->like('select_city', $cit_id);
        }
        $this->db->where('type_news', 1);
        $this->db->where('type', 4);
        return $this->db->get('post_news')->num_rows();
    }
    //---------------------count news purchase save
    public function countSavePurchase() {
        $this->db->select('id_news');
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        $this->db->where('type_news', 1);
        $this->db->where('type', 4);
        return $this->db->get('post_news')->num_rows();
    }
    //---------------------count all purchase
    public function countAllPurchase() {
        $this->db->select('id_news');
        $this->db->where('type_news', 1);
        $this->db->where('type', 4);
        return $this->db->get('post_news')->num_rows();
    }
    //---------- tin đăng cho thuê
    public function getNewsLease($offset, $perpage,$keyword,$stt,$cit_id) {
    
        if ($stt != 0) {
            $this->db->where('stt_news',$stt);
        }
        if ($cit_id != '') {
            $this->db->where('select_city', $cit_id);
        }
        if ($keyword != '') {
            $this->db->like('project_name', $keyword);
        }
        $this->db->where('type_news', 2);
        $this->db->where('type', 4);
        $this->db->limit($perpage, $offset);
        $this->db->order_by('id_news', 'desc');
        return $this->db->get('post_news')->result_array();
    }
    public function countAll_getNewsLease($keyword,$stt,$cit_id) {
        $this->db->select('id_news');
        if ($stt != 0) {
            $this->db->where('stt_news',$stt);
        }   
        if ($keyword != '') {
            $this->db->like('project_name', $keyword);
        }
        
        if ($cit_id != '') {
            $this->db->like('select_city', $cit_id);
        }
        $this->db->where('type_news', 2);
        $this->db->where('type', 4);
        return $this->db->get('post_news')->num_rows();
    }
    //----------------------count lease
    public function countAllLease() {
        $this->db->select('id_news');
        $this->db->where('type_news', 2);
        $this->db->where('type', 4);
        return $this->db->get('post_news')->num_rows();
    }
    //---------------------count news Lease save
    public function countSaveLease() {
        $this->db->select('id_news');
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        $this->db->where('type_news', 2);
        $this->db->where('type', 4);
        return $this->db->get('post_news')->num_rows();
    }
    //---------- tin đăng dự án
    public function getNewsProject($offset, $perpage,$keyword,$stt,$cit_id) {
        
        if ($stt != 0) {
            $this->db->where('stt_news',$stt);
        }
        if ($cit_id != '') {
            $this->db->where('select_city', $cit_id);
        }
        if ($keyword != '') {
            $this->db->like('project_name', $keyword);
        }
        $this->db->where('type', 1);
        $this->db->limit($perpage, $offset);
        $this->db->order_by('id_news', 'desc');
        return $this->db->get('post_news')->result_array();
    }
    //----------------------count lease
    public function countAllProject() {
        $this->db->select('id_news');
        $this->db->where('type', 1);
        return $this->db->get('post_news')->num_rows();
    }
    public function countAll_getNewsProject($keyword,$stt,$cit_id) {
        $this->db->select('id_news');
        if ($stt != 0) {
            $this->db->where('stt_news',$stt);
        }   
        if ($keyword != '') {
            $this->db->like('project_name', $keyword);
        }
        
        if ($cit_id != '') {
            $this->db->like('select_city', $cit_id);
        }
        $this->db->where('type', 1);
        return $this->db->get('post_news')->num_rows();
    }
    //---------------------count news project save
    public function countSaveProject() {
        $this->db->select('id_news');
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        $this->db->where('type', 1);
        return $this->db->get('post_news')->num_rows();
    }
    //---------- tin đăng nhà đẹp
    public function getNewsDesign($offset, $perpage,$keyword,$style,$cit_id,$time,$type) {
        
        if ($style != '') {
            $this->db->where('post_news.styles',$style);
        }
        if ($cit_id != '') {
            $this->db->where('post_news.select_city', $cit_id);
        }
        if ($keyword != '') {
            $this->db->like('title_news', $keyword);
        }
        if ($time != '') {
            $this->db->where('(post_news.time_create) >=',$time);
            $this->db->where('(post_news.time_create) <=',($time + 86400));
        }
        if($type == 1 || $type == "")
        {
            $this->db->where('(type = 2 or type = 3)');
        }
        else
        {
            $this->db->where('type',$type);
        }
        $this->db->join('users', 'post_news.customer = users.id');
        $this->db->limit($perpage, $offset);
        $this->db->order_by('post_news.id_news', 'desc');
        return $this->db->get('post_news')->result_array();
    }
    public function countAll_getNewsDesign($keyword,$style,$cit_id,$time,$type) {
        $this->db->select('id_news');
        if ($style != '') {
            $this->db->where('styles',$style);
        }   
        if ($keyword != '') {
            $this->db->like('title_news', $keyword);
        }
        
        if ($cit_id != '') {
            $this->db->where('post_news.select_city', $cit_id);
        }
        if ($time != '') {
            $this->db->where('(post_news.time_create) >=',$time);
            $this->db->where('(post_news.time_create) <=',($time + 86400));
        }
        if($type == 1 || $type == "")
        {
            $this->db->where('(type = 2 or type = 3)');
        }
        else
        {
            $this->db->where('type',$type);
        }
        return $this->db->get('post_news')->num_rows();
    }

    //---------- tin đăng đã lưu
    public function getNewsSave($offset, $perpage,$keyword,$style,$cit_id,$time_st,$time_end,$type) {
        
        if ($style != '') {
            $this->db->where('post_news.styles',$style);
        }
        if ($cit_id != '') {
            $this->db->where('post_news.select_city', $cit_id);
        }
        if ($keyword != '') {
            $this->db->like('desc_project', $keyword);
        }
        if ($time_st != '') {
            $this->db->where('(post_news.time_create) >=',$time_st);
            $this->db->where('(post_news.time_create) <=',($time_end));
        }
        if($type == 3)
        {
            $this->db->where('(type = 2 or type = 3)');
        }
        elseif($type != 0)
        {
            $this->db->where('type',$type);
        }
        $this->db->join('users', 'post_news.customer = users.id');
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        $this->db->limit($perpage, $offset);
        $this->db->order_by('post_news.id_news', 'desc');
        return $this->db->get('post_news')->result_array();
    }
    public function countAll_getNewsSave($keyword,$style,$cit_id,$time_st,$time_end,$type) {
        $this->db->select('*');
        $this->db->join('users', 'post_news.customer = users.id');
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        if ($style != '') {
            $this->db->where('styles',$style);
        }   
        if ($keyword != '') {
            $this->db->like('title_news', $keyword);
        }
        
        if ($cit_id != '') {
            $this->db->where('post_news.select_city', $cit_id);
        }
        if ($time_st != '') {
            $this->db->where('(post_news.time_create) >=',$time_st);
            $this->db->where('(post_news.time_create) <=',($time_end));
        }
        if($type == 3)
        {
            $this->db->where('(type = 2 or type = 3)');
        }
        elseif($type != 0)
        {
            $this->db->where('type',$type);
        }
        
        return $this->db->get('post_news')->num_rows();
    }


    //----------------------- sô bản ghi tin đã lưu
    public function count_NewsDesignSave() {
        // $id_save = $_COOKIE['user_id'];
        $this->db->where('(type = 2 or type = 3)');
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        return $this->db->get('post_news')->num_rows();
    }
    public function count_AllSave() {
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        return $this->db->get('post_news')->num_rows();
    }
    public function count_NewsProjectSave() {
        $this->db->where('type', 1);
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        return $this->db->get('post_news')->num_rows();
    }
    public function count_NewsSave() {
        $this->db->where('type', 4);
        $this->db->join('saved_new', 'post_news.id_news = saved_new.newID');
        return $this->db->get('post_news')->num_rows();
    }

    //----------------------- số bản ghi thiết kế nhà đẹp phòng đẹp
    public function count_NewsHome() {
        $this->db->where('type', 3);
        return $this->db->get('post_news')->num_rows();
    }
    public function count_All_Design() {
        $this->db->where('(type = 2 or type = 3)');
        return $this->db->get('post_news')->num_rows();
    }
    public function count_NewsRoom() {
        $this->db->where('type', 2);
        return $this->db->get('post_news')->num_rows();
    }

    //-------------------
    public function getDistricts($id_district)
    {
        $this->db->where('cit_id',$id_district);
        $this->db->select(['cit_name']);
        return ($this->db->get($this->_tbl_city2)->row_array())['cit_name'];
    }
    public function deleteNews($id_news)
    {
        $this->db->where('id', $id_news);
		return $this->db->delete($this->_table);
    }
    public function getWard($id_ward)
    {
        $this->db->where('ward_id',$id_ward);
        $this->db->select(['ward_name']);
        return ($this->db->get($this->_tbl_ward)->row_array())['ward_name'];
    }
    //---------------save_news
    public function SaveNews($data_insert)
    {
        $this->db->insert('saved_new',$data_insert);
        return $this->db->insert_id();
    }
    //---------------remove_news_save
    public function RemoveNewsSave($id_news)
    {
        $this->db->where('newID',$id_news);
        $this->db->where('userID',30);
        return $this->db->delete('saved_new');
    }

    //---------------Chi tiết dự ánh
    public function NewsDetail($id_news)
    {
        $this->db->where('id_news',$id_news);
        return $this->db->get('post_news')->row_array();
    }
    //--------------- update tin đăng
    public function updateNewsAfterLogin($data_update,$id_news)
    {
        $this->db->where('id_news',$id_news);
        return $this->db->update($this->_table,$data_update);
    }
}
?>