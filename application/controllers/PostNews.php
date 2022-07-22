<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class PostNews extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('func_upload_img');
        $this->load->model('M_PostNews');
		$this->load->helper('images_helper');
	}
	public function PostNewsAfterLogin() {
		$this->_data['city'] = $this->M_PostNews->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostAfterLogin', $this->_data);
	}
	public function addNewsAfterLogin() {
		$data_insert = [
			'customer'				=> isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : 30,
			'project_name'			=> $this->input->post('project_name'),
			'type_news' 			=> $this->input->post('type_news'),
			'bds_type' 				=> $this->input->post('type_bds'),
			'select_city' 		    => $this->input->post('city'),
			'districts' 			=> $this->input->post('districts'),
			'wards'					=> $this->input->post('wards'),
			'street' 				=> $this->input->post('street'),
			'addr_detail' 			=> $this->input->post('desc_addr'),
			'price_min'				=> $this->input->post('giamin'),
			'price_max' 			=> $this->input->post('giamax'),
			'Gia_thoa_thuan' 		=> $this->input->post('radio_button'),
			'arr_checkbox_detail' 	=> $this->input->post('arr_checkbox_detail'),
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
			'bathroom' 				=> $this->input->post('bathroom'),
			'elevator_number' 		=> $this->input->post('elevator_number'),
			'bedroom' 				=> $this->input->post('bedroom'),
			'Interior'				=> $this->input->post('Interior'),
			'mattien' 				=> $this->input->post('mattien'),
			'chieusau'				=> $this->input->post('chieusau'),
			'duongvao' 				=> $this->input->post('duongvao'),
			'stt_news' 				=> $this->input->post('stt_news'),
			'date_post_news'		=> strtotime($this->input->post('date_post_news')),
			'time_post_news' 		=> strtotime($this->input->post('time_post_news')),
			'time_create'			=> time(),
			'type'					=> 4,
		];
		//------------
		// echo "<pre>";
		// print_r($data_insert);
		// echo "</pre>";die;
		if(isset($_FILES['arr_img_desc']))
		{
			$data_insert['arr_img'] = upLoadMultipleImg('arr_img_desc');
		}		
		$insert = $this->M_PostNews->insertNewsAfterLogin($data_insert);
		if ($insert > 0) {
			$response['status'] = 1;
			$response['msg'] 	= 'Đăng tin thành công';
		}	
		echo json_encode($response);

	}
    public function PostHomeDesignBeforeLogin() {
		$this->_data['city'] = $this->M_PostNews->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostHomeDesignBeforeLogin', $this->_data);
	}
	public function addNewsHome() {
		$data_insert = [
			'customer'				=> isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : 30,
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
			'banner_img' 			=> $this->input->post('banner_img'),
			'title_img' 			=> $this->input->post('title_img'),
			'time_create'			=> time(),
			'type'					=> 3,
		];
		//--------- chi tiết dự án
		if(isset($_FILES['desc_img_project']))
		{
			$data_insert['desc_project'] 			= upLoadImg('desc_img_project');
		}
		else
		{
			$data_insert['desc_project']			= $this->input->post('desc_project');
		}
		$data_insert['banner_img']					= upLoadImg('banner_img');
		$insert = $this->M_PostNews->insertNewsHome($data_insert);
		if ($insert > 0) {
			$response['status'] = 1;
			$response['msg'] 	= 'Đăng tin thành công';
		}	
		echo json_encode($response);
	}
    public function PostNewsBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostNewsBeforeLogin', $this->_data);
	}
    public function PostProjectBeforeLogin() {

		$this->_data['city'] = $this->M_PostNews->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostProjectBeforeLogin', $this->_data);
	}
	public function ajaxGetListDistricts() {

		$cit_id = $_POST['city'];
		$list_districts = $this->M_PostNews->listDistricts($cit_id);
		echo json_encode($list_districts);
	}
	public function ajaxGetListWards() {

		$cit_id = $_POST['city'];
		$list_wards = $this->M_PostNews->listWards($cit_id);
		echo json_encode($list_wards);
	}
	public function getStreetBy() {

		$cit_id = $_POST['city'];
		$list_street = $this->M_PostNews->getStreetBy($cit_id);
		echo json_encode($list_street);
	}

	public function addNewsProject() {

			$data_insert = [
				'customer'				=> isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : 30,
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
				$data_insert['banner_img'] 				= upLoadImg('banner_img');
			}

 			//--------- chi tiết dự án
			if(isset($_FILES['desc_img_project']))
			{
				$data_insert['desc_project'] 			= upLoadImg('desc_img_project');
			}
			else
			{
				$data_insert['desc_project']			= $this->input->post('desc_project');
			}

 			//------------vị trí dự án
			if(isset($_FILES['project_img_addr']))
			{
				$data_insert['project_addr'] 			= upLoadImg('project_img_addr');
			}
			else
			{
				$data_insert['project_addr']			= $this->input->post('project_addr');
			}

 			//------------chi tiết mặt bằng dự án
			if(isset($_FILES['desc_mb_img_project']))
			{
				$data_insert['desc_mb_project'] 		= upLoadImg('desc_mb_img_project');
			}
			else
			{
				$data_insert['desc_mb_project']			= $this->input->post('desc_mb_project');
			}

 			//------------mặt bằng dự án
			if(isset($_FILES['arr_mb_img_project']))
			{
				$data_insert['img_mb_project']			= upLoadMultipleImg('arr_mb_img_project');
			}

			//------------ tiện ích dự án
			if(isset($_FILES['utilities_img_project']))
			{
				$data_insert['desc_utilities_project'] 	= upLoadImg('utilities_img_project');
			}
			else
			{
				$data_insert['desc_utilities_project']	= $this->input->post('utilities_project');
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
					$arr_gtda[] = $arr_img_gtda[$i];
					$i++;
				}
			}
			$data_insert['introduct_project']	= json_encode($arr_gtda);
			$insert = $this->M_PostNews->insertProjectNews($data_insert);
			if ($insert > 0) {
				$response['status'] = 1;
				$response['msg'] 	= 'Đăng tin thành công';
			}	
			echo json_encode($response);			
	}
	public function addNewsRoom() {

		$data_insert = [
			'customer'				=> isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : 30,
			'ctrinh_type'			=> $this->input->post('ctrinh_type'),
			'styles' 				=> $this->input->post('styles'),
			'area' 					=> $this->input->post('area'),
			'perform' 		    	=> $this->input->post('Perform'),
			'desc_img' 		    	=> $this->input->post('desc_img'),
			'list_color' 			=> $this->input->post('list_color'),
			'price_min'				=> $this->input->post('price_min'),
			'title_news' 			=> $this->input->post('title_news'),
			'price_max' 			=> $this->input->post('price_max'),
			'time_create'			=> time(),
			'type'					=> 2,
		];

		if(isset($_FILES['arr_img']))
		{
			$data_insert['arr_img'] 				= upLoadMultipleImg('arr_img');
		}	
		$insert = $this->M_PostNews->insertNewsRoom($data_insert);	
		if ($insert > 0) {
			$response['status'] = 1;
			$response['msg'] 	= 'Đăng tin thành công';
		}
		echo json_encode($response);
	}
    public function PostRoomDesignBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostRoomDesignBeforeLogin', $this->_data);
	}
    public function PostTypeAfterLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostTypeAfterLogin', $this->_data);
	}
}
?>