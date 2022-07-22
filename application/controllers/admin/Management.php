<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Management extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Account');
        $this->load->model('M_TeamManagement');
        $this->load->model('M_Wallet');
		$this->load->library('pagination');
		$this->load->helper('url');
	}
	public function addTeam() {
		$data = [
			'teamName'		=> $_POST['name'],
			'teamPhone'		=> $_POST['phone'],
			'teamEmail'		=> $_POST['email'],
			'teamManager'	=> $_POST['manager'],
			'createDate'	=> date('Y-m-d')
		];
		$user_id = $_COOKIE['user_id'];
		$insertTeam = $this->M_TeamManagement->insert_Team($data);
		$updateRole = $this->M_Account->updateRole($user_id);
		echo 1;
	}
	public function TeamManagement() {
		if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] !== '') {
			$user_id 								= $_COOKIE['user_id'];
			$this->_data['user_id']					= $_COOKIE['user_id'];
			$this->_data['userInfo']				= $this->M_Account->checkTypeUser($user_id);
			$this->_data['wallet']					= $this->M_Wallet->WalletInfo($user_id);
			$this->_data['checkRole']				= $this->M_Account->checkRole($user_id);
			if ($this->_data['checkRole']['TeamRole'] == 1) {
				// quan ly doi nhom
				$this->_data['count1']				= $this->M_TeamManagement->count1($user_id);
				$this->_data['countMembers1']		= $this->M_TeamManagement->countMembers1($this->_data['count1']['teamID']);
				$params = array();
				$limit_per_page = 10;
				$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				$total_records = $this->M_TeamManagement->get_total($this->_data['count1']['teamID']);
				if ($total_records > 0) {
					$this->_data['listMembers']			= $this->M_TeamManagement->listMembers($this->_data['count1']['teamID'],$limit_per_page, $start_index);
				}
			} elseif ($this->_data['checkRole']['TeamRole'] == 2) {
				// nhan vien doi nhom
				$this->_data['count2']				= $this->M_TeamManagement->count2($user_id);
				$this->_data['countMembers2']		= $this->M_TeamManagement->countMembers2($this->_data['count2']['tmTeamID']);
				$this->_data['listMembers1']		= $this->M_TeamManagement->listMembers1($this->_data['count2']['tmTeamID']);
			}
			$this->_data['TeamManagement']			= $this->M_TeamManagement->getInfoTeamManager($user_id);
			$this->_data['Boss']					= $this->M_TeamManagement->getInfoBoss($user_id);
			$this->_data['canonical']				= base_url();
			$this->pagination->initialize($this->_data);
			$params['links'] = $this->pagination->create_links();
			$this->load->view('site/TeamManagement', $this->_data);
		} else {
			redirect('/');
		}
	}
	public function searchUser() {
		$info										= $_POST['info'];
		$user_id									= $_POST['user_id'];
		$this->_data['checkEmail']					= $this->M_Account->checkEmailTeamManagement($info);
		if ($this->_data['checkEmail'] > 0) {
			$this->_data['getInfo']					= $this->M_Account->getInfoByEmail($info);
			if ($user_id == $this->_data['getInfo']['id']) {
				echo 2;
			} else {
				$avtDate								= $this->_data['getInfo']['avtDate'];
				$avtUser								= $this->_data['getInfo']['user_avt'];
				$y										= date('Y', $avtDate);
				$m										= date('m', $avtDate);
				$d										= date('d', $avtDate);
				$dir									= "upload/".$y."/".$m."/".$d;
				$avt = $dir."/".$avtUser;
				$user['info']							= 1;
				$user['id']								= $this->_data['getInfo']['id'];
				$user['user_avt']						= $this->_data['getInfo']['user_avt'];
				$user['avt']							= $avt;
				$user['name']							= $this->_data['getInfo']['name'];
				$user['email']							= $this->_data['getInfo']['email'];
				$user['phone']							= $this->_data['getInfo']['phone'];
				$data = json_encode($user);
				echo $data;
			}
		} else {
			$this->_data['checkPhone']				= $this->M_Account->checkPhoneTeamManagement($info);
			if ($this->_data['checkPhone'] > 0) {
				$this->_data['getInfo']				= $this->M_Account->getInfoByPhone($info);
				if ($user_id == $this->_data['getInfo']['id']) {
					echo 2;
				} else {
					$avtDate						= $this->_data['getInfo']['avtDate'];
					$avtUser						= $this->_data['getInfo']['user_avt'];
					$y								= date('Y', $avtDate);
					$m								= date('m', $avtDate);
					$d								= date('d', $avtDate);
					$dir							= "upload/".$y."/".$m."/".$d;
					$avt = $dir."/".$avtUser;
					$user['info']					= 1;
					$user['id']						= $this->_data['getInfo']['id'];
					$user['user_avt']				= $this->_data['getInfo']['user_avt'];
					$user['avt']					= $avt;
					$user['name']					= $this->_data['getInfo']['name'];
					$user['email']					= $this->_data['getInfo']['email'];
					$user['phone']					= $this->_data['getInfo']['phone'];
					$data = json_encode($user);
					echo $data;
				}
			} else {
				echo 0;
			}
		}
	}
	public function addMember() {
		$data = [
			'tmMemberID'							=> $_POST['id'],
			'tmTeamID'								=> $_POST['team'],
			'tmCreatedDate'							=> date('Y-m-d'),
		];
		$this->_data['checkMember']					= $this->M_TeamManagement->checkMember($data['tmMemberID']);
		if ($this->_data['checkMember'] > 0) {
			echo 1;
		} else {
			$addMember								= $this->M_TeamManagement->addMember($data);
			echo 0;
		}
	}
	public function getMemberInfo() {
		$id_member									= $_POST['id_member'];
		$this->_data['getInfoByID']					= $this->M_Account->getInfoByID($id_member);
		$avtDate									= $this->_data['getInfoByID']['avtDate'];
		$avtUser									= $this->_data['getInfoByID']['user_avt'];
		$y											= date('Y', $avtDate);
		$m											= date('m', $avtDate);
		$d											= date('d', $avtDate);
		$dir										= "upload/".$y."/".$m."/".$d;
		$avt = $dir."/".$avtUser;
		$user['id']									= $this->_data['getInfoByID']['id'];
		$user['user_avt']							= $this->_data['getInfoByID']['user_avt'];
		$user['avt']								= $avt;
		$user['money']								= $this->_data['getInfoByID']['money'];
		$user['name']								= $this->_data['getInfoByID']['name'];
		$user['email']								= $this->_data['getInfoByID']['email'];
		$user['phone']								= $this->_data['getInfoByID']['phone'];
		$data = json_encode($user);
		echo $data;
	}
	public function updateWallet() {
		$manager									= $_POST['Manager'];
		$member										= $_POST['Member'];
		$MaMoney									= $_POST['MaMoney'];
		$MeMoney									= $_POST['MeMoney'];
		
		$updateManager								= $this->M_Wallet->UpdateManager($manager, ['money' => $MaMoney, 'updatedDate' => date('Y-m-d')]);
		$updateMember								= $this->M_Wallet->UpdateMember($member, ['money' => $MeMoney, 'updatedDate' => date('Y-m-d')]);
		echo 1;
	}
	public function del_member() {
		$id											= $_POST['id'];
		$delete_user								= $this->M_TeamManagement->del_member($id);
		echo 1;
	}
}
?>
