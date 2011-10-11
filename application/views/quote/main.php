<h2>Get a conveyancing Quote</h2>

<div id="conveyancing">
    <?=form_open('quote/calculate')?>
        <div class="form" id="buying">

           <p>
               <strong>Buying Price</strong><br/>
               <?=form_input('buying_price')?>
           </p>

            <p><strong>Freehold/LeaseHold</strong><br/>
             <?=form_radio('leasehold', 'leasehold', TRUE);?>Leasehold <?=form_radio('leasehold', 'freehold', FALSE);?>Freehold
            </p>

             <p><strong>Are you obtaining a Mortgage</strong><br/>
              <?=form_radio('mortgage', '1', TRUE);?>yes <?=form_radio('mortgage', '0', FALSE);?>no
             </p>

        </div>

        <div class="form" id="selling">

             <p><strong>Selling Price</strong><br/>
               <?=form_input('selling_price')?>
             </p>
             <p><strong>Freehold/LeaseHold</strong><br/>
                  <?=form_radio('leaseholdsale', 'leasehold', TRUE);?>Leasehold <?=form_radio('leaseholdsale', 'freehold', FALSE);?>Freehold
             </p>
<?=form_submit('submit', 'Submit')?>
        </div>
    <?=form_close()?>
</div>