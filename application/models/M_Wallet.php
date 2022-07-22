<?php
/**
* 
*/
class M_Wallet extends CI_Model
{
	
	protected $_table = 'wallet';
    protected $order = array('id','userID','money','point','createdDate');
	
    public function WalletInfo($id)
    {
        $this->db->select(['money', 'point']);
		$this->db->where('userID', $id);
		return $this->db->get($this->_table)->row_array();
    }
	public function UpdateManager($id, $data)
	{
		$this->db->where('userID', $id);
		return $this->db->update($this->_table, $data);
	}
	public function UpdateMember($id, $data)
	{
		$this->db->where('userID', $id);
		return $this->db->update($this->_table, $data);
	}
	public function insertWallet($data)
	{
		$this->db->insert($this->_table, $data);
		return $this->db->insert_id();
	}
}
?>
