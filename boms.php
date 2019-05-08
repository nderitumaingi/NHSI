<?php
$conn=mysqli_connect("localhost","root","","nyerihospice");
$db=mysqli_select_db($conn,"nyerihospice");

$name=$_POST['name'];
$role=$_POST['role'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];


$query="INSERT INTO board(id,name,role,phonenumber,email)VALUE(NULL,'$name','$role','$phonenumber','$email')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo"<script>window.alert('Board Member added successfully. ')</script>";
	header('refresh:0;url=bom.php');
}else{
	echo"<script>window.alert('Board Member not added')</script>";
	header('refresh:0;url=add_board.php');
}


?>
