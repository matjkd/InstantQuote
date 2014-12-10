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

        function calculate_fee($feetype, $value)
        {
                $this->db->where('fee_type', $feetype);
                $this->db->where('low <', $value);
                  $this->db->where('high >=', $value);
                $this->db->limit(1);
            	$query = $this->db->get('fees');
		if($query->num_rows == 1);
			{
				return $query->row('fee');
			}

        }
		
		function get_stamp_fees($purchase_cost){
			
			 $this->db->where('fee_type', 'stampfee');
			  $this->db->where('low <=', $purchase_cost);
			  $this->db->order_by('low');
			  $query = $this->db->get('fees', 'asc');
			  if($query->num_rows > 0);
			{
				return $query->result();
			}
		}


        function get_variables()
        {
            
                $this->db->select('banktransfer_purchase, banktransfer_sale, mortgage_fee, leasehold_purchase, leasehold_sale, localsearch, priority_search, landcharge, office_copy, stamp_duty_forms');
            	$query = $this->db->get('variables');
		if($query->num_rows == 1);
			{
				return $query->result();
			}
        }
        function edit_variable($id, $field, $value)
        {
            $update_data = array(
					$field => $value
					);
		$this->db->where('variable_id', $id);
		$update = $this->db->update('variables', $update_data);
		return $update;
        }

        function add_fee()
        {
            $new_fee_insert_data = array(
			'fee_type' => $this->input->post('fee_type'),
			'low' => $this->input->post('low'),
			'high' => $this->input->post('high'),
			'fee' => $this->input->post('fee')
		);

		$this->db->insert('fees', $new_fee_insert_data);

        }
        function delete_fee($id)
        {
            $this->db->where('fee_id', $id);
            $this->db->delete('fees');

        }
        function get_admin($id)
	{
			
		$this->db->where('admin_id', $id);
		$query = $this->db->get('admin');
		if($query->num_rows == 1);
			{
				return $query->result();
			}
		
	}


       
}