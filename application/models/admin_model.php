<?php

class Admin_model extends CI_Model {

	 function __construct()
    {
        parent::__construct();

    }
	function get_fees($feetype)
        {
                $this->db->where('fee_type', $feetype);
                $this->db->order_by('low');
            	$query = $this->db->get('fees');
		if($query->num_rows == 1);
			{
				return $query->result();
			}
        }

        function add_fee()
        {
            $new_fee_insert_data = array(
			'fee_type' => $this->input->post('fee_type'),
			'low' => $this->input->post('low'),
			'high' => md5($this->input->post('high')),
			'fee' => $this->input->post('fee')
		);

		$this->db->insert('fees', $new_employee_insert_data);

        }


       
}