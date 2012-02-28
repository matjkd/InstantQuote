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
                <td width="280px">
                    <h1>Conveyancing Quote</h1>
                </td>

                <td align=right>
                    <h2 style="margin-bottom:3px;"> <?php echo $config_company_name; ?></h2>
                    <?php echo $config_address; ?><br/>
                    <?php echo "<strong>t $config_phone</strong>  <br/><strong>e</strong> $config_email  <br/> <strong>w</strong> $config_website"; ?>
                    <br/>
                    Date: <?php
                    echo $datetime;
                    ?>
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
                        sending bank transfers
                    </td>

                    <td>
                        &pound;<?= $banktransfer_purchase ?>
                    </td>


                </tr>
                <tr>
                    <td>
                        acting for your mortgage lender
                    </td>

                    <td>
                        &pound;<?= $mortgagefee ?>
                    </td>


                </tr>

                <tr>
                    <td>
                        Completing Stamp Duty Forms
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


        <p>All quotes are subject to our terms and conditions</p>

        <p>If you want to speed up the process you can download and complete your sale questionnaires now. Visit www.ker.co.uk/easymove</p>


    <?php } ?>

    <div class="clear"></div>

    <h2>Total of our fees and expenses &pound;<?= $grandtotal ?></h2>
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

        $text = "ID: quote ref";
        $pdf->text(16, $y, $text, $font, $size, $color);

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