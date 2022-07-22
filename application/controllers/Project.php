<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Project extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Project');
	}
	public function ListOutstandingProject() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ListOutstandingProject', $this->_data);
	}
	public function ListProjectNew() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ListProjectNew', $this->_data);
	}
	public function DetailProject() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailProject', $this->_data);
	}

}
?>