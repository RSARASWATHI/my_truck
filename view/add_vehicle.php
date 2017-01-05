<?php 
include_once'../model/curd_operations.php';
include_once '../model/db.php';
include_once '../controllers/common_functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/add_vehicle.js"></script>
    <script type="text/javascript" src="../js/sign_up.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <div class="logo">
                <img src="../images/image1.jpg" alt="mytruck">
                <span>my truck</span>
      </div>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign_out.php" style="color:#ffffff;""><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
    </ul>
  </div>
</nav>


<div id="wrapper">

        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                    <li class="sidebar-brand">
                        <a href="#home"><span class="fa fa-home solo">Vehicle List</span></a>
                    </li>
                    <?php $vehicle_no=get_vehicle_name($_SESSION['user_details']['phonenumber']);
                if(is_array($vehicle_no)){
                  $total_html="";
                  foreach ($vehicle_no as $value) {
                    $total_html = $total_html."<form method='post'>
                    <input type='hidden' name='id' value='".$value['vehicle_no']."'><br>
                  <li><button formaction='view.php' style='width:200px' text-align:'center'; >".$value['vehicle_no']."</button></li></form>";
                  }
                  echo "$total_html";
                }
                else
                  echo "<h3>Add Vehicle by Start Button</h3>";
                
               ?>
        </div>
        <div id="page-content-wrapper">
            <div class="content-header">
                <h1 id="home">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                    Vehicle details
                </h1>
            </div>
            <div class="page-content inset" data-spy="scroll" data-target="#spy">
                <div class="row">
                        <div class="jumbotron">
                  <h1 style="text-align:center">welcome <?php echo $_SESSION['user_details']['name'] ?></h1>
       <p style="text-align:center">click start to enter the vehicle details
        <button type="submit" class="btn btn-success" ><a href="add_vehicle_page.php" style="color:black;"> Add Vehicle</a></button></p>
            <!-- </div> -->
        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>