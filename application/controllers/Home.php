<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Home extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Home');
        $this->load->model('M_PostNews');
	}
	public function index() {
		$this->_data['page_title']   			= 'Trang chủ';
		$this->_data['robots']					= 'noindex,nofollow';
		$this->_data['deal']					= array (0 => 'Không thỏa thuận', 1 => 'Có thể thỏa thuận');
		$this->_data['bds_type']				= array (1 => 'Căn hộ', 2 => 'Nhà riêng', 3 => 'Nhà mặt phố', 4 => 'Shophouse, Nhà phố thương mại', 5 => 'Biệt thự liền kề', 6 => 'Đất', 7 => 'Đất nền dự án', 8 => 'Bất động sản khác');
		$this->_data['news_pj']					= $this->M_PostNews->getNewsProjectIndex();
		$this->_data['ire_the_big_one']			= $this->M_PostNews->getIRETheBigOne();
		$this->_data['ire_all']					= $this->M_PostNews->getIREAll();
		$this->_data['ire_newest_the_big_one']	= $this->M_PostNews->getIRENewestTheBigOne();
		$this->_data['ire_newest_all']			= $this->M_PostNews->getIRENewestAll();
		$this->_data['ire_ate_the_big_one']		= $this->M_PostNews->getIREAboutToExpireTheBigOne();
		$this->_data['ire_ate_all']				= $this->M_PostNews->getIREAboutToExpireAll();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/index', $this->_data);
	}
}
?>
