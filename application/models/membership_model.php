<?php

class Membership_model extends CI_Model {

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', sha1($this->input->post('password').$this->config->item('encryption_key')));
		$this->db->where('activated', 1);
		$query = $this->db->get('users');

		if($query->num_rows == 1)
		{

			return true;

			
		}

	}

      function _prep_password($password)
	{
	    return sha1($password.$this->config->item('encryption_key'));
	}
	function create_member()
	{

		$new_member_insert_data = array(
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			
			'username' => $this->input->post('username'),
			'password' =>sha1($this->input->post('password').$this->config->item('encryption_key')),
			
		);

		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}

	function update_password($id, $passsalt, $password)
	{
		$this->db->where('id', $id);
		$new_member_update_data = array(

			'passSALT' => $passsalt,
			'password' => md5($password)


		);

		$insert = $this->db->update('users', $new_member_update_data);


		return $insert;
	}

	function add_employee()
	{
		$this->db->select('id');
		$this->db->where('username', $this->input->post('username'));
		$query2 = $this->db->get('users');
		if($query2->num_rows == 1)
		{
			foreach($query2->result() as $row)
			{
				$employee_id = $row->id;

			$employee_data = array(
				'company_id' =>$this->input->post('company_id'),
				'employee_id' =>$employee_id,
			);
			}
			$add = $this->db->insert('company_members', $employee_data);
			return $add;
		}

	}


}