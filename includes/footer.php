
        <!-- /#page-content-wrapper -->
	</div><!-- /.wrapper -->
    <!-- Content Section END -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.fancybox.js"></script>
    <script src="../js/typed.min.js"></script>

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

      var typed3 = new Typed('.element', {
         strings: ['SOME OF MY ACHIEVEMENTS', 'SOME OF MY PROJECTS', 'SOME OF MY ACADEMICS', 'SOME OF MY INTERNSHIPS'],
         typeSpeed: 100,
         backSpeed: 100,
         smartBackspace: true, // this is a default
         loop: true,
       });
    </script>

</body>
</html>