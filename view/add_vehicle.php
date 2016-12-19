<?php 
include_once'../model/curd_operations.php';
include_once '../model/db.php';
include_once '../controllers/common_functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>otp verification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="logo">
                    <img src="../images/image1.jpg" alt="mytruck">

                    <span>my truck</span>
               
            </div>
            
        </div>
    </nav>
 
    
    
        <div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-lg-2">
      <nav class="navbar navbar-default navbar-fixed-side">
      <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                       <h1 text-align:center;> Vehicle <h1>
                </li>
                <?php $vehicle_no=get_vehicle_name($_SESSION['phoneno']);
                if(is_array($vehicle_no)){
                  $total_html="";
                  foreach ($vehicle_no as $value) {
                    $total_html = $total_html."<form method='post'>
                    <input type='hidden' name='id' value='".$value['vehicle_no']."'>
                  <li><button formaction='view.php' style='width:245px' text-align:'center'; >".$value['vehicle_no']."</button></li></form>";
                  }
                  echo "$total_html";
                }
                else
                  echo "<h3>Add Vehicle by Start Button</h3>";
                

               ?>
            </ul>
        <!-- normal collapsible navbar markup -->
      </nav>
    </div>
    <div class="text-center">
    <div class="col-sm-9 col-lg-10">
      <!-- your page content -->
      <h1>welcome <?php echo get_user_name($_SESSION['phoneno']); ?></h1>
       </h1>
       click start to enter the vehicle details
        <button type="submit" class="btn btn-success" ><a href="add_vehicle_page1.php"> start</a></button>
    </div>
  </div>
  </div>
</div>
</body>
</html>

