<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Local extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->model('content_model');
    }
	
	function index($town) {
		echo $town;
	}
	
	function conveyancing($town) {
		$data['menu'] = $town;
		  $data['content'] = $this->content_model->get_content($data['menu']);

        foreach ($data['content'] as $row):

            $data['title'] = $row->title;

        endforeach;

        $data['main'] = 'global/mainpage';
        $data['slideshow'] = 'header/slideshow';
        $this->load->vars($data);
        $this->load->view('template/ker');
	}
	
}
