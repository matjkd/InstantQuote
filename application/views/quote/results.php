<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if ($countfees <= 1) {
    $feeclass = "singlefees";
    $noright = "";
    $grandtotal = $totalpurchase + $totalsale;
    $grandtotal = number_format($grandtotal, 2, '.', '');
   if(isset($stamp_fee)) {
    $grandtotalnostamp = number_format(($grandtotal - $stamp_fee), 2, '.', '');
   }
}
if ($countfees == 2) {
    $feeclass = "fees";
    $noright = "noright";
    $grandtotal = $totalpurchase + $totalsale;
    $grandtotal = number_format($grandtotal, 2, '.', '');
      if (isset($stamp_fee)) {
        $grandtotalnostamp = number_format(($grandtotal - $stamp_fee), 2, '.', '');
    }
}
?>
<?php
/*
 * Purchase Fees
 */

if ($purchasecost != NULL) {
    ?>
    <div class="<?= $feeclass ?>">
        <h1> <img src="<?= base_url() ?>images/titles/fees_for_your_purchase.png" alt="fees for your purchase"/></h1>



        <div class="results">
            <h2>Based on <?= $leasehold ?> purchase of £<?= $purchasecost ?></h2>

            <strong>Our Fees</strong><br/>
            <div class="resultlabel">for your transaction</div>
            <div class="resultvalue">   £<?= $purchase_fee + $leaseholdfee ?></div>


            <div class="resultlabel">for sending bank transfers</div>
            <div class="resultvalue">£<?= $banktransfer_purchase ?></div>


            <div class="resultlabel">for acting for your mortgage lender</div>
            <div class="resultvalue">£<?= $mortgagefee ?></div>

            <div class="resultlabel">for completing stamp duty forms</div>
            <div class="resultvalue">£<?= $stamp_duty_forms ?></div>

            <div class="resultlabel">VAT </div>
            <div class="resultvalue">£<?= $feevat ?></div>

            <div class="results">
                <strong>Other Costs.</strong><br/>


                <div class="resultlabel">Stamp Duty Cost</div>
                <div class="resultvalue">£<?= $newStamp - $firsttimebuyer ?></div>
                
                <div class="resultlabel">First Time Buyer Discount.</div>
                <div class="resultvalue">£<?= $firsttimebuyer ?></div>

                <div class="resultlabel">Land Registry</div>
                <div class="resultvalue">£<?= $land_fee ?></div>


                <div class="resultlabel">Local Search (budget figure)</div>
                <div class="resultvalue">£<?= $localsearch ?></div>


                <div class="resultlabel">Priority Search</div>
                <div class="resultvalue">£<?= $priority_search ?></div>


                <div class="resultlabel">Land Charges Search (per person)</div>
                <div class="resultvalue">£<?= $landcharge ?></div>

                <div class="resultlabel" id="total">Sub Total</div>
                <div class="resultvalue" id="total">£<?= $totalpurchase ?></div>
            </div>



        </div>

    </div>
<?php } ?>

<?php
/*
 * sale Fees
 */
if ($salecost != NULL) {
    ?>
    <div class="<?= $feeclass ?>" id="<?= $noright ?>">
        <h1><img src="<?= base_url() ?>images/titles/fees_for_your_sale.png" alt="fees for your sale"/></h1>




        <div class="results">
            <h2>Based on - <?= $leaseholdsale ?> sale of £<?= $salecost ?> </h2>
            <strong>Our Fees</strong><br/>
            <div class="resultlabel">for your transaction</div>
            <div class="resultvalue">£<?= $sale_fee + $leaseholdsalefee ?></div>



            <div class="resultlabel">for sending bank transfers</div>
            <div class="resultvalue">£<?= $banktransfer_sale ?></div>



            <div class="resultlabel">VAT</div>
            <div  class="resultvalue">£<?= $salevat ?></div>


        </div>
        <div class="blanklabel">&nbsp;</div>
        <div class="blanklabel">&nbsp;</div>
        <div class="results">
            <strong>Other Costs</strong><br/>

            <div class="resultlabel">Office Copy Entries</div>
            <div class="resultvalue">£<?= $office_copy ?></div>
            <div class="blanklabel">&nbsp;</div>
            <div class="blanklabel">&nbsp;</div>
            <div class="blanklabel">&nbsp;</div>
            <div class="blanklabel">&nbsp;</div>
            <div class="resultlabel" id="total">Sub Total</div>
            <div class="resultvalue" id="total">£<?= $totalsale ?></div>
        </div>



    </div>
<?php } ?>

<div class="clear"></div>

<div id="grandtotal">
    <div style="width:650px;   ">  
        <?php if (isset($stamp_fee) && $stamp_fee > 0) { ?>
            Total fees and expenses (excluding stamp duty) £<?= $grandtotalnostamp ?><br/>
        <?php } ?>
        Total fees and expenses  <?php if (isset($stamp_fee) && $stamp_fee > 0) { ?> (including stamp duty)    <?php } ?> £<?= $grandtotal ?>
        <div style="clear:both;"></div>
    </div>




</div>

<?= $this->load->view('global/printbutton') ?>
<?= $this->load->view('quote/emailquote') ?>
<?= $this->load->view('quote/instruct') ?>
If you need further help contact us on 01708 757575 or email mbs@ker.co.uk. or request a call back
