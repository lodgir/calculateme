<?php
include_once ('db.php');
session_start();
$b=$_POST['password'];
$s=$_SESSION["username"];
     
	include_once ('db.php');
	
		$query="UPDATE `register` SET `password`='$b' WHERE `email`='$s'";
		$result = mysqli_query($db,$query) or die(mysql_error());
		if($result){

?>
		<script>
		alert('successfully saved');
        
        </script>
<?php

	header('Refresh: 0; URL=index.php');

		}
		else
		{
			?>
			<script>
		alert('unable to change');
        
        </script>
			<?php
		
	header('Refresh: 0; URL=index.php');
		}
	
?>	