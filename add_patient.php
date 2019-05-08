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
                  <h3 class="box-title">Patient Registration</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="patients.php" onsubmit="return validateForm()" name="patients">
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
                        <label for="exampleInputEmail1">Illness</label>
                        <input type="text" class="form-control" id="illness"  name="illness" placeholder="Illness">
                    </div>
                    <div class="form-group">
                          <label for="exampleInputEmail1">Home Area</label>
                          <input type="text" class="form-control" id="homearea" name="homearea" placeholder="Your home area">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Next of Kin Name</label>
                        <input type="text" class="form-control" id="nextofkin" name="nextofkin" placeholder="Enter Name of next of kin">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Next of kin phonenumber</label>
                      <input type="text" class="form-control" id="nokphonenumber"  name="nokphonenumber" placeholder="Enter Next of kin phonenumber">
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