<?php
	include('db.php');

	$u = $_POST['email'];
	$p = $_POST['pass'];

	$query = "SELECT * FROM `register` WHERE  `email`='$u' AND  `password`='$p'";

	$result = mysqli_query($db, $query) or die(mysqli_query());
	$rows = mysqli_num_rows($result);
	if($rows==1)
	{
		while($row = mysqli_fetch_array($result))
			{
				session_start();
				$_SESSION["username"] = $row['email'];
				header('Refresh:1; URL=index.php');
			}
	}
	else
	{
		?>
		<script>alert('failed to login, Click to retry');</script>
		<?php
		header('Refresh: 1; URL=login.php');
	}
	?>
