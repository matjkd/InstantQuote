


<?=form_open_multipart("admin/submit_content/")?> 
Title: <br/><?=form_input('title')?>
<br/>
Menu (url safe, no special characters or spaces): <br/><?=form_input('menu')?>
<br/>
Town: <br/><?=form_input('town')?>
<br/>
Average Sale Price (freehold): <br/><?=form_input('sale_price')?>
<br/>
Average Sale Price (leasehold): <br/><?=form_input('sale_price_leasehold')?>
<br/>
Localsearch: <br/><?=form_input('local_search')?>
<br/>
Content:<br/>
<textarea name="content" id="txtContent" ></textarea>
<br/>
<?=form_hidden('category', 'local')?>
<?=form_hidden('main_content', 'localPage')?>
<hr/>
Meta Description<br/>
<textarea  cols=65 rows=2 name="meta_desc"></textarea>
<br/>

Meta Title<br/>
<textarea  cols=65 rows=2 name="meta_title"></textarea>
<br/>


Sidebox:
<br/><?=form_input('sidebox')?><br/>


Extra: <br/><?=form_input('extra')?><br/>
<input type="submit"  />
<?=form_close()?> 
