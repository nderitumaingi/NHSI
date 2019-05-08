<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css" integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css" integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
<?php
include('config.php');
include('config.php');
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query="SELECT * FROM board WHERE id='$id'";
  $select_query=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($select_query)){
    $name=$row['name'];
    $role=$row['role'];
    $phonenumber=$row['phonenumber'];
    $email=$row['email'];
    $uid=$row['id'];
      
      }
}
	
?>

<?php include_once('first.php') ?>
<?php include_once('head.php') ?>
<?php include_once('sidebar.php') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nyeri Hospice
        <small>Staff</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Update <?php echo $name;?>'s Information</h3><a href="bom.php" style="float : right" class="btn btn-outline-info"><i class="fas fa-angle-double-left fa-2x"></i></a>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="id">Id</label>
                      <input type="text" class="form-control" id="id" name="id" value="<?php echo $uid;?>" readOnly>
                    </div>
                    <div class="form-group">
                      <label for="name">name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Fullname.." value="<?php echo $name;?>">
                    </div>
                    <div class="form-group">
                        <label for="role">role</label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Staff Member Role.." value="<?php echo $role;?>">
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">phonenumber</label>
                        <input type="text" class="form-control" id="phonenumber"  name="phonenumber" placeholder="Staff member phonenumber..." value="<?php echo $phonenumber;?>">
                    </div>
                    <div class="form-group">
                          <label for="Email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Staff member email" value="<?php echo $email;?>">
                    </div>
                </div>
                  <!-- /.box-body -->
    
                 
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-success" value="Update">
                  </div>
                  
                </form>
              </div>
              <!-- /.box -->
    
              </div>
              <!-- /.box -->
              </div>
    </section>
    
  <!-- /.content-wrapper -->
  <?php
  include('config.php');
  if(isset($_POST['update'])){
    $nm=$_POST['name'];
    $rol=$_POST['role'];
    $ph=$_POST['phonenumber'];
    $em=$_POST['email'];
    $queryupdate=mysqli_query($conn,"update volunteers set name='$nm',phonenumber='$ph',email='$em' where id='$id'")or die(mysqli_error($conn));
    if($queryupdate){
       echo'<script>window.alert("Board member information updated succesifully")</script>';
       header("Location: bom.php");
       } else{
       echo'<script>window.alert("Board member information not updated. Please try again.")</script>';
       header('refresh:0;url=updatebom.php');			
       }
 }
?>

  <!-- Main Footer -->
  <?php include_once('footer.php') ?>