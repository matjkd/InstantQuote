<?php
class Admin extends CI_Controller

{
function __construct()
	{
		parent::__construct();
                $this->load->model('admin_model');
                 $this->load->model('content_model');
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

        function edit_variable()
        {
            $data['id'] = $this->input->post('id');
            $data['field'] = $this->input->post('elementid');
            $data['value'] = $this->input->post('value');
            $this->admin_model->edit_variable($data['id'], $data['field'], $data['value']);

            $update = $this->input->post('value');


           


		$this->output->set_output($update);
        }
        
        function content()
	{
	if(($this->uri->segment(3))<1)
			{
				$id = 1;
			}
		else
			{
				$id = $this->uri->segment(3);
			}
		$data['content'] =	$this->content_model->get_content($id);
		$data['main'] = "pages/dynamic";
		$data['edit'] = "admin/edit/$id";
		$this->load->vars($data);
		  $this->load->view('template/ker');
		
		
		
	}
	function edit()
	{
		
		
		$id = $this->uri->segment(3);
		$data['menu'] = $id;
		$data['page'] = $id;
		$data['content'] =	$this->content_model->get_content($id);
		
		$data['main'] = "admin/edit_content";
		
		if($data['menu'] == 'services')
			{
				$data['service_groups'] = $this->content_model->get_service_groups();
				$data['services'] = $this->content_model->get_services();
			} 
	
		$this->load->vars($data);
		  $this->load->view('template/ker');
	}
	function edit_content()
	{
		$id = $this->uri->segment(3);
		$this->content_model->edit_content($id);
		
		redirect ("admin/edit/$id");
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