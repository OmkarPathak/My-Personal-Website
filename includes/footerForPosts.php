
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
     function modal(id){
        var data={"id":id};
        $('#modal1').remove();
        jQuery.ajax({
            url:"modal.php",
            method: "POST",
            data : data,
            success: function(data){
                jQuery('body').append(data);
                jQuery('#modal1').modal('toggle');      
            },

            error: function(){
                alert('Something went wrong!');
            }

        });
    }

    $(document).ready(function() { 
        $("body").click(function(event) {
                // only do this if navigation is visible, otherwise you see jump in navigation while collapse() is called 
                 if ($(".navbar-collapse").is(":visible") && $(".navbar-toggle").is(":visible") ) {
                    $('.navbar-collapse').collapse('toggle');
                }
          });
    });
    </script>

</body>
</html>