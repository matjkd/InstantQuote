<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Quote extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('content_model');
        $this->load->library('user_agent');
    }

    /**
     *
     */
    public function index() {
        $data['title'] = "Kenneth Elliott and Rowe Conveyancing Quote Calculator";
        $data['main'] = "global/mainpage";
        $this->load->vars($data);
        $this->load->view('template/ker');
    }

   
    function onscreen() {

 		
        /* form validation */
        if ($this->input->post('buying_price') == NULL && $this->input->post('selling_price') == NULL) {

            $data['main_content'] = "quote/noresults";
        } else {
            $data['main_content'] = "quote/results";
        }

		//clean buying price
		$buying_price = str_replace(',', '', $this->input->post('buying_price'));
		
		//clean selling price
		$selling_price = str_replace(',', '', $this->input->post('selling_price'));
		
        /* Set the main inputs here */
        $purchasecost = $buying_price;
        $leasehold = $this->input->post('leasehold');
        $mortgage = $this->input->post('mortgage');
        $salecost = $selling_price;
        $leaseholdsale = $this->input->post('leaseholdsale');
        $purchasefee = $this->input->post('buying_fees');
        $salefee = $this->input->post('selling_fees');
	$firsttime = $this->input->post('firsttime');

        /* calculate here */
        
       $this->conveyquote->quote($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee, $firsttime);

        if (isset($this->alertmessage)) {
            $data['message'] = $this->alertmessage;
        }
        $this->load->vars($data);
		
        $this->load->view('template/bootstrap');
    }

    function printout() {

	//clean buying price
		$buying_price = str_replace(',', '', $this->input->post('buying_price'));
		
		//clean selling price
		$selling_price = str_replace(',', '', $this->input->post('selling_price'));

        /* Set the main inputs here */
        $purchasecost = $buying_price;
        $leasehold = $this->input->post('leasehold');
        $mortgage = $this->input->post('mortgage');
        $salecost = $selling_price;
        $leaseholdsale = $this->input->post('leaseholdsale');
        $purchasefee = $this->input->post('buying_fees');
        $salefee = $this->input->post('selling_fees');
	$firsttime = $this->input->post('firsttime');

        /* Get terms */
        $data['content'] = $this->content_model->get_content('terms');
        foreach ($data['content'] as $terms):

            $data['terms'] = $terms->content;

        endforeach;
        /* calculate here */
        $this->conveyquote->quote($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee, $firsttime);
        $this->load->helper(array('dompdf', 'file'));

        $data['main'] = "quote/results";
        $this->load->vars($data);
        $stream = TRUE;
		$now = time();

		$gmt = unix_to_human($now);
        $html = $this->load->view('template/pdf', $data, true);
		//echo $html;
        pdf_create($html, 'quote'.$gmt.'', $stream);
    }

    function callback() {
        //Validate Form here
        $this->form_validation->set_rules('phone2', 'Phone', 'trim|required');
        $this->form_validation->set_rules('firstname2', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname2', 'Lastname', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            $this->alertmessage = validation_errors();
            redirect('/', 'refresh');
        } else {

            $phone = $this->input->post('phone2');
            $name = $this->input->post('firstname2') . " " . $this->input->post('lastname2');

            $config_email = $this->config_email;

            $config_company_name = $this->config_company_name;

            $this->postmark->from($config_email, $config_company_name);
            $this->postmark->to($config_email);
   $this->postmark->cc('mat@redstudio.co.uk');
            $this->postmark->subject('Call Back Request');


            $this->postmark->message_html("
                      $name has requested a callback fron the Conveyancing site.
                        <br/><br/>
                        Tel: $phone
                       
                       
                        
                        ");




            $this->postmark->send();
            $this->session->set_flashdata('message', 'Email Sent');
            $this->alertmessage = 'Email has been sent';
            redirect('/');
        }
    }

    function emailquote() {

        //Validate Form here
        $this->form_validation->set_rules('email2', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('firstname2', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname2', 'Lastname', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            $this->alertmessage = validation_errors();
            $this->onscreen();
        } else {
        	
        		//clean buying price
				$buying_price = str_replace(',', '', $this->input->post('buying_price'));
				
				//clean selling price
				$selling_price = str_replace(',', '', $this->input->post('selling_price'));
        	

            /* Set the main inputs here */
            $purchasecost = $buying_price;
            $leasehold = $this->input->post('leasehold');
            $mortgage = $this->input->post('mortgage');
            $salecost = $selling_price;
            $leaseholdsale = $this->input->post('leaseholdsale');
            $purchasefee = $this->input->post('buying_fees');
            $salefee = $this->input->post('selling_fees');
	    $firsttime = $this->input->post('firsttime');

            /* Get terms */
            $data['content'] = $this->content_model->get_content('terms');

            foreach ($data['content'] as $terms):

                $data['terms'] = $terms->content;

            endforeach;


            /* calculate here  */
            $this->conveyquote->quote($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee, $firsttime);
            $this->load->helper(array('dompdf', 'file'));
            $this->load->helper('file');

            $data['main'] = "quote/results";
            $this->load->vars($data);
            $stream = FALSE;
			
            $html = $this->load->view('template/pdf', $data, true);
            $data1 = pdf_create($html, 'quote', $stream);


            write_file('./images/reports/quote.pdf', $data1);



            //Set email address to send back to company
            $level = $this->session->userdata('role');

            if ($level == 1) {
                $adminemail = $this->session->userdata('email');
            } else {
                $adminemail = "mbs@ker.co.uk";
            }

            $clientemail = $this->input->post('email2');
            $name = $this->input->post('firstname2') . " " . $this->input->post('lastname2');

            $this->load->library('postmark');


            $config_email = $this->config_email;
            $config_company_name = $this->config_company_name;

            $this->postmark->from($config_email, $config_company_name);
			$this->postmark->reply_to($adminemail);
            $this->postmark->to($clientemail);
            $this->postmark->cc($adminemail);
            $this->postmark->subject('Your Quote');

            //get content for the email
            $email['content'] = $this->content_model->get_content('yourquote');
            $this->load->vars($email);
            $msg = $this->load->view('template/email', $email, true);
			
            $this->postmark->message_html("
                        hi $name,
                        <br/><br/>
                        $msg
                       
                       
                        
                        ");


            $this->postmark->attach('./images/reports/quote.pdf');

            $this->postmark->send();
            delete_files('./images/reports/');
            //add quote to database
            //$this->quote_model->save_quote();

            $this->session->set_flashdata('message', 'Email Sent');
            $this->alertmessage = 'Email has been sent..';
            $this->onscreen();
        }
    }

    /**
     * 
     */
    function instruct() {
        //Validate Form here
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required|prep_for_form');
        $this->form_validation->set_rules('comments', 'comments', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            $this->alertmessage = validation_errors();
            $this->onscreen();
        } else {

            /* Set the main inputs here */
            $purchasecost = $this->input->post('buying_price');
            $leasehold = $this->input->post('leasehold');
            $mortgage = $this->input->post('mortgage');
            $salecost = $this->input->post('selling_price');
            $leaseholdsale = $this->input->post('leaseholdsale');
            $purchasefee = $this->input->post('buying_fees');
            $salefee = $this->input->post('selling_fees');
		$firsttime = $this->input->post('firsttime');

            /* Get terms */
            $data['content'] = $this->content_model->get_content('terms');
            foreach ($data['content'] as $terms):

                $data['terms'] = $terms->content;

            endforeach;
            /* calculate here  */
            $this->conveyquote->quote($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee, $firsttime);
            $this->load->helper(array('dompdf', 'file'));
            $this->load->helper('file');

            $data['main'] = "quote/results";
            $this->load->vars($data);
            $stream = FALSE;
            $html = $this->load->view('template/pdf', $data, true);
            $data1 = pdf_create($html, 'quote', $stream);


            write_file('./images/reports/quote.pdf', $data1);




            //TEMP
            $email_address = "test@matsadler.com";

            $name = $this->input->post('firstname') . " " . $this->input->post('lastname');
            $comments = $this->input->post('comments');
            $address = set_value('address');
            $this->load->library('postmark');


            $config_email = $this->config_email;
            $config_company_name = $this->config_company_name;

            $this->postmark->from($config_email, $config_company_name);
            $this->postmark->to($email_address);
            $this->postmark->cc($config_email);
            $this->postmark->subject('Your Quote');

            //get content for the email
            $email['content'] = $this->content_model->get_content('instruct');
            $this->load->vars($email);
            $msg = $this->load->view('template/email', $email, true);
            $this->postmark->message_html("
                        hi $name,
                        <br/><br/>
                        $msg
                        <br/><br/>
                    Your Address: $address<br/><br/>
                        Your Comments: $comments
                        
                        ");


            $this->postmark->attach('./images/reports/quote.pdf');

            $this->postmark->send();
            delete_files('./images/reports/');


            $this->session->set_flashdata('message', 'Email Sent');
            $this->alertmessage = 'Email has been sent';
            $this->onscreen();
        }
    }

    function pdf() {
        $this->load->helper(array('dompdf', 'file'));
        // page info here, db calls, etc.
        $html = $this->load->view('controller/viewfile', $data, true);
        //  pdf_create($html, 'filename');

        $data = pdf_create($html, '', false);
        write_file('name', $data);
        //if you want to write it to disk and/or send it as an attachment
    }

}

