<?php foreach($content as $row):
$format = 'l jS \of F Y';
$startdate = date($format, $row->start_publish);
$enddate = date($format, $row->end_publish);
$id = $row->content_id;?>

<?php  $id = $row->content_id;?>


<?=form_open_multipart("admin/edit_content/".$id)?> 
Title: <br/><?=form_input('title', $row->title)?>
<br/>
<textarea cols=65 rows=20 name="content" id="content" class='wymeditor'><?=$row->content?></textarea>
<br/>
<?=form_hidden('menu', $row->menu)?>
<?php if($row->news_image != NULL) { ?>
<img src="https://s3-eu-west-1.amazonaws.com/kerquote/<?=$row->news_image?>" style="padding:10px 10px 10px 0;" width="150px">
<?php } ?>
<p class="Image">
<?= form_label('Image') ?> (not required field)<br/>

<?= form_upload('file') ?>
</p>
<hr/>
Meta Description<br/>
<textarea  cols=65 rows=2 name="meta_desc"><?=$row->meta_desc?></textarea>
<br/>

Meta Title<br/>
<textarea  cols=65 rows=2 name="meta_title"><?=$row->meta_title?></textarea>
<br/>


Sidebox:
<br/><?=form_input('sidebox', $row->sidebox)?><br/>


Extra: <br/><?=form_input('extra', $row->extra)?><br/>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;?>