<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConveyQuote {

    public function quote($purchase=0, $leasehold=0, $mortgage=0, $salecost=0, $leaseholdsale=0, $purchasefee=0, $salefee=0)
    {
         /* Add form validation here */
         $CI =& get_instance();
$CI->load->model('admin_model');

        /* End of Form validation */
        $vat = 0.2;
        /* Page Title */
        $data['title'] = "Kenneth Elliott and Rowe Conveyancing Quote Calculator";

        $data['purchasecost'] = $purchase;
        $data['leasehold'] = $leasehold;
        $data['mortgage'] = $mortgage;

        $data['salecost'] = $salecost;
        $data['leaseholdsale'] = $leaseholdsale;

 		$data['purchase_fee1'] = $purchasefee;
        $data['sale_fee1'] = $salefee;

        /* Get Variables */

        $data['variables'] = $CI->admin_model->get_variables();
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
                $data['purchase_fee'] = $CI->admin_model->calculate_fee('purchasefee', $data['purchasecost']);
            }
            /* land registry fee */
            $data['land_fee'] = $CI->admin_model->calculate_fee('landfee', $data['purchasecost']);

            /* Stamp Duty */
            $stampduty = $CI->admin_model->calculate_fee('stampfee', $data['purchasecost']);
            $stamp1 = ((($data['purchasecost'] / 100) * $stampduty) / 5) + 0.99;
            $data['stamp_fee'] = intval($stamp1) * 5;
            if ($data['purchasecost'] > 39999) {
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
                $data['sale_fee'] = $CI->admin_model->calculate_fee('salefee', $data['salecost']);
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
        $CI->load->vars($data);
		
		$CI->totalsale = $data['totalsale'];
		
        return $data;
    }
}

/* End of file ConveyQuote.php */