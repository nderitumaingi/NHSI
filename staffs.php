<?php
$conn=mysqli_connect("localhost","root","","nyerihospice");
$db=mysqli_select_db($conn,"nyerihospice");

$name=$_POST['name'];
$role=$_POST['role'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];


$query="INSERT INTO staff(id,name,role,phonenumber,email)VALUE(NULL,'$name','$role','$phonenumber','$email')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo"<script>window.alert('Staff Member added successfully. ')</script>";
	header("Location: staff.php");
} else{
	echo"<script>window.alert('Staff Member not added')</script>";
	header("Location: updatestaff.php");
}


?>
