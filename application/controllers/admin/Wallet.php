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
	}
	public function Wallet3s() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Wallet3s', $this->_data);
	}
    public function WalletDeposit() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/WalletDeposit', $this->_data);
	}
	public function BuyService() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/BuyService', $this->_data);
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