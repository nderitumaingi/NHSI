<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css" integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css" integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
<?php
include('config.php');
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query="SELECT * FROM volunteers WHERE id='$id'";
  $select_query=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($select_query)){
    $name=$row['name'];
    $phonenumber=$row['phonenumber'];
    $email=$row['email'];
    $homearea=$row['homearea'];
    $yearoftraining=$row['yearoftraining'];
    $occupation=$row['occupation'];
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
        <small>Add Volunteer</small>
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
                  <h3 class="box-title"><?php echo $name;?>'s Information</h3><a href="volunteer.php" style="float : right" class="btn btn-outline-info"><i class="fas fa-angle-double-left fa-2x"></i></a>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="">
                <div class="box-body">
                
                    <div class="form-group">
                      <label for="exampleInputEmail1">name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Fullname" value="<?php echo $name;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">phone number</label>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Your phonenumber" value="<?php echo $phonenumber;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">emsil</label>
                        <input type="email" class="form-control" id="illness"  name="email" placeholder="your email" value="<?php echo $email;?>">
                    </div>
                    <div class="form-group">
                          <label for="exampleInputEmail1">Home Area</label>
                          <input type="text" class="form-control" id="homearea" name="homearea" placeholder="Your home area" value="<?php echo $homearea;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year of training</label>
                        <input type="text" class="form-control" id="yearoftraining" name="yearoftraining" placeholder="Enter Year of training" value="<?php echo $yearoftraining?>">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Occupation</label>
                      <input type="text" class="form-control" id="occupation"  name="occupation" placeholder="Enter day to day occupation" value="<?php echo $occupation?>">
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
    
  <!-- /.content-wrapper -->
  <?php include_once('footer.php') ?>