<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Account extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Account');
		$this->load->model('M_otp');
		$this->load->library('pagination');
		$this->load->model('M_City');
		$this->load->library('Globals');
	}
	public function AccountLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountLogin', $this->_data);
	}
    public function AccountRegister() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegister', $this->_data);
	}
	public function checkEmail() {
		$email = $_POST['email'];
		$check = $this->M_Account->checkBy($email);
		if ($check > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function sendOTP() {
		$email = $_POST['email'];
		if ($email !== '') {
			$otp_code	= mt_rand(100000,999999); 
			$subject	= '[batdongsan3s] Kích hoạt tài khoản đăng ký';
			$body		= 'Mã xác nhận OTP của bạn là: '.$otp_code;
			$send_email	= $this->globals->sendEmail($email, $subject, $body);

			if ($send_email) {
				$check	= $this->M_otp->checkEmail($email);
				if ($check > 0) {
					$update = $this->M_otp->update($email, ['code' => $otp_code, 'updatedDate' => date('Y-m-d')]);
				} else {
					$insert = $this->M_otp->insert(['email' => $email, 'code' => $otp_code, 'createdDate' => date('Y-m-d')]);
				}
				return 1;
				echo 1;
			}
		} else {
			return 0;
			echo 0;
		}
	}
	public function ajaxRegister() {
		$data = [
			'email'				=> $_POST['email'],
			'password'			=> md5($_POST['password']),
			'phone'				=> $_POST['phone'],
			'name'				=> $_POST['name'],
			'newTypeInterest'	=> $_POST['type_interest'],
			'newType'			=> $_POST['type_real_estate'],
			'cityID'			=> $_POST['city'],
			'districtID'		=> $_POST['district'],
			'wardID'			=> $_POST['ward'],
			'address'			=> $_POST['address'],
			'gender'			=> $_POST['gender'],
			'userType'			=> $_POST['usertype'],
			'createdDate'		=> date('Y-m-d')
		];
		$insert_id = $this->M_Account->insert_id($data);
		echo $insert_id;
	}
    public function AccountRegisterBroker() {
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterBroker', $this->_data);
	}
	public function ajaxRegisterBroker() {
		$data = [
			'email'				=> $_POST['email'],
			'password'			=> md5($_POST['password']),
			'phone'				=> $_POST['phone'],
			'name'				=> $_POST['name'],
			'cityID'			=> $_POST['city'],
			'districtID'		=> $_POST['district'],
			'wardID'			=> $_POST['ward'],
			'address'			=> $_POST['address'],
			'gender'			=> $_POST['gender'],
			'userType'			=> $_POST['usertype'],
			'createdDate'		=> date('Y-m-d')
		];
		$insert_id = $this->M_Account->insert_id($data);
		echo $insert_id;
	}
    public function AccountRegisterBuyer() {
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterBuyer', $this->_data);
	}
	public function getListDistrict() {
		$id										= $_POST['id'];
		$list_districts							= $this->M_Account->listDistrictBy($id);
		echo json_encode($list_districts);
	}
	public function getListWard() {
		$id										= $_POST['id'];
		$list_wards								= $this->M_Account->listWardBy($id);
		echo json_encode($list_wards);
	}
    public function AccountRegisterSeller() {
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterSeller', $this->_data);
	}
	public function getEmailRegister() {
		$id_user								= $_POST['id_user'];
		$otp									= $_POST['otp'];
		$email									= $this->M_Account->getEmailby($id_user);
		$getOTP									= $this->M_otp->checkOTP($email['email']);
		if ($otp != $getOTP['code']) {
			echo 1;
		} else {
			$active								= $this->M_Account->activeUser(['active' => 1],$id_user);
			echo 2;
		}
	}
    public function PageOTP($id) {
		$this->_data['id_user']					= $id;
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PageOTP', $this->_data);
	}
    public function Login() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Login', $this->_data);
	}
    public function AccountRegisterEnterprise() {
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterEnterprise', $this->_data);
	}
	public function ajaxRegisterEnterprise() {
		$data = [
			'email'				=> $_POST['email'],
			'password'			=> md5($_POST['password']),
			'phone'				=> $_POST['phone'],
			'companyName'		=> $_POST['com'],
			'cityID'			=> $_POST['city'],
			'field'				=> $_POST['field'],
			'districtID'		=> $_POST['district'],
			'wardID'			=> $_POST['ward'],
			'taxCode'			=> $_POST['taxCode'],
			'address'			=> $_POST['address'],
			'userType'			=> $_POST['usertype'],
			'createdDate'		=> date('Y-m-d')
		];
		$insert_id = $this->M_Account->insert_id($data);
		echo $insert_id;
	}
	public function UpdatePassword($id) {
		$this->_data['id']						= $id;
		$this->_data['canonical']				= base_url();
		$this->load->view('site/UpdatePassword', $this->_data);
	}
    public function ForgotPasswordOTP($id) {
		$this->_data['id_user']					= $id;
		$getEmail = $this->M_Account->getEmailby($id);
		$this->_data['email']					= $getEmail['email'];
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ForgotPasswordOTP', $this->_data);
	}
	public function sendForgotPasswordOTP() {
		$email									= $_POST['email'];
		if ($email != '') {
			$otp_code	= mt_rand(100000,999999); 
			$subject	= '[batdongsan3s] Kích hoạt tài khoản đăng ký';
			$body		= 'Mã xác nhận OTP của bạn là: '.$otp_code;
			$send_email	= $this->globals->sendEmail($email, $subject, $body);

			if ($send_email) {
				$update = $this->M_otp->update($email, ['code' => $otp_code, 'updatedDate' => date('Y-m-d')]);
				$getID	= $this->M_Account->getIdForgot($email);
				echo $getID['id'];
			}
		} else {
			echo 0;
		}
	}
	public function checkEmailForgot() {
		$email									= $_POST['email'];
		$check = $this->M_Account->checkEmailForgot($email);
		echo $check;
	}
    public function ForgotPasswordEmail() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ForgotPasswordEmail', $this->_data);
	}
	public function TenantInformation($id_user) {
		$this->_data['canonical']				= base_url();
		$this->_data['Information']				= $this->M_Account->TenantInformation($id_user);
		$this->_data['UserType']				= ['0'=>'Người thuê ,mua','1'=>'Người môi giới','2'=>'Người cho thuê ,bán ','3'=>'Doanh nghiệp'];
		$this->_data['newType']					= ['0'=>'Căn hộ','1'=>'Nhà riêng','2'=>'Nhà mặt phố','3'=>'Shophouse, Nhà phố thương mại','4'=>'Biệt thự liền kề','5'=>'Đất','6'=>'Đất nền dự án','7'=>'Bất động sản khác'];
		$this->_data['district']				= $this->M_City->GetDistricts($this->_data['Information']['cit_id'])['cit_name'];
		$this->_data['ward']					= $this->M_City->GetWard($this->_data['Information']['districtID'])['ward_name'];
		$this->load->view('site/TenantInformation', $this->_data);
	}
	public function ForgotPasswordUpdate() {
		$id										= $_POST['id'];
		$password								= md5($_POST['password']);
		$update = $this->M_Account->ForgotPasswordUpdate($id, ['password' => $password, 'updatedDate' => date('Y-m-d')]);
	}
	public function checkOTPforgotPW() {
		$id										= $_POST['id'];
		$otp									= $_POST['otp'];
		$email									= $this->M_Account->getEmailby($id);
		$getOTP									= $this->M_otp->checkOTP($email['email']);

		if ($otp != $getOTP['code']) {
			echo 1;
		} else {
			echo $email['id'];
		}
	}
	public function ProfileManagement() {
		$user_id 	= isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : 30;
		$follow 	= isset($_GET['follow']) ? $_GET['follow'] : '';
		$listUserFollow 				= $this->M_Account->getListFollow($user_id);
		foreach($listUserFollow as $arr)
		{
			$arr_follow[] = $arr['UserFollowed'];
		}

		$this->_data['arr_follow']		= (isset($arr_follow) ? $arr_follow : '');
		$this->_data['CountFollowUsers']= $this->M_Account->CountFollowUsers($user_id);
		$this->_data['CountFollower']	= $this->M_Account->CountFollower($user_id);
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
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : 0; //tìm kiếm
		$type_news = isset($_GET['type_news']) ? $_GET['type_news'] : ''; //tìm kiếm
		$district = isset($_GET['district']) ? $_GET['district'] : ''; //tìm kiếm
		if(isset($_GET['id_cit']))
		{
			$this->_data['listDistricts']				= $this->M_City->listDistricts($cit_id);
		}
		// $this->_data['count_user']		= $this->M_Account->CountUser();
		$this->_data['listUsers']		= $this->M_Account->GetListUsers($page, $rowperpage,$keyword,$type_news,$cit_id,$district,$follow,$user_id);
		$count_alls						= $this->M_Account->countAll_Users($keyword,$type_news,$cit_id,$district,$follow,$user_id);
		$config['base_url']             = base_url() . 'quan-ly-ho-so.html';
		$config["total_rows"] 			= $count_alls;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img mr_t24px flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
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
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['newType']					= ['0'=>'Căn hộ','1'=>'Nhà riêng','2'=>'Nhà mặt phố','3'=>'Shophouse, Nhà phố thương mại','4'=>'Biệt thự liền kề','5'=>'Đất','6'=>'Đất nền dự án','7'=>'Bất động sản khác'];
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ProfileManagement', $this->_data);
	}

	public function followUser() {
		$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : 30;
		$user_follow							= $this->input->post('id_user');
		$type									= $this->input->post('type');
		$data							= 
		[
			'userID'							=> $user_id,
			'UserFollowed'						=> $user_follow,
			'createdDate'						=> time(),
		];
		if($type == 1)
		{
			$followUser								= $this->M_Account->unFollowUser($user_id,$user_follow);
			if ($followUser > 0) {
				$response['status'] = 0;
			}	
		}
		else
		{
			$followUser								= $this->M_Account->followUser($data);
			if ($followUser > 0) {
				$response['status'] = 1;
			}
		}
		echo json_encode($response);
	}

	public function PotentialCustomers() {
		$user_id 	= isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : 30;
		$this->_data['CountFollowUsers']= $this->M_Account->CountFollowUsers($user_id);
		$this->_data['CountFollower']	= $this->M_Account->CountFollower($user_id);
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
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : 0; //tìm kiếm
		$type_news = isset($_GET['type_news']) ? $_GET['type_news'] : ''; //tìm kiếm
		$district = isset($_GET['district']) ? $_GET['district'] : ''; //tìm kiếm
		if(isset($_GET['id_cit']))
		{
			$this->_data['listDistricts']				= $this->M_City->listDistricts($cit_id);
		}
		$this->_data['PotentialCustomers']		= $this->M_Account->GetPotential($page, $rowperpage,$keyword,$type_news,$cit_id,$district,$user_id);
		$count_alls						= $this->M_Account->count_Potential($keyword,$type_news,$cit_id,$district,$user_id);
		$config['base_url']             = base_url() . 'quan-ly-ho-so.html';
		$config["total_rows"] 			= $count_alls;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img mr_t24px flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
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
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['newType']					= ['0'=>'Căn hộ','1'=>'Nhà riêng','2'=>'Nhà mặt phố','3'=>'Shophouse, Nhà phố thương mại','4'=>'Biệt thự liền kề','5'=>'Đất','6'=>'Đất nền dự án','7'=>'Bất động sản khác'];
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PotentialCustomers', $this->_data);
	}
}
?>
