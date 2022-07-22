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
		$this->load->helper('images_helper');
		$this->load->helper('func_upload_img_helper');
        $this->load->model('M_Account');
		$this->load->model('M_otp');
		$this->load->model('M_City');
		$this->load->model('M_Wallet');
		$this->load->library('Globals');
	}
	public function AccountLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AcountLogin', $this->_data);
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
		$wallet = [
			'userID'			=> $insert_id,
			'createdDate'		=> date('Y-m-d')
		];
		$insert_wallet = $this->M_Wallet->insertWallet($wallet);
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
		$wallet = [
			'userID'			=> $insert_id,
			'createdDate'		=> date('Y-m-d')
		];
		$insert_wallet = $this->M_Wallet->insertWallet($wallet);
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
    public function Login($id) {
		$this->_data['type']						= $id;
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Login', $this->_data);
	}
	public function getLogin() {
		$array_response							= ['status' => 0, 'msg' => ''];
		if (isset($_POST['email']) && isset($_POST['password'])) {
			$email								= $_POST['email'];
			$password							= $_POST['password'];
			$userType							= $_POST['userType'];
			$check_login						= $this->M_Account->checkLogin($email, md5($password), $userType);
			if ($check_login > 0) {
				$info_user						= $this->M_Account->getInfoBy($email, md5($password));
				// $this->session->set_userdata('user', $info_user);
				set_cookie('user_id', $info_user['id'], time() + 7*6000);
				$array_response					= ['status' => 1, 'msg' => 'Đăng nhập thành công'];
			}
			echo json_encode($array_response);
		}
	}
	public function LogOut() {
		if (isset($_SESSION['user'])) {
			// delete_cookie('user_id');
			session_destroy();
		}
		redirect('/');
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
		$wallet = [
			'userID'			=> $insert_id,
			'createdDate'		=> date('Y-m-d')
		];
		$insert_wallet = $this->M_Wallet->insertWallet($wallet);
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
	public function Profile() {
		if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] !== '') {
			$id										= $_COOKIE['user_id'];
			$this->_data['userInfo']				= $this->M_Account->checkTypeUser($id);
			$this->_data['canonical']				= base_url();
			$this->_data['city']					= $this->M_City->getList();
			$this->_data['district']				= $this->M_City->getDistrict();
			$this->_data['ward']					= $this->M_City->getWard();
			$this->load->view('site/Profile', $this->_data);
		} else {
			redirect('/');
		}
	}
	public function edit_account() {
		$id						= $_COOKIE['user_id'];
		$data = [
			'name'				=> $_POST['name'],
			'companyName'		=> $_POST['companyName'],
			'phone'				=> $_POST['phone'],
			'userURL'			=> $_POST['userURL'],
			'AuthorCapital'		=> $_POST['AuthorCapital'],
			'taxCode'			=> $_POST['taxCode'],
			'field'				=> $_POST['field'],
			'FoundedYear'		=> $_POST['FoundedYear'],
			'gender'			=> $_POST['gender'],
			'userBirth'			=> $_POST['userBirth'],
			'cityID'			=> $_POST['cityID'],
			'districtID'		=> $_POST['districtID'],
			'wardID'			=> $_POST['wardID'],
			'newTypeInterest'	=> $_POST['newTypeInterest'],
			'newType'			=> $_POST['newType'],
			'address'			=> $_POST['address'],
			'self-describe'		=> $_POST['self-describe'],
			'updatedDate'		=> date('Y-m-d'),
		];
		$update = $this->M_Account->updateAccount($data, $id);
		echo $update;
	}
	public function ChangePassword() {
		$this->load->view('site/ChangePassword', $this->_data);
	}
	
	public function getUpdatePassword() {
		$id											= $_POST['id'];
		$oldPassword								= md5($_POST['old_password']);
		$password									= md5($_POST['password']);
		$check_oldPW = $this->M_Account->checkOldPW($id, $oldPassword);
		if ($check_oldPW == 0) {
			echo 0;
		} else {
			$change_password = $this->M_Account->UpdatePassword($id, $password);
			echo 1;
			if (isset($_COOKIE['user_id'])) {
				delete_cookie('user_id');
			}
		}
	}

	public function postImg() {
		$id	= $_COOKIE['user_id'];
		$AVTInfo = $this->M_Account->getAVTInfo($id);
		$filename = $AVTInfo['user_avt'];
		$y = date('Y', $AVTInfo['avtDate']);
		$m = date('m', $AVTInfo['avtDate']);
		$d = date('d', $AVTInfo['avtDate']);
		$dir = $y."/".$m."/".$d;
		$lastAvt = "upload/".$dir."/".$filename;
		if (file_exists($lastAvt)) {
			unlink($lastAvt);
		}
		$nameFile = upLoadImg('user_avt');
		$data = [
			'user_avt'			=> $nameFile,
			'avtDate'			=> time(),
		];
		$updateAVT = $this->M_Account->updateAVT($id, $data);
		
		echo 1;
	}

	public function postCoverImg() {
		$id	= $_COOKIE['user_id'];
		$ImgInfo = $this->M_Account->getImgInfo($id);
		$filename = $ImgInfo['coverImage'];
		$y = date('Y', $ImgInfo['coverImageDate']);
		$m = date('m', $ImgInfo['coverImageDate']);
		$d = date('d', $ImgInfo['coverImageDate']);
		$dir = $y."/".$m."/".$d;
		$lastImg = "upload/".$dir."/".$filename;
		if (file_exists($lastImg)) {
			unlink($lastImg);
		}
		$nameFile = upLoadImg('coverImage');
		$data = [
			'coverImage'		=> $nameFile,
			'coverImageDate'	=> time(),
		];
		$updateImage = $this->M_Account->updateImage($id, $data);

		echo 1;
	}
}
?>
