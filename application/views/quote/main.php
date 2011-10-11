<h2>Get a conveyancing Quote</h2>

<div id="conveyancing">
    <?=form_open()?>
        <div class="form" id="buying">

           <p>
               <strong>Buying Price</strong><br/>
               <?=form_input('buying_price')?>
           </p>

            <p><strong>Freehold/LeaseHold</strong><br/>
             <?=form_radio('leasehold', 'accept', TRUE);?>Leasehold <?=form_radio('leasehold', 'accept', FALSE);?>Freehold
            </p>

             <p><strong>Are you obtaining a Mortgage</strong><br/>
              <?=form_radio('mortgage', 'accept', TRUE);?>yes <?=form_radio('mortgage', 'accept', FALSE);?>no
             </p>

        </div>

        <div class="form" id="selling">

             <p><strong>Selling Price</strong><br/>
               <?=form_input('selling_price')?>
             </p>
             <p><strong>Freehold/LeaseHold</strong><br/>
                  <?=form_radio('leaseholdsale', 'accept', TRUE);?>Leasehold <?=form_radio('leaseholdsale', 'accept', FALSE);?>Freehold
             </p>
<?=form_button('submit', 'Submit')?>
        </div>
    <?=form_close()?>
</div>