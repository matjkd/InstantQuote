<?php

if (isset($message))
{
?>

			<div id="warningbox" class="ui-widget" style="padding-bottom:10px; ">
				<div class='ui-state-error ui-corner-all' style='padding: 0 .7em;'>
					<p>
					<span class='ui-icon ui-icon-alert' style='float:left; margin-top:0px; margin-right:.3em;'></span>
                                        <a href='#' onclick='javascript:this.parentNode.parentNode.parentNode.style.display="none"; return false;'>
                                            <span class='ui-icon ui-icon-circle-close' style='float:right; margin-top:0px; margin-right:.3em;'></span>
					</a>
                                     
				<?=$message?>
					
					
				
					</p>
				</div>
			</div>

<?php } ?>
