<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class ManageNews extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_ManageNews');
		$this->load->helper('func_fomatNumber');
		$this->load->library('pagination');
		$this->load->helper('func_fomatMonney');
		$this->load->model('M_PostNews');
		$this->load->helper('func_upload_img');
		$this->load->helper('images_helper');
	}
	public function ManageNewsPurchase() {

		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword = isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt = isset($_GET['stt']) ? $_GET['stt'] : ''; //tìm kiếm
		$this->_data['count_AllSave'] 			=   $this->M_ManageNews->count_AllSave();
		$this->_data['newsPurchase']			=	$this->M_ManageNews->getNewsPurchase($page, $rowperpage,$keyword,$stt,$cit_id);
		$this->_data['count_save_purchase'] 	= 	$this->M_ManageNews->countSavePurchase();
		$this->_data['count_all_purchase'] 		= 	$this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_lease'] 		= 	$this->M_ManageNews->countAllLease();
		$this->_data['count_all_design'] 		=   $this->M_ManageNews->count_All_Design();
		$this->_data['countAllProject'] 		=   $this->M_ManageNews->countAllProject();
		$countAll = $this->M_ManageNews->countAll_getNewsPurchase($keyword,$stt,$cit_id);
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-mua-ban.html';
		$config["total_rows"] 			= $countAll;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsPurchase', $this->_data);
	}
	public function deleteNews() {
		
		$id_news = $this->input->post('id_news');
		$delete = $this->M_ManageNews->deleteNews($id_news);
		if ($delete > 0) {
			$response['status'] = 1;
		}	
		echo json_encode($response);
	}
    public function ManageNewsLease() {
		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword = isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt = isset($_GET['stt']) ? $_GET['stt'] : 0; //tìm kiếm
		$this->_data['newsPurchase']			=	$this->M_ManageNews->getNewsLease($page, $rowperpage,$keyword,$stt,$cit_id);
		$this->_data['count_save_lease'] 		= 	$this->M_ManageNews->countSaveLease();
		$this->_data['count_all_purchase'] 		= 	$this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_lease'] 		= 	$this->M_ManageNews->countAllLease();
		$this->_data['count_all_design'] 		=   $this->M_ManageNews->count_All_Design();
		$this->_data['count_AllSave'] 			=   $this->M_ManageNews->count_AllSave();
		$this->_data['countAllProject'] 		=   $this->M_ManageNews->countAllProject();
		$countAll = $this->M_ManageNews->countAll_getNewsLease($keyword,$stt,$cit_id);
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-cho-thue.html';
		$config["total_rows"] 			= $countAll;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsLease', $this->_data);
	}
	public function ManageNewsProject() {
		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword = isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt = isset($_GET['stt']) ? $_GET['stt'] : 0; //tìm kiếm
		$this->_data['newsProject']				=   $this->M_ManageNews->getNewsProject($page, $rowperpage,$keyword,$stt,$cit_id);
		$this->_data['count_save_project'] 		=   $this->M_ManageNews->countSaveProject();
		$this->_data['count_save_lease'] 		= 	$this->M_ManageNews->countSaveLease();
		$this->_data['count_all_purchase'] 		= 	$this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_lease'] 		= 	$this->M_ManageNews->countAllLease();
		$this->_data['count_all_design'] 		=   $this->M_ManageNews->count_All_Design();
		$this->_data['count_AllSave'] 			=   $this->M_ManageNews->count_AllSave();
		$this->_data['countAllProject'] 		=   $this->M_ManageNews->countAllProject();
		$countAll = $this->M_ManageNews->countAll_getNewsProject($keyword,$stt,$cit_id);
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-cho-thue.html';
		$config["total_rows"] 			= $countAll;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsProject', $this->_data);
	}
	public function ManageNewsDesign() {
		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword = isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt = isset($_GET['style']) ? $_GET['style'] : ''; //tìm kiếm
		$time = isset($_GET['time']) ? strtotime($_GET['time']) : ''; //tìm kiếm
		$type = isset($_GET['type']) ? $_GET['type'] : ''; //tìm kiếm

		$this->_data['newsDesign']=	$this->M_ManageNews->getNewsDesign($page, $rowperpage,$keyword,$stt,$cit_id,$time,$type);

		$count_alls								= $this->M_ManageNews->countAll_getNewsDesign($keyword,$stt,$cit_id,$time,$type);
		$this->_data['countNewsHome'] 			= $this->M_ManageNews->count_NewsHome();
		$this->_data['countNewsRoom'] 			= $this->M_ManageNews->count_NewsRoom();
		$this->_data['count_all'] 				= $this->M_ManageNews->count_All_Design();
		$this->_data['count_AllSave'] 			= $this->M_ManageNews->count_AllSave();
		$this->_data['count_all_purchase'] 		= $this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_lease'] 		= $this->M_ManageNews->countAllLease();
		$this->_data['countAllProject'] 		= $this->M_ManageNews->countAllProject();
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-thiet-ke.html';
		$config["total_rows"] 			= $count_alls;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img mr_t24px w100pt flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsDesign', $this->_data);
	}
    public function ManageNewsSave() {

		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword 	= isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id		= isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt 		= isset($_GET['style']) ? $_GET['style'] : ''; //tìm kiếm
		$time 		= isset($_GET['time']) ? $_GET['time'] : ''; //tìm 
		if($time != '')
		{
			$time		= explode('-',$time);
			$time_st	= strtotime(str_replace('/','-',$time[0]));
			$time_end	= strtotime(str_replace('/','-',$time[1]));
		}
		else
		{
			$time_end = '';
			$time_st = '';
		}
		$type = isset($_GET['type']) ? $_GET['type'] : ''; //tìm kiếm

		$this->_data['newsSave']=	$this->M_ManageNews->getNewsSave($page, $rowperpage,$keyword,$stt,$cit_id,$time_st,$time_end,$type);
		$count_alls								= $this->M_ManageNews->countAll_getNewsSave($keyword,$stt,$cit_id,$time_st,$time_end,$type);
		$this->_data['count_NewsDesignSave'] 	= $this->M_ManageNews->count_NewsDesignSave();
		$this->_data['count_NewsProjectSave'] 	= $this->M_ManageNews->count_NewsProjectSave();
		$this->_data['count_AllSave'] 			= $this->M_ManageNews->count_AllSave();
		$this->_data['count_NewsSave'] 			= $this->M_ManageNews->count_NewsSave();
		$this->_data['countLease'] 				= $this->M_ManageNews->countAllLease();
		$this->_data['countPurchase'] 			= $this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_design'] 		= $this->M_ManageNews->count_All_Design();
		$this->_data['countAllProject'] 		= $this->M_ManageNews->countAllProject();
		$this->_data['type_news'] 				= ['1'=>'Dự án','2'=>'Phòng đẹp','3'=>'Nhà đẹp','4'=>'Mua, thuê'];
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-tin-luu.html';
		$config["total_rows"] 			= $count_alls;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img mr_t24px w100pt flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsSave', $this->_data);
	}

	//--------------------------------------update news 
	public function updateNewsSave() {
		$type = $this->input->post('type');
		$id_news = $this->input->post('id_news');
		$remove_news_sv = 0;	
		if($type == 0)
		{
			$remove_news_sv = $this->M_ManageNews->RemoveNewsSave($id_news);
		}
		else
		{
			$data_insert = [
				'newID' => $id_news,
				'userID' => 30,
				'sv_time_create' => time(),
			];
			$insert_news_sv = $this->M_ManageNews->SaveNews($data_insert);
		}

		if ($remove_news_sv > 0) {
			$response['status'] = 1;
		}	
		else
		{
			$response['status'] = 2;
		}
		echo json_encode($response);
	}
	//---------------------update tin đăng sau đăng nhập
	public function UpdateNewsAfterLogin($id_news) {
		$this->_data['city'] 					= $this->M_PostNews->listProvince();
		$this->_data['canonical']				= base_url();
		$this->_data['newsDetail'] 				= $this->M_ManageNews->NewsDetail($id_news);
		$this->_data['listDistricts'] 			= $this->M_PostNews->listDistricts($this->_data['newsDetail']['select_city']);
		$this->_data['listWards'] 				= $this->M_PostNews->listWards($this->_data['newsDetail']['districts']);
		$this->_data['streets'] 					= $this->M_PostNews->getStreetBy($this->_data['newsDetail']['wards']);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/UpdateNewsAfterLogin', $this->_data);
	}
	//---------------------post news update tin đăng sau đăng nhập
	public function PostNewsAfterLoginUpdate() {
		$id_news					= $this->input->post('id_news');
		$data_update = [
			'project_name'			=> $this->input->post('project_name'),
			'type_news' 			=> $this->input->post('type_news'),
			'bds_type' 				=> $this->input->post('type_bds'),
			'select_city' 		    => $this->input->post('city'),
			'arr_checkbox_detail' 	=> $this->input->post('arr_checkbox_detail'),
			'districts' 			=> $this->input->post('districts'),
			'wards'					=> $this->input->post('wards'),
			'street' 				=> $this->input->post('street'),
			'addr_detail' 			=> $this->input->post('desc_addr'),
			'price_min'				=> $this->input->post('giamin'),
			'price_max' 			=> $this->input->post('giamax'),
			'Gia_thoa_thuan' 		=> $this->input->post('radio_button'),
			'Legal_stt' 		    => $this->input->post('Legal_stt'),
			'area_min' 				=> $this->input->post('area_min'),
			'area_max'				=> $this->input->post('area_max'),
			'area_convert'			=> $this->input->post('area_convert'),
			'title_news' 			=> $this->input->post('title_news'),
			'desc_project' 			=> $this->input->post('desc_project'),
			'floor' 				=> $this->input->post('floor'),
			'detail_bds'			=> $this->input->post('detail_bds'),
			'Balcony_direction'		=> $this->input->post('Balcony_direction'),
			'direction'				=> $this->input->post('direction'),
			'time_expired'			=> strtotime($this->input->post('time_expired')),
			'corner' 				=> $this->input->post('corner'),
			'check_bathroom' 		=> $this->input->post('check_bathroom'),
            'check_bedroom' 		=> $this->input->post('check_bedroom'),
			'elevator_number' 		=> $this->input->post('elevator_number'),
			'bathroom' 				=> $this->input->post('bathroom'),
			'bedroom' 				=> $this->input->post('bedroom'),
			'Interior'				=> $this->input->post('Interior'),
			'mattien' 				=> $this->input->post('mattien'),
			'chieusau'				=> $this->input->post('chieusau'),
			'duongvao' 				=> $this->input->post('duongvao'),
			'stt_news' 				=> $this->input->post('stt_news'),
			'date_post_news'		=> strtotime($this->input->post('date_post_news')),
			'time_post_news' 		=> strtotime($this->input->post('time_post_news')),
			'type'					=> 4,
		];
		$time_create =  $this->input->post('time_create');
		$arr_img_old =  json_decode($this->input->post('arr_img_old'));
		//------------
		if(isset($_FILES['arr_img_desc']) && $arr_img_old != "")
		{
			$arr_img_update = UpdateUpLoadMultipleImg('arr_img_desc',$time_create);
			$data_update['arr_img']	= json_encode(array_merge($arr_img_old, $arr_img_update));
		}
		elseif(isset($_FILES['arr_img_desc']) && $arr_img_old == "")
		{
			$data_update['arr_img']	= json_encode(UpdateUpLoadMultipleImg('arr_img_desc',$time_create));
		}
		$update = $this->M_ManageNews->updateNewsAfterLogin($data_update,$id_news);
		if ($update > 0) {
			$response['status'] = 1;
			$response['type_news'] = $this->input->post('type_news');
			$response['msg'] 	= 'Cập nhật tin đăng thành công';
		}	
		echo json_encode($response);
	}
	//---------------------update tin đăng dự án
	public function UpdateNewsProject($id_news) {
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->_data['newsDetail'] 				= $this->M_ManageNews->NewsDetail($id_news);
		$this->_data['listWards'] 				= $this->M_PostNews->listWards($this->_data['newsDetail']['districts']);
		$this->_data['listStreet'] 				= $this->M_PostNews->getStreetBy($this->_data['newsDetail']['street']);
		$this->_data['listDistricts'] 			= $this->M_PostNews->listDistricts($this->_data['newsDetail']['select_city']);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/UpdateNewsProject', $this->_data);
	}
	//---------------------post news update tin đăng dự án
	public function PostNewsProjectUpdate() {
		$id_news					= $this->input->post('id_news');
		$banner_img_old				= $this->input->post('banner_img_old');
		$time_create				= $this->input->post('time_create');
		$d							= date('d',$time_create);
		$m							= date('m',$time_create);
		$y							= date('Y',$time_create);
		$desc_img_project_old		= $this->input->post('desc_img_project_old');
		$project_addr_old			= $this->input->post('project_addr_old');
		$desc_mb_project_old		= $this->input->post('desc_mb_project');
		$img_mb_project_old			= json_decode($this->input->post('img_mb_project_old'));
		$utilities_img_project_old	= $this->input->post('utilities_img_project_old');
		$count_img_mb				= explode(',',$this->input->post('count_img_mb'));
		$count_gtda					= explode(',',$this->input->post('count_gtda'));
		$introduct_project			= json_decode($this->input->post('introduct_project'));
		$data_update = [
			'project_name'			=> $this->input->post('project_name'),
			'introduce' 			=> $this->input->post('introduce'),
			'bds_type' 				=> $this->input->post('bds_type'),
			'select_city' 		    => $this->input->post('select_city'),
			'districts' 			=> $this->input->post('districts'),
			'wards' 				=> $this->input->post('wards'),
			'street'				=> $this->input->post('street'),
			'addr_detail' 			=> $this->input->post('addr_detail'),
			'post_time' 			=> strtotime($this->input->post('post_time')),
			'cdt_com_name' 			=> $this->input->post('cdt_come_name'),
			'cdt_founding'		    => strtotime($this->input->post('cdt_founding')),
			'cdt_phone' 			=> $this->input->post('cdt_phone'),
			'cdt_addr_com' 			=> $this->input->post('cdt_addr_com'),
			'cdt_project_num'		=> $this->input->post('cdt_project_num'),
			'time_st' 			    => strtotime($this->input->post('time_st')),
			'time_done' 			=> strtotime($this->input->post('time_done')),
			'area_type' 			=> $this->input->post('area_type'),
			'day_of_delivery' 		=> strtotime($this->input->post('day_of_delivery')),
			'home_num' 		        => $this->input->post('home_num'),
			'nhapmin' 			    => $this->input->post('nhapmin'),
			'nhapmax' 			    => $this->input->post('nhapmax'),
			'product_num'			=> $this->input->post('product_num'),
			'total_investment' 		=> $this->input->post('total_investment'),
			'quy_mo' 				=> $this->input->post('quy_mo'),
			'progress' 			    => $this->input->post('progress'),
			'detail_area' 		    => $this->input->post('detail_area'),
			'status' 				=> $this->input->post('status'),
			'desc_mb_project'		=> $this->input->post('desc_mb_project'),
			'list_utilities'		=> $this->input->post('list_utilities'),
			'part_name'				=> $this->input->post('part_name'),
			'title_img_project'		=> $this->input->post('title_img_project'),
			'title_img_vtda'		=> $this->input->post('title_img_vtda'),
			'title_img_mbda'		=> $this->input->post('title_img_mbda'),
			'title_img_utilities'	=> $this->input->post('title_img_utilities'),
			'title_img_gtda'		=> $this->input->post('title_img_gtda'),
			'time_create'			=> time(),
			'type'					=> 1,
			'title_mb_project'		=> $this->input->post('title_mb_project'),
			'stt_news' 				=> $this->input->post('stt_news'),
			'date_post_news'		=> strtotime($this->input->post('date_post_news')),
			'time_post_news' 		=> strtotime($this->input->post('time_post_news')),
		];
		$response 		= ['status' => 0, 'msg' => ''];
		$arr_desc_gtda = json_decode($this->input->post('arr_desc_gtda'));
		//---------img banner
		if(isset($_FILES['banner_img']))
		{
			if(file_exists("upload/$y/$m/$d/$banner_img_old"))
			{
				unlink("upload/$y/$m/$d/$banner_img_old");
			}
			$data_update['banner_img'] 				= upLoadImg('banner_img');
		}

		 //--------- chi tiết dự án
		if(isset($_FILES['desc_img_project']))
		{
			if(file_exists("upload/$y/$m/$d/$desc_img_project_old"))
			{
				unlink("upload/$y/$m/$d/$desc_img_project_old");
			}
			$data_update['desc_project'] 			= upLoadImg('desc_img_project');
		}
		else
		{
			$data_update['desc_project']			= $this->input->post('desc_project');
		}
		//  //------------vị trí dự án
		if(isset($_FILES['project_img_addr']))
		{
			if(file_exists("upload/$y/$m/$d/$project_addr_old"))
			{
				unlink("upload/$y/$m/$d/$project_addr_old");
			}
			$data_update['project_addr'] 			= upLoadImg('project_img_addr');
		}
		else
		{
			$data_update['project_addr']			= $this->input->post('project_addr');
		}

		//  //------------chi tiết mặt bằng dự án
		if(isset($_FILES['desc_mb_img_project']))
		{
			if(file_exists("upload/$y/$m/$d/$desc_mb_project_old"))
			{
				unlink("upload/$y/$m/$d/$desc_mb_project_old");
			}
			$data_update['desc_mb_project'] 		= upLoadImg('desc_mb_img_project');
		}
		else
		{
			$data_update['desc_mb_project']			= $this->input->post('desc_mb_project');
		}

		//------------mặt bằng dự án
		if(isset($_FILES['arr_mb_img_project']))
		{
			$arr_img_mb								= json_decode(upLoadMultipleImg('arr_mb_img_project'));
			$count_arr_img 							= 0;
			foreach($count_img_mb as $count=>$value)
			{
				if(isset($img_mb_project_old[$value]) && $img_mb_project_old[$value] != "")
				{
					if(file_exists("upload/$y/$m/$d/$img_mb_project_old[$value]"));
					{
						unlink("upload/$y/$m/$d/$img_mb_project_old[$value]");
					}
				}
				$img_mb_project_old[$value]			= $arr_img_mb[$count_arr_img];
				$count_arr_img++;
			}
			$data_update['img_mb_project']			= json_encode($img_mb_project_old);
		}

		//------------ tiện ích dự án
		if(isset($_FILES['utilities_img_project']))
		{
			if(file_exists("upload/$y/$m/$d/$utilities_img_project_old"))
			{
				unlink("upload/$y/$m/$d/$utilities_img_project_old");
			}
			$data_update['desc_utilities_project'] 	= upLoadImg('utilities_img_project');
		}
		else
		{
			$data_update['desc_utilities_project']	= $this->input->post('utilities_project');
		}


		//------------ giới thiệu dự án
		if(isset($_FILES['arr_img_gtda']))
		{
			$arr_img_gtda = json_decode(upLoadMultipleImg('arr_img_gtda'));
		}		
		$i = 0;

		$arr_gtda = [];
		foreach($arr_desc_gtda as $key => $value)
		{
			if($value != 1)
			{
				$arr_gtda[] = $value;
			}
			elseif($value == 1)
			{
				if(isset($count_gtda[$i]))
				{
					$arr_gtda[$count_gtda[$i]] = $arr_img_gtda[$i];
					$i++;
				}	
			}
		}
		$data_update['introduct_project']	= json_encode($arr_gtda);
		$update = $this->M_ManageNews->updateNewsAfterLogin($data_update,$id_news);
		if ($update > 0) {
			$response['status'] = 1;
			$response['msg'] 	= 'Cập nhật tin đăng thành công';
		}	
		echo json_encode($response);	
	}
	//---------------------update tin đăng nhà đẹp
	public function UpdateNewsHome($id_news) {
		$this->_data['newsDetail'] 				= $this->M_ManageNews->NewsDetail($id_news);
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->_data['listDistricts'] 			= $this->M_PostNews->listDistricts($this->_data['newsDetail']['select_city']);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/UpdateNewsHome', $this->_data);
	}
	//---------------------update tin đăng phòng đẹp
	public function UpdateNewsRoom($id_news) {
		$this->_data['newsDetail'] 				= $this->M_ManageNews->NewsDetail($id_news);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/UpdateNewsRoom', $this->_data);
	}
	//---------------------post news update tin đăng phòng đẹp
	public function postNewsRoomUpdate() {
		
		$id_news					= $this->input->post('id_news');
		$data_update = [
			'ctrinh_type'			=> $this->input->post('ctrinh_type'),
			'styles' 				=> $this->input->post('styles'),
			'area' 					=> $this->input->post('area'),
			'perform' 		    	=> $this->input->post('Perform'),
			'desc_img' 		    	=> $this->input->post('desc_img'),
			'list_color' 			=> $this->input->post('list_color'),
			'price_min'				=> $this->input->post('price_min'),
			'title_news' 			=> $this->input->post('title_news'),
			'price_max' 			=> $this->input->post('price_max'),
			'type'					=> 2,
		];
		$time_create =  $this->input->post('time_create');
		$arr_img_old =  json_decode($this->input->post('arr_img_old'));
		//------------
		if(isset($_FILES['arr_img']) && $arr_img_old != "")
		{
			$arr_img_update = UpdateUpLoadMultipleImg('arr_img',$time_create);
			$data_update['arr_img']	= json_encode(array_merge($arr_img_old, $arr_img_update));
		}
		elseif(isset($_FILES['arr_img_desc']) && $arr_img_old == "")
		{
			$data_update['arr_img']	= json_encode(UpdateUpLoadMultipleImg('arr_img_desc',$time_create));
		}


		$update = $this->M_ManageNews->updateNewsAfterLogin($data_update,$id_news);
		if ($update > 0) {
			$response['status'] = 1;
			$response['msg'] 	= 'Cập nhật tin đăng thành công';
		}	
		echo json_encode($response);
	}
	//---------------------post news update tin đăng nhà đẹp
	public function PostNewsHomeUpdate() {
	
		$id_news					= $this->input->post('id_news');
		$banner_img_old				= $this->input->post('banner_img_old');
		$time_create				= $this->input->post('time_create');
		$d							= date('d',$time_create);
		$m							= date('m',$time_create);
		$y							= date('Y',$time_create);
		$desc_img_project_old		= $this->input->post('desc_img_project_old');
		$data_update = [
			'ctrinh_type'			=> $this->input->post('ctrinh_type'),
			'styles' 				=> $this->input->post('styles'),
			'area' 					=> $this->input->post('area'),
			'perform' 		    	=> $this->input->post('Perform'),
			'list_color' 			=> $this->input->post('list_color'),
			'price_min'				=> $this->input->post('price_min'),
			'title_news' 			=> $this->input->post('title_news'),
			'price_max' 			=> $this->input->post('price_max'),
			'type_img'				=> $this->input->post('type_img'),
			'bedroom' 				=> $this->input->post('bedroom'),
			'time_build' 			=> $this->input->post('time_build'),
			'project_name' 		    => $this->input->post('project_name'),
			'select_city' 			=> $this->input->post('city'),
			'districts'				=> $this->input->post('district'),
			'title_img' 			=> $this->input->post('title_img'),
			'type'					=> 3,
		];
		// echo "<pre>";
		// print_r($data_update);
		// echo "<pre>";die;
		//--------- chi tiết dự án
		if(isset($_FILES['desc_img_project']))
		{
			if(file_exists("upload/$y/$m/$d/$desc_img_project_old"))
			{
				unlink("upload/$y/$m/$d/$desc_img_project_old");
			}
			$data_update['desc_project'] 			= UpdateUpLoadImg('desc_img_project',$time_create);
		}
		else
		{
			$data_update['desc_project']			= $this->input->post('desc_project');
		}
		if(isset($_FILES['banner_img']))
		{
			unlink("upload/$y/$m/$d/$banner_img_old");
			$data_update['banner_img']					= UpdateUpLoadImg('banner_img',$time_create);
		}
		// echo "<pre>";
		// print_r($data_update);
		// echo "<pre>";
		//------------
		$update = $this->M_ManageNews->updateNewsAfterLogin($data_update,$id_news);
		if ($update > 0) {
			$response['status'] = 1;
			$response['msg'] 	= 'Cập nhật tin đăng thành công';
		}	
		echo json_encode($response);
	}
	//---------------------remove _img
	public function RemoveImg() {

		$id_news 			= $this->input->post('id_news');
		$arr_img 			= json_decode($this->input->post('arr_img'));
		$arr_delete_img 	= json_decode($this->input->post('arr_delete_img'));
		$name 				= $this->input->post('name');
		$time 				= $this->input->post('time');
		$d					= date('d',$time);
		$m					= date('m',$time);
		$y					= date('Y',$time);
		unlink("upload/$y/$m/$d/$name");
		$arr_img_new= [];
		foreach($arr_img as $key=> $value)
		{
			if(!in_array($value,$arr_delete_img))
			{
				$arr_img_new [] = $value;
			}
		}
		$data_update ['arr_img'] = json_encode($arr_img_new);
		$this->M_ManageNews->updateNewsAfterLogin($data_update,$id_news);
	}

}
?>