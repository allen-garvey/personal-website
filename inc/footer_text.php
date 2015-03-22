<script type="text/javascript" src="<?= BASE_URL.'scripts/email.js'; ?>"></script>
<script type="text/javascript">
var email_scrambler = new email_scrambler();
document.write("<footer class='container'>" + email_scrambler.get_email_link() + "</footer>");
</script>