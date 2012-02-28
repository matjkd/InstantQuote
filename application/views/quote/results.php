<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if ($countfees <= 1) {
    $feeclass = "singlefees";
    $noright = "";
    $grandtotal = $totalpurchase + $totalsale;
}
if ($countfees == 2) {
    $feeclass = "fees";
    $noright = "noright";
    $grandtotal = $totalpurchase + $totalsale;
    $grandtotal = number_format($grandtotal, 2, '.', '');
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

            <div class="resultlabel">Completing Stamp Duty Forms</div>
            <div class="resultvalue">£<?= $stamp_duty_forms ?></div>

            <div class="resultlabel">VAT </div>
            <div class="resultvalue">£<?= $feevat ?></div>

            <div class="results">
                <strong>Other Costs</strong><br/>


                <div class="resultlabel">Stamp Duty</div>
                <div class="resultvalue">£<?= $stamp_fee ?></div>


                <div class="resultlabel">Land Registry</div>
                <div class="resultvalue">£<?= $land_fee ?></div>


                <div class="resultlabel">Local Search budget</div>
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
            <h2>Based on <?= $leaseholdsale ?> sale of £<?= $salecost ?> </h2>
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
    <div style="width:550px;  float:left; ">  
        Total of our fees and expenses £<?= $grandtotal ?>
    </div>
    <div style="width:100px;  float:right; font-size:14px;">  
        <?= $this->load->view('global/printbutton') ?>
    </div>

</div>

<?= $this->load->view('quote/instruct') ?>

<?=
$this->load->view('quote/emailquote')?>