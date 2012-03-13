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

    public function calculate($purchase, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee) {
        /* Add form validation here */


        /* End of Form validation */
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
        foreach ($data['variables'] as $row):
            //leasehold fee
            if ($data['leasehold'] == 'leasehold') {
                $data['leaseholdfee'] = $row->leasehold_purchase;
            } else {
                $data['leaseholdfee'] = 0;
            }

            //mortgage fee
            if ($data['mortgage'] == 1 && $data['purchasecost'] != NULL) {
                $data['mortgagefee'] = $row->mortgage_fee;
            } else {
                $data['mortgagefee'] = 0;
            }

            //leasehold sale fee
            if ($data['leaseholdsale'] == 'leasehold') {
                $data['leaseholdsalefee'] = $row->leasehold_sale;
            } else {
                $data['leaseholdsalefee'] = 0;
            }


            $data['landcharge'] = $row->landcharge;

            $data['localsearch'] = $row->localsearch;
            $data['priority_search'] = $row->priority_search;

            if ($data['purchasecost'] != NULL) {
                $data['banktransfer_purchase'] = $row->banktransfer_purchase;
            } else {
                $data['banktransfer_purchase'] = NULL;
            }

            if ($data['salecost'] != NULL) {
                $data['banktransfer_sale'] = $row->banktransfer_purchase;

                /* office copy */
                $data['office_copy'] = $row->office_copy;
            } else {
                $data['banktransfer_sale'] = NULL;
                /* office copy */
                $data['office_copy'] = NULL;
            }
        endforeach;


        if ($data['purchasecost'] != NULL) {
            /* purchase fee */
            if ($purchasefee > 0) {
                $data['purchase_fee'] = $purchasefee;
                $data['leaseholdfee'] = 0;
            } else {
                $data['purchase_fee'] = $this->admin_model->calculate_fee('purchasefee', $data['purchasecost']);
            }
            /* land registry fee */
            $data['land_fee'] = $this->admin_model->calculate_fee('landfee', $data['purchasecost']);

            /* Stamp Duty */
            $stampduty = $this->admin_model->calculate_fee('stampfee', $data['purchasecost']);
            $stamp1 = ((($data['purchasecost'] / 100) * $stampduty) / 5) + 0.99;
            $data['stamp_fee'] = intval($stamp1) * 5;
            if ($data['stamp_fee'] > 0) {
                $data['stamp_duty_forms'] = $row->stamp_duty_forms;
            } else {
                $data['stamp_duty_forms'] = 0;
            }

            /* TOTAL PURCHASE */
            $data['feevat'] = ($data['purchase_fee'] + $data['banktransfer_purchase'] + $data['mortgagefee'] + $data['leaseholdfee'] + $data['stamp_duty_forms']) * $vat;
            $data['feevat'] = number_format($data['feevat'], 2, '.', '');
            $data['totalpurchase'] = $data['purchase_fee'] + $data['leaseholdfee'] + $data['feevat'] + $data['land_fee'] + $data['stamp_fee'] + $data['banktransfer_purchase'] + $data['stamp_duty_forms'] + $data['mortgagefee'] + $data['landcharge'] + $data['localsearch'] + $data['priority_search'];
            $data['totalpurchase'] = number_format($data['totalpurchase'], 2, '.', '');

            $purchasecount = 1;
        } else {
            $data['totalpurchase'] = 0;
            $purchasecount = 0;
        }

        if ($data['salecost'] != NULL) {
            /* sale fee */

            if ($salefee > 0) {
                $data['sale_fee'] = $salefee;
                $data['leaseholdsalefee'] = 0;
            } else {
                $data['sale_fee'] = $this->admin_model->calculate_fee('salefee', $data['salecost']);
            }
            /* TOTAL SALE */
            $data['salevat'] = ($data['sale_fee'] + $data['banktransfer_sale'] + $data['leaseholdsalefee']) * $vat;
            $data['salevat'] = number_format($data['salevat'], 2, '.', '');
            $data['totalsale'] = $data['sale_fee'] + $data['leaseholdsalefee'] + $data['salevat'] + $data['office_copy'] + $data['banktransfer_sale'];
            $data['totalsale'] = number_format($data['totalsale'], 2, '.', '');
            $salecount = 1;
        } else {
            $data['totalsale'] = 0;
            $salecount = 0;
        }
        $data['countfees'] = $salecount + $purchasecount;

        $datestring = " %d/%m/%Y - %h:%i %a";
        $time = time();




        $data['datetime'] = mdate($datestring, $time);
        $this->load->vars($data);
        return;
    }

    function onscreen() {

        /* form validation */
        if ($this->input->post('buying_price') == NULL && $this->input->post('selling_price') == NULL) {

            $data['main'] = "quote/noresults";
        } else {
            $data['main'] = "quote/results";
        }
        /* Set the main inputs here */
        $purchasecost = $this->input->post('buying_price');
        $leasehold = $this->input->post('leasehold');
        $mortgage = $this->input->post('mortgage');
        $salecost = $this->input->post('selling_price');
        $leaseholdsale = $this->input->post('leaseholdsale');
        $purchasefee = $this->input->post('buying_fees');
        $salefee = $this->input->post('selling_fees');

        /* calculate here */
        $this->calculate($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee);

        if (isset($this->alertmessage)) {
            $data['message'] = $this->alertmessage;
        }
        $this->load->vars($data);
        $this->load->view('template/ker');
    }

    function printout() {



        /* Set the main inputs here */
        $purchasecost = $this->input->post('buying_price');
        $leasehold = $this->input->post('leasehold');
        $mortgage = $this->input->post('mortgage');
        $salecost = $this->input->post('selling_price');
        $leaseholdsale = $this->input->post('leaseholdsale');
        $purchasefee = $this->input->post('buying_fees');
        $salefee = $this->input->post('selling_fees');

        /* Get terms */
        $data['content'] = $this->content_model->get_content('terms');
        foreach ($data['content'] as $terms):

            $data['terms'] = $terms->content;

        endforeach;
        /* calculate here */
        $this->calculate($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee);
        $this->load->helper(array('dompdf', 'file'));

        $data['main'] = "quote/results";
        $this->load->vars($data);
        $stream = TRUE;
        $html = $this->load->view('template/pdf', $data, true);
        pdf_create($html, 'quote', $stream);
    }

    function callback() {
        //Validate Form here
        $this->form_validation->set_rules('phone2', 'Phone', 'trim|required');
        $this->form_validation->set_rules('firstname2', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname2', 'Lastname', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            $this->alertmessage = validation_errors();
            $this->onscreen();
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
            $this->alertmessage = 'Email has been sent..';
            $this->onscreen();
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

            /* Set the main inputs here */
            $purchasecost = $this->input->post('buying_price');
            $leasehold = $this->input->post('leasehold');
            $mortgage = $this->input->post('mortgage');
            $salecost = $this->input->post('selling_price');
            $leaseholdsale = $this->input->post('leaseholdsale');
            $purchasefee = $this->input->post('buying_fees');
            $salefee = $this->input->post('selling_fees');

            /* Get terms */
            $data['content'] = $this->content_model->get_content('terms');

            foreach ($data['content'] as $terms):

                $data['terms'] = $terms->content;

            endforeach;


            /* calculate here  */
            $this->calculate($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee);
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
                $adminemail = "test@matsadler.com";
            }

            $clientemail = $this->input->post('email2');
            $name = $this->input->post('firstname2') . " " . $this->input->post('lastname2');

            $this->load->library('postmark');


            $config_email = $this->config_email;
            $config_company_name = $this->config_company_name;

            $this->postmark->from($config_email, $config_company_name);
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

            /* Get terms */
            $data['content'] = $this->content_model->get_content('terms');
            foreach ($data['content'] as $terms):

                $data['terms'] = $terms->content;

            endforeach;
            /* calculate here  */
            $this->calculate($purchasecost, $leasehold, $mortgage, $salecost, $leaseholdsale, $purchasefee, $salefee);
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

