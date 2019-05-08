<?php include_once('first.php') ?>
<?php include_once('head.php') ?>
<?php include_once('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
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
                  <h3 class="box-title">Volunteer Registration</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="volunteers.php" onsubmit="return validateForm()" name="patients">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">phone number</label>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Your phonenumber">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">emsil</label>
                        <input type="email" class="form-control" id="illness"  name="email" placeholder="your email">
                    </div>
                    <div class="form-group">
                          <label for="exampleInputEmail1">Home Area</label>
                          <input type="text" class="form-control" id="homearea" name="homearea" placeholder="Your home area">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year of training</label>
                        <input type="text" class="form-control" id="yearoftraining" name="yearoftraining" placeholder="Enter Year of training">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Occupation</label>
                      <input type="text" class="form-control" id="occupation"  name="occupation" placeholder="Enter day to day occupation">
                    </div>
                    
                  </div>
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.box -->
    
              </div>
              <!-- /.box -->
              </div>
    </section>
    
  <!-- /.content-wrapper -->

 <!-- Main Footer -->
 <?php include_once('footer.php') ?>
  