<?php
session_start();
if(!isset($_SESSION["username"])){
?>
<script type="text/javascript">
	alert('You will need to login to continue');
	window.location= "login.php";
</script>
<?php
exit(); }
?>
