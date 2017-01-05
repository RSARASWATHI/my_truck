<?php
include_once '../controllers/common_functions.php';
?><html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="form">
        <?php
         if(isset($_GET['type'])){
          if($_GET['type'] == "code_error"){
            echo '<p style="color: whitesmoke;text-align: center;font-family: monospace;">Code Expired!Signup or Login Again</p>';
         }
         
       } ?>
                <ul class="tab-group">
                    <li class="tab active"><a href="#signup">Sign Up</a></li>
                    <li class="tab"><a href="login.php">Log In</a></li>
                </ul>
                  <?php 
        if(isset($_GET['type'])){
          if($_GET['type'] == "login_error"){
            echo '<p style="color: whitesmoke;text-align: center;font-family: monospace;">Already Exist!Go To Login</p>';
         }
       } 
       ?>
                <div id="signup">
                   <form method="post">
                       <div class="field-wrap">
                           <input type="text/css" class="form-control" name="Name" placeholder="Name" required autofocus>
                           <br>
                       </div>
                       <div class="field-wrap">
                           <div class="input-group">
                               <span class="input-group-addon">+91</span>
                               <input  type="text" onkeypress="return isNumber(event)" class="form-control" name="mobile_number" placeholder="mobile_number" maxlength="10" required >
                               <br>
                           </div>
                       </div>
                       <button type="submit" name="submit" value="signup" class="button button-block"  formaction="../controllers/signup_controllers.php">Signup</button>
                   </form>
                </div>
        </div>
    </div>
</body>

</html>
