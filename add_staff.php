<?php include_once('first.php') ?>
<?php include_once('head.php') ?>
<?php include_once('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
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
                  <h3 class="box-title">Staff Registration</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="staffs.php" onsubmit="return validateForm()" name="boms">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Fullname..">
                    </div>
                    <div class="form-group">
                        <label for="role">role</label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Staff Member Role..">
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">phonenumber</label>
                        <input type="text" class="form-control" id="phonenumber"  name="phonenumber" placeholder="Staff member phonenumber...">
                    </div>
                    <div class="form-group">
                          <label for="Email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Staff member email">
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