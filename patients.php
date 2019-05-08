<?php
$conn=mysqli_connect("localhost","root","","nyerihospice");
$db=mysqli_select_db($conn,"nyerihospice");

$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$illness=$_POST['illness'];
$homearea=$_POST['homearea'];
$nextofkin=$_POST['nextofkin'];
$nokphonenumber=$_POST['nokphonenumber'];

$query="INSERT INTO patients(id,name,phonenumber,illness,homearea,nextofkin,nokphonenumber)VALUE(NULL,'$name','$phonenumber','$illness','$homearea','$nextofkin','$nokphonenumber')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo"<script>window.alert('Patient added successfully. ')</script>";
	header('refresh:0;url=patient.php');
}else{
	echo"<script>window.alert('Patient not added')</script>";
	header('refresh:0;url=patient.php');
}


?>
