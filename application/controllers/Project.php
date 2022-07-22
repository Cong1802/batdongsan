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
        $this->load->model('M_City');
        $this->load->model('M_Account');
        $this->load->model('M_PostNews');
	}
	public function ListOutstandingProject() {
		$this->_data['SumOutstandingPJ']		= $this->M_PostNews->SumOutstandingPJ();
		$this->_data['status']					= array (1 => 'Sắp mở bán', 2 => 'Đang mở bán');
		$this->_data['progress']				= array (1 => 'Đang xây dựng', 2 => 'Đã hoàn thiện');
		$this->_data['OutstandingPJ_TBO']		= $this->M_PostNews->OutstandingPJTBO();
		$this->_data['OutstandingPJ_All']		= $this->M_PostNews->OutstandingPJAll();
		$this->_data['list_city']				= $this->M_City->getList();
		$this->_data['citynews']				= $this->M_PostNews->CityNews();
		$this->_data['OutstandingPJ_Status2']	= $this->M_PostNews->OutstandingPJStatus2();
		$this->_data['OutstandingPJ_Status1']	= $this->M_PostNews->OutstandingPJStatus1();
		$this->_data['Invester']				= $this->M_Account->Investor();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ListOutstandingProject', $this->_data);
	}
	public function ListProjectNew() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ListProjectNew', $this->_data);
	}
	public function DetailProject($id) {
		$this->_data['detail_project']			= $this->M_PostNews->detailProject($id);
		$this->_data['bds_type']				= array (1 => 'Căn hộ', 2 => 'Nhà riêng', 3 => 'Nhà mặt phố', 4 => 'Shophouse, Nhà phố thương mại', 5 => 'Biệt thự liền kề', 6 => 'Đất', 7 => 'Đất nền dự án', 8 => 'Bất động sản khác');
		$this->_data['progress']				= array (1 => 'Đang xây dựng', 2 => 'Đã hoàn thiện');
		$this->_data['status']					= array (1 => 'Sắp mở bán', 2 => 'Đang mở bán');
		$this->_data['news_project']			= $this->M_PostNews->getProjectNews();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailProject', $this->_data);
	}

}
?>
