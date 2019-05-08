<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css" integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css" integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
<?php
include('config.php');
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query="SELECT * FROM patients WHERE id='$id'";
  $select_query=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($select_query)){
      $nm=$row['name'];
      $phone=$row['phonenumber'];
      $ill=$row['illness'];
      $home=$row['homearea'];
      $next=$row['nextofkin'];
      $nok=$row['nokphonenumber'];
      $uid=$row['id'];
      
      }
}
	
?>

<?php include_once('first.php') ?>
<?php include_once('head.php') ?>
<?php include_once('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nyeri Hospice
        <small>Patients</small>
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
                  <h3 class="box-title"><?php echo $nm;?> Information</h3><a href="patient.php" style="float : right" class="btn btn-outline-info"><i class="fas fa-angle-double-left fa-2x"></i></a>

                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form  action="" method="POST">
                  <div class="box-body">
                 
                    <div class="form-group">
                      <label for="exampleInputEmail1">name</label>
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $nm;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">phone number</label>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $phone;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Illness</label>
                        <input type="text" class="form-control" id="illness"  name="illness" value="<?php echo $ill;?>">
                    </div>
                    <div class="form-group">
                          <label for="exampleInputEmail1">Home Area</label>
                          <input type="text" class="form-control" id="homearea" name="homearea" value="<?php echo $home;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Next of Kin Name</label>
                        <input type="text" class="form-control" id="nextofkin" name="nextofkin" value="<?php echo $next;?>">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Next of kin phonenumber</label>
                      <input type="text" class="form-control" id="nokphonenumber"  name="nokphonenumber" value="<?php echo $nok;?>">
                    </div>
                    
                  </div>
                  <!-- /.box-body -->
    
                 
                </form>
              </div>
              <!-- /.box -->
    
              </div>
              <!-- /.box -->
              </div>
    </section>
    
    
<?php
  include('config.php');
  if(isset($_POST['update'])){
    $upname=$_POST['name'];
    $uphone=$_POST['phonenumber'];
    $uillness=$_POST['illness'];
    $uhomearea=$_POST['homearea'];
    $unextofkin=$_POST['nextofkin'];
    $unokphonenumber=$_POST['nokphonenumber'];
    $queryupdate=mysqli_query($conn,"update patients set name='$upname',phonenumber='$uphone',illness='$uillness',homearea='$uhomearea', nextofkin='$unextofkin' nokphonenumber='$unokphonenumber' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("record updated succesifully")</script>';
        header('refresh:0;url=patient.php');
        } else{
        echo'<script>window.alert("record not updated. Please try again.")</script>';
        header('refresh:0;url=updatepatient.php');			
        }
  }
?>

  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include_once('footer.php') ?>