<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends CI_Controller {

	/**
	 *
	 */
	public function index()
	{
            $data['title'] = "Kenneth Elliott and Rowe Conveyancing Quote Calculator";
            $data['main'] = "quote/main";
            $this->load->vars($data);
            $this->load->view('template/ker');
	}

        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */