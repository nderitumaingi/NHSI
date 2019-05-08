<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css" integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css" integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
<?php
include('config.php');
include('config.php');
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query="SELECT * FROM individual WHERE id='$id'";
  $select_query=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($select_query)){
    $name=$row['name'];
    $phonenumber=$row['phonenumber'];
    $email=$row['email'];
    $mcon=$row['mcon'];
    $ycon=$row['ycon'];
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
        <small>Sponsor Companies</small>
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
                  <h3 class="box-title"><?php echo $name;?>'s Information</h3><a href="friends.php" style="float : right" class="btn btn-outline-info"><i class="fas fa-angle-double-left fa-2x"></i></a>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="scompany.php" onsubmit="return validateForm()" name="scompany">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="id">Id</label>
                      <input type="text" class="form-control" id="id" name="id" value="<?php echo $uid;?>" readOnly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Fullname" value="<?php echo $name;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">phone number</label>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Company phonenumber" value="<?php echo $phonenumber;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email"  name="email" placeholder="Company Email" value="<?php echo $email;?>">
                    </div>
                    <div class="form-group">
                          <label for="exampleInputEmail1">Monthly Contribution</label>
                          <input type="text" class="form-control" id="monthlycontribution" name="mcon" placeholder="Monthly Contributiond" value="<?php echo $mcon;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Yearly Contributions</label>
                        <input type="text" class="form-control" id="yearlycontribution" name="ycon" placeholder="Yearly Contribution" value="<?php echo $ycon;?>">
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
    $upname=$_POST['name'];
    $uphone=$_POST['phonenumber'];
    $uillness=$_POST['illness'];
    $uhomearea=$_POST['homearea'];
    $punextofkin=$_POST['nextofkin'];
    $punokphonenumber=$_POST['nokphonenumber'];
    $queryupdate=mysqli_query($conn,"update individual set name='$upname',phonenumber='$uphone',illness='$uillness',homearea='$uhomearea', nextofkin='$punextofkin' nokphonenumber='$punokphonenumber' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("record updated succesifully")</script>';
        header('refresh:0;url=friend.php');
        } else{
        echo'<script>window.alert("record not updated. Please try again.")</script>';
        header('refresh:0;url=updatefriend.php');			
        }
  }
?>

  <!-- Main Footer -->
  <?php include_once('footer.php') ?>