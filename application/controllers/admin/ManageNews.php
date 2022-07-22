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
	}
	public function ManageNewsPurchase() {
		$this->_data['canonical']				= base_url();
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsPurchase', $this->_data);
	}
    public function ManageNewsLease() {
		$this->_data['canonical']				= base_url();
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsLease', $this->_data);
	}
	public function ManageNewsProject() {
		$this->_data['canonical']				= base_url();
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsProject', $this->_data);
	}
	public function ManageNewsDesign() {
		$this->_data['canonical']				= base_url();
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsDesign', $this->_data);
	}
    public function ManageNewsSave() {
		$this->_data['canonical']				= base_url();
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsSave', $this->_data);
	}
}
?>