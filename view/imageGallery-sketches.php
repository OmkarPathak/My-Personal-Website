<?php 
    include('../includes/connect.php');
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
    <link href="../css/jquery.fancybox.css" rel="stylesheet">
    
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
                                        $query = 'SELECT * FROM menuforposts';
                                        $result = $con->query($query);
                                        while($row = $result->fetch_assoc()){
                                    ?>
                                        <li>
                                            <a href="<?php echo $row['menuforpostsLink'] ?>" id="<?php echo $row['menuforpostsLink'] ?>"><?php echo $row['menuforpostsName']; ?></a>
                                        </li>
                                        <?php } ?>
                              </ul>
                        </div><!--/.nav-collapse -->
                  </div><!-- ./container-->
                </nav>


    <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <br>
                    <div class="list-group gallery">
                        
                        <?php 
                            $query2 = 'SELECT * FROM images WHERE category = "sketching"';
                            $result2 = $con->query($query2);
                            while($row2 = $result2->fetch_assoc()){
                        ?>
                                  <div class='col-sm-12 col-xs-12 col-md-4 col-lg-4' style="margin-bottom: 20px;">
                                  <a data-fancybox="gallery" href="<?php echo $row2['imagePath']; ?>">
                                      <img class="img-responsive" alt="<?php echo $row2['imageAlt']; ?>" src="<?php echo $row2['imagePath']; ?>">
                                      <!--<div class='text-right'>
                                          <small class='text-muted'>Image Title</small>
                                      </div>  text-right / end -->
                                  </a>
                                  </div> <!-- col-6 / end -->
                        <?php  } ?>
                        
                    </div>

      <script type="text/javascript">
        $(document).ready(function(){
            //FANCYBOX
            //https://github.com/fancyapps/fancyBox
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });          
      </script>
  <?php  include('../includes/footer.php');?>