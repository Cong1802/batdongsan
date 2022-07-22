<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Dashboard extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Dashboard');
	}
	public function index() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Dashboard', $this->_data);
	}
}
?>