<?php //javascript required for bootstrap navigation to work ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?= SCRIPTS_URL.'bootstrap.min.js'?>"></script>
<?php 
if(isset($extra_footer_scripts)){
	echo $extra_footer_scripts;	
}
