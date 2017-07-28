<?php 
    include('connect.php');
    include('../includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $PROJECT_TITLE;?></title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/customForPages.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="10">
<div id="wrapper" style="margin-top:50px;">

        <nav class="navbar navbar-default navbar-fixed-top">
                  <div class="container">
                        <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                              </button>
                          <a class="navbar-brand" href="../index.php">
                                        <?php 
                                            $query = 'SELECT * FROM menuforposts WHERE menuforpostsID = 1';
                                            $result = $con->query($query);
                                            $row = $result->fetch_assoc();
                                            echo $row['navbarBrand'];
                                        ?>              
                       </a>
                        </div><!-- ./navbar-header-->
                        <div id="navbar" class="navbar-collapse collapse">
                              <ul class="nav navbar-nav" id="navbar-links">
                                    <?php
                                        getMenu('menuforaboutme') 
                                     ?>
                              </ul>
                        </div><!--/.nav-collapse -->
                  </div><!-- ./container-->
                </nav>
