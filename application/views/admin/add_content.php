


<?=form_open_multipart("admin/submit_content/")?> 
Title: <br/><?=form_input('title')?>
<br/>
Menu (url safe, no special characters or spaces): <br/><?=form_input('menu')?>
<br/>
<textarea cols=65 rows=20 name="content" id="txtContent"></textarea>
<br/>

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
<input type="submit" class="wymupdate" />
<?=form_close()?> 
