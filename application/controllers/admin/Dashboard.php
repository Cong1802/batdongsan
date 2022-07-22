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
        $this->load->model('M_Account');
	}
	public function index() {
		if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] !== '') {
			$user_id = $_COOKIE['user_id'];
			$this->_data['userInfo']				= $this->M_Account->checkTypeUser($user_id);
			$this->_data['canonical']				= base_url();
			$this->load->view('site/Dashboard', $this->_data);
		} else {
			redirect('/');
		}
	}
}
?>
