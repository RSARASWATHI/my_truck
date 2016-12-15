<?php 
session_start();
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
    <div class="form">
    <form method="post">
    <div class="field-wrap">
     <?php 
        if(isset($_GET['type'])){
          if($_GET['type'] == "login_error"){
            echo '<p style="color: whitesmoke;text-align: center;font-family: monospace;">Enter Valid Code</p>';
         }
       } 
       ?> <?php print_r($_SESSION['$key']);?>
    	<input type="text" name="otp" placeholder="enter the otp" class="form-control" required>
    	</div>
    	<input type="submit" name="submit" value="continue" class="button button-block" formaction="../controllers/verification_controllers.php">
    </form>
</div>
    </div>
