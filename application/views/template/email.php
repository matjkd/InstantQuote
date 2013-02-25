
<?php foreach($content as $row):?>
 <?php $level = $this->session->userdata('role');

            if ($level == 1) {
                $email = $this->session->userdata('email');
				$name = $this->session->userdata('firstname')." ".$this->session->userdata('lastname');
            } else {
                $adminemail = "mbs@ker.co.uk";
				$name = "Mark Sadler";
            }
			
			$content = str_replace('[email]', $email, $row->content);
			$content = str_replace('[name]', $name, $content);
?>
			


<?=$content?>

<?php endforeach;?>