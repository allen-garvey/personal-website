<?php //javascript required for bootstrap navigation to work ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?= BASE_URL.'lib/bootstrap/bootstrap.min.js'?>"></script>
<?php 
$extra_footer_scripts = isset($extra_footer_scripts) ? $extra_footer_scripts : '';
echo $extra_footer_scripts;