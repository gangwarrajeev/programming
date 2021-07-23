<?php
session_start();




	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title></title>
		<style type="text/css">
		div.header{
			font-family: poppins;

		}
		</style>
	</head>
	<body>
		<div class="header">
	<h1 style="text-transform: uppercase;text-align: center;">welcome to the admin pannel<?php echo " ".$_SESSION['adminLoginId']?></h1>
	<form method="POST">
	<button name="logout">log out</button>
</form>
</div>
<?php
if(isset($_POST['logout']))
	{
		session_destroy();
		header('location:adminlogin.php');
	}

?>
	</body>
	</html>