  <?php  
    include('../includes/headerForPosts.php');
  ;?>
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