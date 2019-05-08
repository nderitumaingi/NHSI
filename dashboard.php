<?php
//getting all patient s record
include('config.php');
$patient=mysqli_query($conn,"select * from patients")or die(mysqli_error($conn));
$total_patient=mysqli_num_rows($patient);
$volunteers=mysqli_query($conn, "select * from volunteers")or die(mysqli_error($conn));
$total_volunteers=mysqli_num_rows($volunteers);
$company=mysqli_query($conn, "select * from company")or die(mysqli_error($conn));
$total_company=mysqli_num_rows($company);
$friend=mysqli_query($conn, "select * from individual")or die(mysqli_error($conn));
$total_friend=mysqli_num_rows($friend);
$staff=mysqli_query($conn, "select * from staff")or die(mysqli_error($conn));
$total_staff=mysqli_num_rows($staff);
$bom=mysqli_query($conn, "select * from board")or die(mysqli_error($conn));
$total_board=mysqli_num_rows($bom);
?>

<?php include_once('first.php') ?>
<?php include_once('head.php') ?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo$_SESSION['username'];?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MANAGEMENT</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="dashboard.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li><a href="patient.php"><i class="fa fa-link"></i> <span>Patients</span></a></li>
        <li><a href="volunteer.php"><i class="fa fa-link"></i> <span>Volunteers</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Administration</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="bom.php">Board Of Directors</a></li>
            <li><a href="staff.php">Staff</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Sponsors</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="companies.php">Companies</a></li>
            <li><a href="friends.php">Friends of hospice</a></li>
          </ul>
        </li>
        <li>
          <a href="calendar.php">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>
        <li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Analysis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Nyeri Hospice</a></li>
        <li class="active">Manager</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo$total_patient;?></h3>
      
                    <p>Patients</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="patient.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo$total_volunteers?></h3>
      
                    <p>Volunteers</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="volunteer.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3><?php echo$total_company ?></h3>
      
                    <p>Sponsor Institutions</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="companies.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
               <!-- ./col -->
               <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3><?php echo$total_friend ?></h3>
        
                      <p>Friends of hospice</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="friends.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
               <!-- ./col -->
               <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3><?php echo$total_staff ?></h3>
        
                      <p>Staff</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="staff.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3><?php echo$total_board ?></h3>
      
                    <p>Board Of Directord</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="bom.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
    
  </div>
  <?php include_once('footer.php') ?>
