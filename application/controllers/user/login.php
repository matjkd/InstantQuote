<?php
class Login extends CI_Controller

{
function __construct()
	{
		parent::__construct();
		
		$this->load->library(array('encrypt', 'form_validation'));
		
	}
	
	
	function index()
	{
		$this->is_logged_in();
		$data['title'] = 'Login';
                $data['main'] = 'login/create_user';
		$this->load->vars($data);
		$this->load->view('template/ker');
	}


        function _prep_password($password)
	{
	    return sha1($password.$this->config->item('encryption_key'));
	}

	function validate_credentials()
	{		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			
			
			$this->db->where('username', $this->input->post('username'));
			$query2 = $this->db->get('users');
			if($query2->num_rows == 1)
			{
				foreach($query2->result() as $row)
					{
						$role_level = $row->level;
						$user_id = $row->user_id;
						$user_firstname = $row->firstname;
						$user_lastname = $row->lastname;
						$company_id = $row->company_id;
                                                                                                $email = $row->email;
					}
			}
			
			$data = array(
				'username' => $this->input->post('username'),
				'role' => $role_level,
				'user_id' => $user_id,
				'company_id' => $company_id,
				'firstname' => $user_firstname,
				'lastname' => $user_lastname,
                                                                'email' => $email,
				'is_logged_in' => true
			
				
			);
			
			$this->session->set_userdata($data);
			$this->session->set_flashdata('conf_msg', "welcome.");
			redirect('welcome/');
		}
		else // incorrect username or password
		{
			$data['title'] = 'Login Failed';
			$data['main'] = 'user/index';
			$this->load->vars($data);
			$this->load->view('template/ker');
			
			
		}
	}	
	
	function register()
	{
		$data['main'] = '/user/register';
		$this->load->vars($data);
		$this->load->view('template/ker');
		//$this->template->load('template', 'user/register');
	}
	
	function create_member()
	{
		
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('firstname', 'Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		//$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if($this->form_validation->run() == FALSE)
		{
		$data['main'] = 'login/create_user';
		$this->load->vars($data);
		$this->load->view('template/ker');
			//$this->template->load('template', 'user/register');
		}
		
		else
		{			
			$this->load->model('membership_model');

			
			if($query = $this->membership_model->create_member())
			{
				$data['main'] = 'user/signup_successful';
                                $this->load->vars($data);
                                $this->load->view('template/ker');
				//$this->template->load('template', 'user/signup_successful');
			}
			else
			{
				$data['main'] = 'user/register';
		$this->load->vars($data);
		$this->load->view('template/ker');
				//$this->template->load('template', 'user/register');		
			}
		}
		
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			redirect($this->uri->uri_string());
		}		
		$this->index();
	}
	
	
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if($is_logged_in==NULL)
		{
                //    echo $is_logged_in;
			redirect('/');
		}		
	}	

}


	

/* End of file login.php */
/* Location: ./system/application/controllers/user/login.php */