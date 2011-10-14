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
            $data['main'] = "global/mainpage";
            $this->load->vars($data);
            $this->load->view('template/ker');
	}

        public function calculate($purchase, $leasehold, $mortgage, $salecost, $leaseholdsale)
        {
            /* Add form validation here*/


            /* End of Form validateion */
            $vat = 0.2;
            /* Page Title */
            $data['title'] = "Kenneth Elliott and Rowe Conveyancing Quote Calculator";

            $data['purchasecost'] = $purchase;
             $data['leasehold'] = $leasehold;
             $data['mortgage'] = $mortgage;

              $data['salecost'] = $salecost;
              $data['leaseholdsale'] = $leaseholdsale;
         
            
              
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
                   if($data['mortgage'] == 1 && $data['purchasecost'] !=NULL){
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

                  
                  $data['landcharge'] = $row->landcharge;
                  
                   $data['localsearch'] = $row->localsearch;
                     $data['priority_search'] = $row->priority_search;

                   if($data['purchasecost'] != NULL)
                   {
                   $data['banktransfer_purchase'] = $row->banktransfer_purchase;

                   }
                   else
                   {
                   $data['banktransfer_purchase'] = NULL;
                   }

                     if($data['salecost'] != NULL)
                   {
                   $data['banktransfer_sale'] = $row->banktransfer_purchase;

                   /*office copy*/
                     $data['office_copy'] = $row->office_copy;
                   }
                   else
                   {
                   $data['banktransfer_sale'] = NULL;
                   /*office copy*/
                   $data['office_copy'] = NULL;
                   }
              endforeach;


               if($data['purchasecost'] != NULL){
              /*purchase fee*/
              $data['purchase_fee'] = $this->admin_model->calculate_fee('purchasefee', $data['purchasecost']);

               /*land registry fee*/
              $data['land_fee'] = $this->admin_model->calculate_fee('landfee', $data['purchasecost']);

                 /*Stamp Duty*/
              $stampduty =  $this->admin_model->calculate_fee('stampfee', $data['purchasecost']);
              $stamp1 =  ((($data['purchasecost']/100)*$stampduty)/5)+0.99;
	      $data['stamp_fee'] = intval($stamp1)*5;

              /*TOTAL PURCHASE*/
              $data['feevat'] =  ($data['purchase_fee']+$data['banktransfer_purchase']+$data['mortgagefee']+$data['leaseholdfee'])*$vat;
               $data['feevat'] = number_format($data['feevat'], 2, '.', '');
              $data['totalpurchase'] =  $data['purchase_fee']+$data['leaseholdfee']+$data['feevat']+$data['land_fee']+$data['stamp_fee']+$data['banktransfer_purchase']+$data['mortgagefee']+$data['landcharge']+$data['localsearch']+$data['priority_search'];
              $data['totalpurchase'] = number_format($data['totalpurchase'], 2, '.', '');

              $purchasecount = 1;

               }
               else
               {
                    $data['totalpurchase'] =0;
                     $purchasecount = 0;
               }

                if($data['salecost'] != NULL){
                 /*sale fee*/
                $data['sale_fee'] = $this->admin_model->calculate_fee('salefee', $data['salecost']);

              /*TOTAL SALE*/
              $data['salevat'] = ($data['sale_fee']+$data['banktransfer_sale']+$data['leaseholdsalefee'])*$vat;
               $data['salevat'] = number_format($data['salevat'], 2, '.', '');
              $data['totalsale'] = $data['sale_fee']+$data['leaseholdsalefee']+$data['salevat']+$data['office_copy']+$data['banktransfer_sale'];
               $data['totalsale'] = number_format($data['totalsale'], 2, '.', '');
                $salecount = 1;
                }
                else
                {
                     $data['totalsale'] = 0;
                     $salecount = 0;
                }
                $data['countfees'] = $salecount+$purchasecount;
                 $this->load->vars($data);
                return;
           
        }

        function onscreen()
        {
            /* Set the main inputs here*/
             $purchasecost = $this->input->post('buying_price');
             $leasehold = $this->input->post('leasehold');
             $mortgage = $this->input->post('mortgage');
             $salecost = $this->input->post('selling_price');
             $leaseholdsale = $this->input->post('leaseholdsale');

             /*calculate here*/
            $this->calculate($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale);

            $data['main'] = "quote/results";
            $this->load->vars($data);
            $this->load->view('template/ker');
        }
        
           function printout()
        {
            /* Set the main inputs here*/
             $purchasecost = $this->input->post('buying_price');
             $leasehold = $this->input->post('leasehold');
             $mortgage = $this->input->post('mortgage');
             $salecost = $this->input->post('selling_price');
             $leaseholdsale = $this->input->post('leaseholdsale');

             /*calculate here*/
            $this->calculate($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale);
            $this->load->helper(array('dompdf', 'file'));

          $data['main'] = "quote/results";
          $this->load->vars($data);
            	$stream = TRUE;
		$html = $this->load->view('template/pdf', $data, true);
		pdf_create($html, 'quote', $stream);
        }

        function pdf()
        {
             $this->load->helper(array('dompdf', 'file'));
             // page info here, db calls, etc.
             $html = $this->load->view('controller/viewfile', $data, true);
           //  pdf_create($html, 'filename');

             $data = pdf_create($html, '', false);
             write_file('name', $data);
             //if you want to write it to disk and/or send it as an attachment
        }

        
}

/* End of file quote.php */
/* Location: ./application/controllers/quote.php */