<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"   "http://www.w3.org/TR/REC-html40/strict.dtd">
<html lang=en>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>

            body {
                margin: 20pt 22pt 24pt 22pt;
                padding-top:0px;
                font-family: 'Helvetica';
                font-size: 9px;
                color:#444;
            }

            table {
                width:100%;
                margin-bottom: 5px;

            }

            thead {
                background-color: #cccccc;
            }

            tbody {
                background-color: #ffffff;
            }

            th,td {
                padding: 3pt;
            }
            h3 {

                margin-bottom:0px;
                padding-bottom:5px;
            }

            table.collapse {

                border-collapse: collapse;
                border: 0.5pt solid #cccccc;  
            }

            table.collapse td {
                border: 0.5pt solid #cccccc;

            }
            .fees {

                float:left;
                display:block;
                position:relative;
                width:345px;

                padding:0px;
                margin-right:10px;
                border:0px solid;

            }
            #noright {
                margin-right:0px;
            }
        </style>
    </head>
    <body> 

        <table>
            <tr>
                <td width="380px">
                   <img style="width:210px; margin-bottom:3px; margin-top:10px;"  src="/home/cloud/domains/convey-quote.co.uk/public_html/images/logo/quoteheading.jpg" alt="test">
                    
                </td>

                <td align=right>
                	<img style="width:150px; margin-bottom:3px; margin-top:10px;"  src="/home/cloud/domains/convey-quote.co.uk/public_html/images/logo/ker.jpg" alt="test">
                    
                    <?php echo $config_address; ?><br/>
                    <?php echo "<strong>t $config_phone</strong>  <br/><strong>e</strong> $config_email  <br/> <strong>w</strong> $config_website"; ?>
                    <br/>
                    Date: <?php
                    echo $datetime;
                    ?>
                    <br/>(Quote valid for 60 Days)
                </td>
            </tr>

        </table>   
        <?php
        /*
         * 
         * 
         */
        if ($countfees <= 1) {
            $feeclass = "singlefees";
            $noright = "";
            $grandtotal = $totalpurchase + $totalsale;
            $grandtotal = number_format($grandtotal, 2, '.', '');
            if (isset($stamp_fee)) {
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






            <h3>Based on <?= $leasehold ?> purchase of &pound;<?= $purchasecost ?></h3>

            <table class="collapse">
                <thead>
                    <tr>
                        <td colspan="2">
                            <strong>Our Fees</strong>
                        </td>
                    </tr>
                </thead>
                <tr>
                    <td width="400px">
                        for your transaction
                    </td>

                    <td>
                        &pound;<?= $purchase_fee + $leaseholdfee ?>
                    </td>


                </tr>

                <tr>
                    <td>
                        for sending bank transfers
                    </td>

                    <td>
                        &pound;<?= $banktransfer_purchase ?>
                    </td>


                </tr>
                <tr>
                    <td>
                        for acting for your mortgage lender
                    </td>

                    <td>
                        &pound;<?= $mortgagefee ?>
                    </td>


                </tr>

                <tr>
                    <td>
                        for completing Stamp Duty Forms
                    </td>

                    <td>
                        &pound;<?= $stamp_duty_forms ?>
                    </td>


                </tr>

                <tr>
                    <td>
                        VAT
                    </td>

                    <td>
                        &pound;<?= $feevat ?>
                    </td>


                </tr>
            </table>
        <br/>
        <table class="collapse">
            <thead>
                <tr >
                    <td colspan="2">
                        <strong>Other Costs</strong>
                    </td>
                </tr>
            </thead>
            <tr>
                <td width="400px">
                    Stamp Duty
                </td>

                <td>
                    &pound;<?= $stamp_fee ?>
                </td>


            </tr>

            <tr>
                <td>
                    Land Registry
                </td>

                <td>
                    &pound;<?= $land_fee ?>
                </td>


            </tr>

            <tr>
                <td>
                    Local Search budget
                </td>

                <td>
                    &pound;<?= $localsearch ?>
                </td>


            </tr>


            <tr>
                <td>
                    Priority Search
                </td>

                <td>
                    &pound;<?= $priority_search ?>
                </td>


            </tr>

            <tr>
                <td>
                    Land Charges
                </td>

                <td>
                    &pound;<?= $landcharge ?>
                </td>


            </tr>

            <tr>
                <td>
                    <strong>Sub Total</strong>
                </td>

                <td>
                    <strong>  &pound;<?= $totalpurchase ?></strong>
                </td>


            </tr>
        </table> 





        <br/><br/>



    <?php } ?>

    <?php
    /*
     * sale Fees
     */
    if ($salecost != NULL) {
        ?>
        <h3>Based on <?= $leaseholdsale ?> sale of &pound;<?= $salecost ?> </h3>
        <table class="collapse">
            <thead>
                <tr >
                    <td colspan="2">
                        <strong>Our Fees</strong>
                    </td>
                </tr>
            </thead>
            <tr>
                <td width="400px">
                    for your transaction
                </td>

                <td>
                    &pound;<?= $sale_fee + $leaseholdsalefee ?>
                </td>


            </tr>

            <tr>
                <td width="400px">
                    sending bank transfers
                </td>

                <td>
                    &pound;<?= $banktransfer_sale ?>
                </td>


            </tr>

            <tr>
                <td width="400px">
                    VAT
                </td>

                <td>
                    &pound;<?= $salevat ?>
                </td>


            </tr>
        </table>

        <br/>
        <table class="collapse">
            <thead>
                <tr >
                    <td colspan="2">
                        <strong>Other Costs</strong>
                    </td>
                </tr>
            </thead>  
            <tr>
                <td width="400px">
                    Office Copy Entries
                </td>

                <td>
                    &pound;<?= $office_copy ?>
                </td>


            </tr>

            <tr>
                <td width="400px">
                    <strong> Sub Total</strong>
                </td>

                <td>
                    <strong>&pound;<?= $totalsale ?></strong>
                </td>


            </tr>
        </table>





    <?php } ?>

    <div class="clear"></div>
  <?php if (isset($stamp_fee) && $stamp_fee > 0) { ?>
   
        <h2>  Total fees and expenses (excluding stamp duty) &pound;<?= $grandtotalnostamp ?></h2>
    <?php } ?>
    <h2>  Total fees and expenses  <?php if (isset($stamp_fee) && $stamp_fee > 0) { ?> (including stamp duty)    <?php } ?> &pound;<?= $grandtotal ?></h2>

    <p>All quotes are subject to our terms and conditions (see over)</p>

    <p>If you need further help or want to instruct us contact us on 01708 757575 or email mbs@ker.co.uk</p>

    <div  style='page-break-before:always;'></div>



    <h1>Terms and Conditions</h1>

    <?php $terms = str_replace("£", "&pound;", $terms); ?>
    <?php $terms = str_replace("–", "-", $terms); ?>
    <?php $terms = str_replace("™", "&#153;", $terms); ?>
    <?php $terms = str_replace("’", "&#39;", $terms); ?>
    <?php $terms = str_replace("“", "&quot;", $terms); ?>
    <?php $terms = str_replace("”", "&quot;", $terms); ?>
    <?php $terms = str_replace("[break]", "<div  style='page-break-before:always;'></div>", $terms); ?>
    <?= $terms ?>




    <script type="text/php">
        if ( isset($pdf) ) {
        $font = Font_Metrics::get_font("verdana");;
        $size = 6;
        $color = array(0,0,0);
        $text_height = Font_Metrics::get_font_height($font, $size);

        $foot = $pdf->open_object();

        $w = $pdf->get_width();
        $h = $pdf->get_height();

        // Draw a line along the bottom
        $y = $h - 2 * $text_height - 24;
        $pdf->line(16, $y, $w - 16, $y, $color, 1);

        $y += $text_height;

        //$text = "ID: quote ref";
        //$pdf->text(16, $y, $text, $font, $size, $color);

        $pdf->close_object();
        $pdf->add_object($foot, "all");
        // global $initials;
        // $initials = $pdf->open_object();

        // Add an initals box
        //$text = "Initials:";
        //$width = Font_Metrics::get_text_width($text, $font, $size);
        //$pdf->text($w - 16 - $width - 38, $y, $text, $font, $size, $color);
        //$pdf->rectangle($w - 16 - 36, $y - 2, 36, $text_height + 4, array(0.5,0.5,0.5), 0.5);


        //$pdf->close_object();
        // $pdf->add_object($initials);

        // Mark the document as a duplicate
        //df->text(110, $h - 240, "DUPLICATE", Font_Metrics::get_font("verdana", "bold"),
        //       110, array(0.85, 0.85, 0.85), 0, -52);

        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";  

        // Center the text
        $width = Font_Metrics::get_text_width("Page 1 of 2", $font, $size);
        $pdf->page_text($w / 2 - $width / 2, $y, $text, $font, $size, $color);

        }

    </script>

</body>
</html>