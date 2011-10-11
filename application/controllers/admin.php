<?php
class Admin extends CI_Controller

{
function __construct()
	{
		parent::__construct();

		$this->load->library(array('encrypt', 'form_validation'));
		$this->is_logged_in();
	}
        function index()
        {

            echo "admin";

        }




        function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
                $level = $this->session->userdata('role');

		if($is_logged_in==NULL || $level >> 1)
		{
                    echo $is_logged_in;
                    echo "not logged in";
		redirect('/');
		}
	}
}