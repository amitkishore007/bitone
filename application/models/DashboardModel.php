<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class DashboardModel extends CI_Model
{
	
	
	public function get_users($limit=null, $start=null) {

		$this->db->order_by('created_at','DESC');
		if (!is_null($limit) && !is_null($start) ) {
		
			$this->db->limit($limit, $start);

		}
		$q = $this->db->get('users');

		if ($q->num_rows()) {
		
			return $q->result();
		}
	}

	public function count_users() {

		$q = $this->db->count_all_results('users');
		
		
	    return $q;
		
	}

	public function get_user_by_addess($address){

		$q = $this->db->where(['wallet_address'=>$address])->get('users');

		if ($q->num_rows()) {
			
			return $q->row();
		}
	}

	public function store_roi($data) {

		$this->db->insert('roi',$data);

		if ($this->db->affected_rows()) {
			
			return true;
		}
	}


	public function search_user($search,$limit=10,$offset = 0) {


		$this->db->or_like('username',$search);
		$this->db->or_like('wallet_address',$search);
		$this->db->or_like('email',$search);
		$this->db->or_like('phone',$search);
		$this->db->order_by('username','ASC');

		if ($limit==10) {
			
			$this->db->limit($limit, $offset);
		}

		$q  = $this->db->get('users');

		if ($q->num_rows()) {
			
			return $q->result();
		}

	}


	public function get_user_by_id() {

		$id = (int)$this->input->post('id');

		$q = $this->db->where(['id'=>$id])->get('users');

		if ($q->num_rows()==1) {

			return $q->row();

		}
	}

	public function store_bonus($bonus) {

		$this->db->insert('bonus_coins',$bonus);

		if ($this->db->affected_rows()) {
		
			return true;
		}

	}

}