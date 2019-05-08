<?php

if(isset($_GET['id'])){
	include('config.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"delete from individual where id='$id'")or die(mysqli_error($conn));
    if($query){
		echo"<script>window.alert('Friends deleted successfully')</script>";
	    header('refresh:0;url=friends.php');
	}
}
?>