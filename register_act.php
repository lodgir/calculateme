<?php
   include('db.php');

   $email=$_POST['email'];
   $password=$_POST['pass'];
   $country=$_POST['country'];
   $age=$_POST['age'];

    $query = "INSERT INTO `register`(`email`, `password`, `country`, `age`) VALUES ('$email','$password','$country','$age')";
    $result = mysqli_query($db,$query) or die(mysql_error());
    
    if($result)
	{
		?>
		<script type="text/javascript">
			alert('Sucessfully signed up');
			window.location = "index.php";
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert('Error');
			window.location = "login.php";
		</script>
		<?php
	}	
?>