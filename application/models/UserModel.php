<?php 


/**
* 
*/
class UserModel extends MY_Model
{
	
	function __construct()
	{
		
		parent::__construct();
	}

	public function get($where =  array()) {

		if (!empty($where)) {
		
			$q = $this->db->where($where)->get('users');

			if ($q->num_rows()) {
			
				return $q->row();
			}

		} else {

			$q = $this->db->get('users');

			if ($q->num_rows()) {
			
				return $q->result();
			}

		}

	}

	public function update($where , $data)
	{
		
		$this->db->where($where)->update('users',$data);

		if ($this->db->affected_rows()==1) {
		
			return true;
		}

	}


	public function delete($where) {


		$this->db->where($where)->delete('users');

		if ($this->affected_rows()==1) {
			
			return true;
		}

	}
}
