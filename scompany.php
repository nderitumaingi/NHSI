<?php
$conn=mysqli_connect("localhost","root","","nyerihospice");
$db=mysqli_select_db($conn,"nyerihospice");

$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$mcon=$_POST['mcon'];
$ycon=$_POST['ycon'];

$query="INSERT INTO company(id,name,phonenumber,email,mcon,ycon)VALUE(NULL,'$name','$phonenumber','$email','$mcon','$ycon')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo"<script>window.alert('Sponsor Company added successfully. ')</script>";
	header('refresh:0;url=companies.php');
}else{
	echo"<script>window.alert('Sponsor Company not added')</script>";
	header('refresh:0;url=add_companies.php');
}


?>
