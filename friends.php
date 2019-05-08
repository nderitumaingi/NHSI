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
        <li><a href="dashboard.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
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
            <li class="active"><a href="staff.php">Staff</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#"><i class="fa fa-link"></i> <span>Sponsors</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="companies.php">Companies</a></li>
            <li class="active"><a href="friends.php">Friends of hospice</a></li>
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
        Nyeri Hospice
        <small>Friends of hospice</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">
    <a href="add_friend.php" class="btn btn-info bt-sm">Add Friend of Hospice</a>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Friends</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">               
                <thead>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Phonenumber</th>
                  <th>Email</th>
                  <th>Monthly Contribution</th>
                  <th>Yearly Contribution</th>
                </thead>

                <tbody>
                <?php
include_once('config.php');
$sql="SELECT * FROM individual";
$result=mysqli_query($conn,$sql);

$count = 0;
while($row=mysqli_fetch_assoc($result)){
$count++;

?>
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phonenumber']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mcon']; ?></td>
                    <td><?php echo $row['ycon']; ?></td>
                    <?php echo"<td> <a href='viewfriends.php?id=".$row['id']."' class='btn btn-success'>VIEW</a></td>";?>
                    <?php echo"<td> <a href='updatefriend.php?id=".$row['id']."'class='btn btn-primary'>UPDATE</a></td>"?>
                    <?php echo"<td> <a href='deletefriends.php?id=".$row['id']."'class='btn btn-danger'>DELETE</a></td>"?>
                  </tr>
               <?php } ?>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </section>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

  <?php include_once('footer.php') ?>