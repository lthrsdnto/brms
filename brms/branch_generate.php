<?php include 'connection.php'; ?>
<!-- <?php 
  include 'includes/timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?> -->
<!-- <?php include 'includes/header.php'; ?> -->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!--   <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?> -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       SAN BARTOLOME BRANCH REPORTS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Generate Report</a></li>
      
      </ol>
    </section>

    <!-- SAN BARTOLOME -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <!-- Small boxes san bartolome -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM materials";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
<p>Total Clerks</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM students where branch ='San Bartolome' and status = 'active'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
  <p>Total Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="sbgenstudent.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM returns WHERE date_return = '$today'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
 <p>Total Employees</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         </div>
  
<!-- SAN FRANCISCO -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       SAN FRANCISCO BRANCH REPORTS
      </h1>
     
    </section>
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <!-- Small boxes san bartolome -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM books";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
<p>Total Clerks</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM students where branch ='San Francisco' and status = 'active'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
  <p>Total Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="sbgenstudent.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM returns WHERE date_return = '$today'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
 <p>Total Employees</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         </div>

<!-- BATASAN -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BATASAN BRANCH REPORTS
      </h1>
     
    </section>
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <!-- Small boxes san bartolome -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM books";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
<p>Total Clerks</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM students where branch ='Batasan' and status = 'active'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
  <p>Total Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="sbgenstudent.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM returns WHERE date_return = '$today'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
 <p>Total Employees</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

</body>
</html>
