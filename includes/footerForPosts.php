
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

    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
      });
    });

    $(document).ready(function(){
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a, footer a[href='#myPage'], #home a[href='#python']").on('click', function(event) {

           // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
              });
            } // End if
          });
        })
    </script>

</body>
</html>