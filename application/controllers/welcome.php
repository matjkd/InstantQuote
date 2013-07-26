<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

    public function index() {
    	$this->session->keep_flashdata('message');
        redirect('/home');
    }

    function main() {
        $segment_active = $this->uri->segment(3);
        if ($segment_active != NULL) {
            $data['menu'] = $this->uri->segment(3);
        } else {


            if (($this->uri->segment(1)) == NULL) {
                $data['menu'] = 'home';
            } else {
                $data['menu'] = $this->uri->segment(1);
            }
        }

        $data['content'] = $this->content_model->get_content($data['menu']);
		$data['local'] = $this->content_model->get_content_by_category('local');
		$data['random'] = $this->content_model->get_random_content('article');
		
        foreach ($data['content'] as $row):

            $data['title'] = $row->title;
			$data['main_content'] = $row->main_content;
			$data['meta_desc'] = $row->meta_desc;
			$data['sale_price'] = $row->sale_price;
			$data['sale_price_leasehold'] = $row->sale_price_leasehold;

        endforeach;
		
		if($data['sale_price'] > 0) {
			
			$data['free_sale'] = $this->conveyquote->quote($data['sale_price'], $leasehold='freehold', $mortgage=0, $data['sale_price'], $leaseholdsale='freehold', $purchasefee=0, $salefee=0);
			
		}
if($data['sale_price_leasehold'] > 0) {
			
			$data['lease_sale'] = $this->conveyquote->quote($data['sale_price_leasehold'], $leasehold='leasehold', $mortgage=0, $data['sale_price_leasehold'], $leaseholdsale='leasehold', $purchasefee=0, $salefee=0);
			
		}
		
		
		if($this->session->flashdata('message')) {
            $data['message'] = $this->session->flashdata('message');
		}

        $data['main'] = 'global/mainpage';
        $data['slideshow'] = 'header/slideshow';
        $this->load->vars($data);
        $this->load->view('template/bootstrap');
    }
	
	function testing() {
		 $segment_active = $this->uri->segment(3);
        if ($segment_active != NULL) {
            $data['menu'] = $this->uri->segment(3);
        } else {


            if (($this->uri->segment(1)) == NULL) {
                $data['menu'] = 'home';
            } else {
                $data['menu'] = $this->uri->segment(1);
            }
        }

        $data['content'] = $this->content_model->get_content($data['menu']);

        foreach ($data['content'] as $row):

            $data['title'] = $row->title;

        endforeach;

        $data['main'] = 'global/mainpage';
        $data['slideshow'] = 'header/slideshow';
        $this->load->vars($data);
		 $this->load->view('template/bootstrap');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */