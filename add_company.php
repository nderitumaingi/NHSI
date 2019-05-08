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
                  <h3 class="box-title">Sponsor Companies Registration</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="scompany.php" onsubmit="return validateForm()" name="scompany">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">phone number</label>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Company phonenumber">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email"  name="email" placeholder="Company Email">
                    </div>
                    <div class="form-group">
                          <label for="exampleInputEmail1">Monthly Contribution</label>
                          <input type="text" class="form-control" id="monthlycontribution" name="mcon" placeholder="Monthly Contributiond">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Yearly Contributions</label>
                        <input type="text" class="form-control" id="yearlycontribution" name="ycon" placeholder="Yearly Contribution">
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