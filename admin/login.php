<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container text-center">
    <legend><h1>Admin Login</h1></legend>
    <div class="wrapper">
        <div class="col-lg-3 col-md-3"></div>
        <form class="form-horizontal col-lg-6 col-md-6 col-sm-12 col-xs-12" role="form" action="loginAdmin.php" method="POST" >
                <?php 
                    session_start();
                    if(isset($_SESSION['error'])){
                        echo '  <div class="alert alert-danger alert-dissmisable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>'. $_SESSION['error'] . '</strong>
                                  </div>';
                    }
                ?>
                <div class="form-group" >
                    <label  class="col-lg-2 control-label">Username:</label>
                    <div class="col-sm-10 input-group">
                           <input type="text" class="form-control"  name="username" id="email" placeholder="Username" required>
                            <span class="input-group-btn"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-user"></span></button>
                    </div>
                </div>
                 <div class="form-group">
                    <label  class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-10 input-group">
                           <input type="password" class="form-control"  name="password" id="password" placeholder="Password" required>
                            <span class="input-group-btn"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-lock"></span></button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" value="Login" name="Login">
                Login</button>
            </form>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>