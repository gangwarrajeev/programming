<?php 

$conn=mysqli_connect("localhost","root","","adminpannel") or die("connection failed! please try again later");

error_reporting();
if(isset($_POST['submit']))
	{
$name=$_POST['username'];
$pass=$_POST['password'];
$query="SELECT * FROM admin_name WHERE name='$name' AND  admin_password='$pass'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if($row['name']==$name && $row['admin_password']==$pass)
{
	session_start();
	$_SESSION['adminLoginId']=$_POST['username'];
	header("location:adminpannel.php");
}
else
{
	
	header("location:adminlogin.php");
	echo "<script>alert('wrong password ! please trry again');</script>";
}
}
?>