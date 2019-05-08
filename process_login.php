<?php
session_start();
include('config.php');
if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	//sql statement for select
	$query=mysqli_query($conn,"select * from admin where username='$username' and password='$password'")or die(mysqli_error($conn));
	$num=mysqli_num_rows($query);
	if($num==1){
      while($row=mysqli_fetch_array($query)){
		 $_SESSION['username']=$row['username'];
		 ?>
		   <script>
		    window.alert("login is successfull");
			window.location.href="dashboard.php";
		   </script>
		 <?php
	  }
	}else{
		?>
		<script>
		 window.alert("login failed");
		 window.location.href="login.php";
		</script>
	  <?php
	}

}
?>