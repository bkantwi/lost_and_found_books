

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lost and Found System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=8hNqXI-gzdDdhk9KMSoLAWTa5d-V97eT6oarWDFivzxHO8mPjF-x9dMtOaLhC9ICpo7lfQWbrwcuNC3d20mn9ebAXPv-SUHCnxAQknKSyWXfQTYIjk07H_EaPIU6zeFg" charset="UTF-8"></script><script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=yenS3mscfV0vsFqrm4en2iFGM1WVbv-92ah3nC2oQztB8v5qEZU2fL9NG5FDqG8ki40tr0DNi2dOMvcZfxES6b74dDxe7RuWmCKUjLWzCYU" charset="UTF-8"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lost and Found</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
    <img src="dist/img/avatar.png" class="img-square elevation-3" style="width:30px;  border-radius:10%;" alt="User Image">        </div>
        <div class="info">
          <a href="#" class="d-block" style="margin-top: -12px">Junio K. Krem</a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> Member</a>
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="lostandfounditem.php" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Lost and Found Item
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="report.php" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Report
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report Lost and Found Item</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Report</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
        <div class="row">
     
          <div class="col-md-8" style="margin-left: 18%">
            <div class="card">
              <div class="card-header p-2" align="center">
              <h4><b>ITEM DETAILS</b></h4>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                    <!-- Post -->
                    <div class="post">
                      <form class="form-horizontal">
                     <div class="row">
                    <div class="col-4" style="margin-top: -3%">
                        <label>Date Found:</label>
                    <input type="date" name="date_found" class="form-control" placeholder=".col-5">
                  </div>
                   <div class="col-5">
                   </div>
                  <div class="col-3" style="margin-top: -3%">
                    <label>Time Found:</label>
                    <input type="time" name="time_found" class="form-control" placeholder=".col-5">
                  </div>
                    <!-- <div class="col-12" style="margin-top: 6%"> -->
                      <!-- <div class="form-group">
                        <select class="form-control">
                          <option disabled="" selected="">Select Post Category</option>
                          <option>option 2</option>
                          <option>option 3</option>
                        </select>
                      </div> -->
                    <!-- </div> -->
                  <!-- <div class="col-12" >
                    <input type="text" class="form-control" item_ placeholder="Item Type ...">
                  </div> -->
                  <div class="col-12" style="margin-top: 3%">
                    <textarea class="form-control" rows="2" name="book_details" placeholder="Book Description and Details ..."></textarea>
                  </div>
                  <div class="col-12" style="margin-top: 3%">
                  <input type="file" class="form-control" name="book_image" placeholder="Location Found ...">
                  </div>
                  <div class="col-12" style="margin-top: 3%">
                    <input type="text" class="form-control" name="location_found" placeholder="Location Found ...">
                  </div>
                  <div class="col-12" style="margin-top: 3%">
                    <input type="text" class="form-control" name="contact" placeholder="Phone Number ...">
                  </div>
                  <div class="col-12" style="margin-top: 3%">
                    <input type="text" class="form-control" name="state" placeholder="Lost or Found ...">
                  </div>
                   
                    <!-- <div class="col-12">
                    <textarea class="form-control" rows="2" placeholder="Remarks ..."></textarea>
                  </div> -->
                </div>
                    
                      <div class="form-group row">
                          <button type="submit" class="btn btn-info btn-sm" style="margin-left: 25%; margin-top: 1%; width: 50%; height: 40px;"><i class="fa fa-check"></i> Submit</button>
                      </div>
                    </form>
                      </div>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <strong>Footer <a href="">Lost and Found System</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Footer</b>
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
