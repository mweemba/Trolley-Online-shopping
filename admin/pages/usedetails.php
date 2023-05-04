
<?php 
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$id = $_GET['id'];
echo $id;
$conn=mysqli_connect('localhost', 'root', '','cars_db');



$sql = "SELECT * FROM `user` WHERE `UserID`='$id'";
if ($result = mysqli_query($conn,$sql)) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         
         $user_id=$row["UserID"];
         $user_name=$row["UserName"];
         $Password=$row["PassWord"];
         $level=$row["LEVEL"];
         $FirstName=$row["First_Name"];
         $Last_name=$row["Last name"];
         $emailr=$row["email"];
         $mobile=$row["Mobile_Number"];
         $home=$row["Home_number"];
         $work=$row["Work_number"];
         $fax=$row["Fax"];
         $address1=$row["Address1"];
         $address2=$row["Address2"];
         $citye=$row["City"];
         $state_province=$row["State_Province"];
         $zip=$row["Zip_code"];
         $countrye=$row["country"];
         $active=$row["active"];
         $active_code=$row["Activ_Code"];
         $user_type=$row["User_Type"];
         $datejoined=$row["dateJoined"];
         $rating=$row["rating"];
         $likes=$row["like"];
         $prof_pic=$row["Prof_pic"];
         

	}
} else {
    echo "0 results on 1";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include'../head_admin.php';?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include'../aside_admin.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
        <!--<small>Preview</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></a></li>
        <li class="active">User Prifile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">profile Picture</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            <div class="form-group">
                  <img src="../../images/client.png">
                  <input type="file" class="form-control" value="<?php echo ""?>" readonly="readonly" >
                </div>
              <div class="form-group">
                  <label>User ID</label>
                  <input type="input" class="form-control" value="<?php echo $user_id;?>" readonly="readonly" >
                </div>
                <div class="form-group">
                  <label>User name</label>
                  <input type="text" class="form-control" value="<?php echo $user_name;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" value="<?php echo $FirstName;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Last Name </label>
                  <input type="text" class="form-control" value="<?php echo $Last_name ;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" value="<?php echo "********";?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <input type="text" class="form-control" value="<?php echo $level;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" value="<?php echo $emailr;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Mobile Number</label>
                  <input type="text" class="form-control" value="<?php echo $mobile;?>" readonly="readonly"  >
                </div>
                               
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes --><!-- /.box --><!-- /.box -->

          <!-- Input addon --><!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form --><!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="box-body">
                <div class="form-group">
                  <label>Home Number</label>
                  <input type="text" class="form-control" value="<?php echo $home;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Work Number</label>
                  <input type="text" class="form-control" value="<?php echo $work;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Fax</label>
                  <input type="text" class="form-control" value="<?php echo $fax;?>" readonly="readonly"  >
                </div>

                 <div class="form-group">
                  <label>Address1</label>
                  <input type="text" class="form-control" value="<?php echo $address1;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Address2</label>
                  <input type="text" class="form-control" value="<?php echo $address2;?>" readonly="readonly"  >
                </div>
                
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" value="<?php echo $citye;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>State/Province</label>
                  <input type="text" class="form-control" value="<?php echo $state_province;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Zip Code</label>
                  <input type="text" class="form-control" value="<?php echo $zip;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" value="<?php echo $countrye;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>User Type</label>
                  <input type="text" class="form-control" value="<?php echo $user_type;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Date joined</label>
                  <input type="text" class="form-control" value="<?php echo $datejoined;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Rating</label>
                  <input type="text" class="form-control" value="<?php echo $rating;?>" readonly="readonly"  >
                </div>
                <div class="form-group">
                  <label>Likes</label>
                  <input type="text" class="form-control" value="<?php echo $likes;?>" readonly="readonly"  >
                </div>
                
                
</form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
