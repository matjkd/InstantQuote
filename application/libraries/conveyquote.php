<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConveyQuote {

    public function quote($purchase=0, $leasehold=0, $mortgage=0, $salecost=0, $leaseholdsale=0, $purchasefee=0, $salefee=0, $firstbuyer=0, $localsearch=0)
    {
         /* Add form validation here */
         $CI =& get_instance();
$CI->load->model('admin_model');

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

 		$data['purchase_fee1'] = $purchasefee;
        $data['sale_fee1'] = $salefee;
	    $data['firsttime'] = $firstbuyer;
echo "test2 ".$data['firsttime'].$purchase;
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

if($localsearch == 0) {
            $data['localsearch'] = $row->localsearch;
            }
else {
	$data['localsearch'] = $localsearch;
}
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
			
			/* New Stamp Duty */
			
			$newstamp = $CI->admin_model->get_stamp_fees($data['purchasecost']);
			$data['newStamp'] = 0;
			$oldhigh = 0;
			//echo $data['purchasecost'];
			//echo "<pre>";
			//print_r($newstamp);
			//echo "</pre>";
			$counter = 0;
			foreach($newstamp as $row):
				$counter = $counter + 1;
				if($data['purchasecost'] > $row->high){
					$remain = $row->high - $oldhigh;
					
					$fee = ($remain / 100) * $row->fee;
					//echo "$fee<br/>";
					$data['newStamp'] = $data['newStamp'] + $fee;
					$oldhigh = $row->high;
				}
				
				
						
			endforeach;
			
			foreach($newstamp as $row):
				
				
				if($data['purchasecost'] <= $row->high){
					$remain =  $data['purchasecost'] - $row->low;
					$fee = ($remain / 100) * $row->fee;
					//echo "er $fee<br/>";
					$data['newStamp'] = $data['newStamp'] + $fee;
					$er = $remain;
					//echo "<br/><br/>".$er;
				}
				$data['stamp_fee'] = $data['newStamp'];
						
			endforeach;
	
		/* First time buyer discount 
		if($data['firsttime']==0)){
		$firsttimediscount = 0;
		}
		else 
		{ */
		if($data['purchasecost'] > 500000){
		$firsttimediscount = 0;
		}
		if($data['purchasecost'] <= 500000){
		$firsttimediscount = 5000;
		}
		if($data['purchasecost'] <= 300000){
		$firsttimediscount = $data['newstamp'];
		}
		
		
		$data['firsttimediscount'] = $firsttimediscount;
		/* end first time discount */
		
            /* TOTAL PURCHASE */
            $data['feevat'] = ($data['purchase_fee'] + $data['banktransfer_purchase'] + $data['mortgagefee'] + $data['leaseholdfee'] + $data['stamp_duty_forms']) * $vat;
            $data['feevat'] = number_format($data['feevat'], 2, '.', '');
            $data['totalpurchase'] = $data['purchase_fee'] + $data['leaseholdfee'] + $data['feevat'] + $data['land_fee'] + $data['newStamp'] + $data['banktransfer_purchase'] + $data['stamp_duty_forms'] + $data['mortgagefee'] + $data['landcharge'] + $data['localsearch'] + $data['priority_search'];
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
