<?php
$conn=mysqli_connect("localhost","root","","nyerihospice");
$db=mysqli_select_db($conn,"nyerihospice");

$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$homearea=$_POST['homearea'];
$yearoftraining=$_POST['yearoftraining'];
$occupation=$_POST['occupation'];

$query="INSERT INTO volunteers(id,name,phonenumber,email,homearea,yearoftraining,occupation)VALUE(NULL,'$name','$phonenumber','$email','$homearea','$yearoftraining','$occupation')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo"<script>window.alert('Volunteer added successfully. ')</script>";
	header('refresh:0;url=volunteer.php');
}else{
	echo"<script>window.alert('Volunteer not added')</script>";
	header('refresh:0;url=add_volunteer.php');
}


?>
