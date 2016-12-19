<html>
<head>
    <title>login_page</title>
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
        <div class="form">
            <div class="center1">
                <ul class="tab-group">
                    <li class="tab active"><a href="#login">login</a></li>
                    <li class="tab"><a href="index.php">Sign up</a></li>
                </ul>
                 <?php 
        if(isset($_GET['type'])){
          if($_GET['type'] == "login_error"){
            echo '<p style="color: whitesmoke;text-align: center;font-family: monospace;">Account is unavaliable. Signup your Account</p>';
         }
       } 
       ?>
                <div id="login">
                    <form action="/" method="post">
                        <div class="field-wrap">
                            <div class="input-group">
                                <span class="input-group-addon">+91</span>

<<<<<<< HEAD
                                <input  type="text" onkeypress="return isNumber(event)" class="form-control" name="Mobile Number" placeholder="Mobile Number" maxlength="10" required autofocus>
                               <br>
=======
                                <input type="text" class="form-control" name="MobileNumber" placeholder="Mobile Number" maxlength="10" required>
                            
                                <br>
>>>>>>> 3d5baad4e722e60261bb857421ccb50ff3a11025
                            </div>
                        </div>
                        <button type="submit" class="button button-block" formaction="../controllers/login_controllers.php">login</button>
                    </form>
                </div>
                <!-- login end -->
            </div>
            <!-- center1 -->
        </div>
        <!-- /form -->
    </div>
    <!-- container end -->
</body>

</html>
