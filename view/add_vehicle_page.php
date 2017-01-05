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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/sign_up.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
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
                        <h2 style="text-align:center">Enter the vehicle details by pressing enter</h2>
                    </div>
                <div class="container">
                    <form method="post"> 
                        <div class="jumbotron">
                            <input type="hidden" class="form-control" name="id" value=<?php echo $_SESSION['user_details']['id'];?> required>
                                <div class="input-field">
                                    <div class="question">
                                        <h4>1.Enter Vehicle Number</h4><br>
                                    </div>
                                    <input class="cls" id="tb1" type="text" name="vehicle_no" placeholder="Enter Vehicle Number" required><br><br>
                                </div>
                                <div class="input-field">
                                    <div class="question">
                                        <h4>2.Enter Vehicle RC Date</h4><br>
                                    </div>
                                    <input class="cls" id="tb2" type="date" name="vehicle_RC_date" placeholder="Enter Vehicle RC Date" required><br><br>
                                </div>
                                <div class="input-field">
                                    <div class="question">
                                        <h4>3.Enter Insurance Date</h4><br>
                                    </div>
                                    <input class="cls" id="tb3" type="date" name="insurance_date" placeholder="Enter Vehicle Insurance Date" required><br><br>
                                </div>
                                <div class="input-field">
                                    <div class="question">
                                        <h4>4.Enter Loan Due Date</h4><br>
                                    </div>
                                    <input class="cls" id="tb4" type="date" name="loan_due_date" v  placeholder="Enter Loan Due Date" required><br><br>
                                </div>
                                <div class="input-field">
                                    <div class="question">
                                        <h4>5.Enter Loan Due Amount</h4><br>
                                    </div>
                                    <input class="cls" id="tb5" type="text" name="loan_due_amount" placeholder="Enter Loan Due Amount" required><br><br>
                                </div>
                                <div class="input-field">
                                    <div class="question">
                                        <h4>6.Enter Reminder Date</h4><br>
                                    </div>
                                    <input class="cls" id="tb6" type="text" name="reminder_before" placeholder="Enter Reminder Date" required><br><br>
                                </div>
                                <div class="input-field">
                                    <div class="question">
                                        <h4>7.Enter Due Time Interval</h4><br>
                                    </div>
                                    <input class="cls" id="tb7" type="text" name="due_time_interval" placeholder="Enter Due Time Interval" required><br><br>
                                </div>
                                <div class="input-field">
                                    <div class="question">
                                        <h4>8. Enter Total Due For This Truck</h4><br>
                                    </div>
                                    <input class="cls" id="tb8" type="text" name="total_due" placeholder="Enter Total Due For this Truck" required><br><br>
                                </div>
                                <button style="width=150px; height=50px" class="btn btn-success" type="submit" formaction="../controllers/add_vehicle_controllers.php">submit</button><br><br><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
