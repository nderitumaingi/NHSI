<?php

if(isset($_GET['id'])){
	include('config.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"delete from company where id='$id'")or die(mysqli_error($conn));
    if($query){
		echo"<script>window.alert('Board Member deleted successfully')</script>";
	    header('refresh:0;url=company.php');
	}
}
?>