<?php
class Admin extends CI_Controller

{
function __construct()
	{
		parent::__construct();
                $this->load->model('admin_model');
		$this->load->library(array('encrypt', 'form_validation'));
		$this->is_logged_in();
	}
        function index()
        {

            $data['purchasefees'] = $this->admin_model->get_fees('purchasefee');
            $data['salefees'] = $this->admin_model->get_fees('salefee');
            $data['stampfees'] = $this->admin_model->get_fees('stampfee');
            $data['landfees'] = $this->admin_model->get_fees('landfee');
            $data['variables'] = $this->admin_model->get_variables();

            $data['title'] = "Calculator Admin";
            $data['main'] = "admin/fees";
            $this->load->vars($data);
            $this->load->view('template/ker');

        }

        function add_fee()
        {

            $this->admin_model->add_fee();
            redirect('admin');
        }

        function delete_fee($id)
        {

          $this->admin_model->delete_fee($id);
           redirect('admin');
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