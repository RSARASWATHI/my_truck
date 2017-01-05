<?php
include_once'../model/curd_operations.php';
include_once '../model/db.php';
include_once '../controllers/common_functions.php';
$detail=get_vehicle_detail($_POST);
function get_vehicle_detail($_name){
	$con=db_connect();
	// print_r($_name['id']);
	$condition=" `vehicle_no` = '".$_name['id']."'";
	$selected_row=select('*','vehicle_detail',$condition,$con);
	return $selected_row;
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- <title> Vehicle Details Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/navbar-fixed-side.css" rel="stylesheet" /> -->
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/add_vehicle.js"></script>
    <script type="text/javascript" src="../js/sign_up.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
<body>
    <<nav class="navbar navbar-inverse">
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
                    $total_html = $total_html.
                    "<form method='post'>
                        <input type='hidden' name='id' value='".$value['vehicle_no']."'><br>
                        <li><button formaction='view.php' style='width:200px' text-align:'center'; >".$value['vehicle_no']."</button></li>
                    </form>";
                    }
                    echo "$total_html";
                    }
                    else
                    echo "<h3>Add Vehicle by Start Button</h3>";
                ?>
            </ul>
        </nav>
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
                	<h2 style="text-align:center">If you want to change any detail ,make the changes and click change button</h2>
        		</div>
                <div class="container">
            		<form method="post" action="../controllers/update_controllers.php">
            			<div class="jumbotron">
							<h1 style="text-align:left;">Vehicle Detail</h1>
							<table>
							<tbody>
								<input type="hidden" class="form-control" name="id" value=<?php echo $detail[0]['id'] ;?> required><br>
								<tr>
									<td><label>Vehicle Number </label>&nbsp;</td>
									<td>
									<label>
										<input type="text" class="form-control" name="Vehicle Number" value=<?php echo $detail[0]['vehicle_no'] ;?> disabled>
									</label><br><br>	
									</td>
								</tr>
								<tr>
									<td><label>RC date</label>&nbsp;</td>
									<td>
									<label>
										<input type="date" class="form-control" name="RC_date" value=<?php echo $detail[0]['RC_date'] ;?> required	>
									</label><br><br>
									</td>
								</tr>
								<tr>
									<td><label>Insurance date</label>&nbsp;</td>
									<td>
									<label>
										<input type="date" class="form-control" name="Insurance_date" value=<?php echo $detail[0]['Insurance_date'];?> required	>
									</label><br><br>
									</td>
								</tr>
								<tr>
									<td><label>Due date</label>&nbsp;</td>
									<td>
									<label>
										<input type="date" class="form-control"  name="Due_date" value=<?php echo $detail[0]['Due_date'] ;?> required>
									</label><br><br>
									</td>
								</tr>
								<tr>
									<td><label>Due amount</label>&nbsp;</td>
									<td>
									<label>
										<input type="text" class="form-control" name="Due_amount" value=<?php echo $detail[0]['Due_amount'];?> required	>
									</label><br><br>
									</td>
								</tr>
								<tr>
									<td><label>Reminder before</label>&nbsp;</td>
									<td>
									<label>
										<input type="text" class="form-control" name="Reminder_before" value=<?php echo $detail[0]['Reminder_before'] ;?> required>
									</label><br><br>
									</td>
								</tr>
								<tr>
									<td><label>Due interval</label>&nbsp;</td>
									<td>
									<label>
										<input type="text" class="form-control" name="Due_interval" value=<?php echo $detail[0]['Due_interval'] ;?> required>
									</label><br><br>
									</td>
								</tr>
								<tr>
									<td><label>Total dues</label>&nbsp;</td>
									<td>
									<label>
										<input type="text" class="form-control" name="Total_dues" value=<?php echo $detail[0]['Total_dues'];?> required	>
									</label><br><br>
									</td>
								</tr>
								<input type="hidden" class="form-control" name="user_id" value=<?php echo $detail[0]['user_id'] ;?> required>
								<tr>
									<td>
    								<button type="submit" class="btn btn-success">change</button></td>
    							</tr>

							</tbody>
							</table>
						</div>
					</form>
            	</div>
        	</div>
    	</div>
	</div>
</div>
</body>
</html>





