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
    <script type="text/javascript" src="../js/sign_up.js"></script>
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
        </div>
    </nav>
    <div class="container">
    <h1>vehicle details</h1>
     <input type="hidden"  class="form-control" name="id" value=<?php echo get_user_id($_SESSION['phoneno'])?>>
     <br>
    <input class="form-control" type="text" name="vehicle_no" placeholder="Enter Vehicle Number" required>
    <br>
    <input class="form-control" type="date" name="vehicle_RC_date" placeholder="Enter Vehicle RC Date" required>
    <br>
    <input class="form-control" type="date" name="insurance_date" placeholder="Enter Vehicle Insurance Date" required>
    <br>
    <input class="form-control" type="date" name="loan_due_date" placeholder="Enter Loan Due Date" required>
    <br>
    <input class="form-control" type="text" name="loan_due_amount" placeholder="Enter Loan Due Amount" required>
    <br>
    <input class="form-control" type="text" name="reminder_before" placeholder="Enter Reminder Date" required>
    <br>
    <input class="form-control" type="text" name="due_time_interval" placeholder="Enter Due Time Interval" required>
    <br>
    <input class="form-control" type="text" name="total_due" placeholder="Enter Total Due For this Truck" required>
    
    <button class="btn btn-success form-control" type="submit" formaction="../controllers/add_vehicle_controllers.php">submit</button>
    
    <button class="btn btn-danger form-control" >Remove</button>
    </div>
  
</body>

</html>
