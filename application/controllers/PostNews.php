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
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostAfterLogin', $this->_data);
	}
    public function PostHomeDesignBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PostHomeDesignBeforeLogin', $this->_data);
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
				'project_name'			=> $this->input->post('project_name'),
				'introduce' 			=> $this->input->post('introduce'),
				'bds_type' 				=> $this->input->post('bds_type'),
				'select_city' 		    => $this->input->post('select_city'),
				'districts' 			=> $this->input->post('districts'),
				'wards' 				=> $this->input->post('wards'),
				'street'				=> $this->input->post('street'),
				'addr_detail' 			=> $this->input->post('addr_detail'),
				'post_time' 			=> strtotime($this->input->post('post_time')),
				'cdt_come_name' 		=> $this->input->post('cdt_come_name'),
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
			'room_ctrinh_type'			=> $this->input->post('ctrinh_type'),
			'room_styles' 				=> $this->input->post('styles'),
			'room_area' 				=> $this->input->post('area'),
			'room_perform' 		    	=> $this->input->post('Perform'),
			'room_list_color' 			=> $this->input->post('list_color'),
			'room_price_min'			=> $this->input->post('price_min'),
			'room_title_news' 			=> $this->input->post('title_news'),
			'room_price_max' 			=> $this->input->post('price_max'),
			'time_create'				=> time(),
			'type'						=> 2,
		];

		if(isset($_FILES['arr_img']))
		{
			$data_insert['room_arr_img'] 				= json_encode(upLoadMultipleImg('arr_img'));
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
