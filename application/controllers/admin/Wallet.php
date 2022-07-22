<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Wallet extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Wallet');
        $this->load->model('M_Account');
	}
	public function Wallet3s() {
		if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != '') {
			$info									= $this->M_Account->checkTypeUser($_COOKIE['user_id']);
			$this->_data['type']					= $info['userType'];
			$this->_data['name']					= $info['name'];
			$this->_data['id']						= $info['id'];
			$this->_data['email']					= $info['email'];
			$this->_data['canonical']				= base_url();
			$this->load->view('site/Wallet3s', $this->_data);
		} else {
			redirect('/');
		}
	}
    public function WalletDeposit() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/WalletDeposit', $this->_data);
	}
	public function BuyService() {
		if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != '') {
			$info									= $this->M_Account->checkTypeUser($_COOKIE['user_id']);
			$this->_data['type']					= $info['userType'];
			$this->_data['name']					= $info['name'];
			$this->_data['id']						= $info['id'];
			$this->_data['email']					= $info['email'];
			$this->_data['canonical']				= base_url();
			$this->load->view('site/BuyService', $this->_data);
		} else {
			redirect('/');
		}
	}
	public function BuyPacketNews() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/BuyPacketNews', $this->_data);
	}
	public function TransactionList() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/TransactionList', $this->_data);
	}
}
?>
