<?php
/**
* 
*/
class M_TeamManagement extends CI_Model
{
	
	protected $_table = 'teammanagement';
	protected $_table1 = 'teammembers';
	protected $_table2 = 'users';
	// protected $column_order = array('teamID','teamName','teamPhone','teamEmail','teamManager');
    protected $order = array('teamID' => 'desc');
	
	public function insert_Team($data)
	{
		$this->db->insert($this->_table, $data);
		return $this->db->insert_id();
	}
    public function getInfoTeamManager($id)
    {
        $this->db->select('*');
		$this->db->join('users', 'teammanagement.teamManager = users.id');
		$this->db->where('teamManager', $id);
		return $this->db->get($this->_table)->row_array();
    }
	public function getInfoBoss($id)
	{
		$this->db->select('*');
		$this->db->join('teammanagement', 'teammembers.tmTeamID = teammanagement.teamID');
		$this->db->join('users', 'teammanagement.teamManager = users.id');
		$this->db->where('tmMemberID', $id);
		return $this->db->get($this->_table1)->row_array();
	}
	public function count1($id)
	{
		$this->db->select('teamID');
		$this->db->where('teamManager', $id);
		return $this->db->get($this->_table)->row_array();
	}
	public function countMembers1($id)
	{
		$this->db->select('tmID');
		$this->db->where('tmTeamID', $id);
		return $this->db->get($this->_table1)->num_rows();
	}
	public function listMembers($id,$limit, $start)
	{
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->join('users', 'teammembers.tmMemberID = users.id');
		$this->db->join('wallet', 'teammembers.tmMemberID = wallet.userID');
		$this->db->order_by('tmID', 'DESC');
		$this->db->where('tmTeamID', $id);
		return $this->db->get($this->_table1)->result_array();
	}
	public function get_total($id)
	{
		$this->db->select('*');
		$this->db->join('users', 'teammembers.tmMemberID = users.id');
		$this->db->join('wallet', 'teammembers.tmMemberID = wallet.userID');
		$this->db->order_by('tmID', 'DESC');
		$this->db->where('tmTeamID', $id);
		return $this->db->get($this->_table1)->num_rows();
	}
	public function count2($id)
	{
		$this->db->select('tmTeamID');
		$this->db->where('tmMemberID', $id);
		return $this->db->get($this->_table1)->row_array();
	}
	public function countMembers2($id)
	{
		$this->db->select('tmID');
		$this->db->where('tmTeamID', $id);
		return $this->db->get($this->_table1)->num_rows();
	}
	public function listMembers1($id)
	{
		$this->db->select('*');
		$this->db->join('users',  'teammembers.tmMemberID = users.id');
		$this->db->join('wallet', 'teammembers.tmMemberID = wallet.userID');
		$this->db->order_by('tmID', 'DESC');
		$this->db->where('tmTeamID', $id);
		return $this->db->get($this->_table1)->result_array();
	}
	public function del_member($id)
	{
		$this->db->where('tmMemberID', $id);
		return $this->db->delete($this->_table1);
	}
	public function checkMember($id)
	{
		$this->db->select('tmID');
		$this->db->where('tmMemberID', $id);
		return $this->db->get($this->_table1)->num_rows();
	}
	public function addMember($data)
	{
		$this->db->insert($this->_table1, $data);
		return $this->db->insert_id();
	}
}
?>
