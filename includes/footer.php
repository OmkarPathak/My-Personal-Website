
                    </div><!--  /.page-content-wrapper -->
                </div><!--  /.container-fluid -->
            </div><!--  /.row -->
        </div><!--  /.col-md-12 -->
        <!-- /#page-content-wrapper -->
	</div><!-- /.wrapper -->
    <!-- Content Section END -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.fancybox.js"></script>

     <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function() { 
        $("body").click(function(event) {
                // only do this if navigation is visible, otherwise you see jump in navigation while collapse() is called 
                 if ($(".navbar-collapse").is(":visible") && $(".navbar-toggle").is(":visible") ) {
                    $('.navbar-collapse').collapse('toggle');
                }
          });
    });

    function link(id) {
          //alert(id);
         
          $.ajax({
            dataType: "json",
            url: "retrieveData.php",
            type: "POST",
            data:{id:id},
            success: function(data){
              //alert(data);
              document.getElementById("postTitle").innerHTML = data.postTitle;
              document.getElementById("postAuthor").innerHTML = data.postAuthor;
              document.getElementById("postContent").innerHTML = data.postContent;
            }       
           });
        }
    </script>

</body>
</html>