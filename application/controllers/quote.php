<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends CI_Controller {

    function __construct()
	{
		parent::__construct();
                $this->load->model('admin_model');

	}

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

        public function calculate()
        {
            /* Add form validation here*/


            /* End of Form validateion */

            /* Page Title */
            $data['title'] = "Kenneth Elliott and Rowe Conveyancing Quote Calculator";

            /* Set the main inputs here*/
             $data['purchasecost'] = $this->input->post('buying_price');
             $data['leasehold'] = $this->input->post('leasehold');
             $data['mortgage'] = $this->input->post('mortgage');

              $data['salecost'] = $this->input->post('selling_price');
              $data['leaseholdsale'] = $this->input->post('leaseholdsale');

            
              
              /* Get Variables */
              
              $data['variables'] = $this->admin_model->get_variables();
              foreach($data['variables'] as $row):
                  //leasehold fee
                  if($data['leasehold'] == 'leasehold'){
                      $data['leaseholdfee'] = $row->leasehold_purchase;
                  }
                  else
                  {
                        $data['leaseholdfee'] = 0;
                  }

                  //mortgage fee
                   if($data['mortgage'] == 1){
                      $data['mortgagefee'] = $row->mortgage_fee;
                  }
                  else
                  {
                        $data['mortgagefee'] = 0;
                  }

                    //leasehold sale fee
                  if($data['leaseholdsale'] == 'leasehold'){
                      $data['leaseholdsalefee'] = $row->leasehold_sale;
                  }
                  else
                  {
                        $data['leaseholdsalefee'] = 0;
                  }


              endforeach;



              /*purchase fee*/
              $data['purchase_fee'] = $this->admin_model->calculate_fee('purchasefee', $data['purchasecost']);

               /*land registry fee*/
              $data['land_fee'] = $this->admin_model->calculate_fee('landfee', $data['purchasecost']);

                 /*sale fee*/
              $data['sale_fee'] = $this->admin_model->calculate_fee('salefee', $data['salecost']);

              /*Stamp Duty*/
              $stampduty =  $this->admin_model->calculate_fee('stampfee', $data['purchasecost']);
              $stamp1 =  ((($data['purchasecost']/100)*$stampduty)/5)+0.99;
	      $data['stamp_fee'] = intval($stamp1)*5;

            $data['main'] = "quote/results";
            $this->load->vars($data);
            $this->load->view('template/ker');
        }

        
}

/* End of file quote.php */
/* Location: ./application/controllers/quote.php */