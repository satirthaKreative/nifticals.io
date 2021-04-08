
<footer>
    <div class="foot_info">
        <div class="container">   
            <div class="row">
                <div class="col-md-4">
                    <h3>About Us</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3>Newsletter</h3>
                    <form>
                        <input type="email" name="" placeholder="Email Address">
                        <input type="submit" name="" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_menu">
        <div class="container">   
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 text-right">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_bot">
        <div class="container">   
            <div class="foot_bot_con">
                <div class="row">
                    <h5>Copyright  2021 | All right reserved</h5>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	$('#navigation nav').slimNav_sk78();
	var owl = $('.main-slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],

    });	
    var owl = $('.testi_slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: true,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
    });
    var owl = $('.product_rolling');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items:4,
        itemsMobile:[568,2],
        itemsTablet:[768,3],
        itemsTablet:[1024,3],
        center: false,
        nav: true,
        thumbs: true,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
        responsive: {
            0: {
              items: 1
            },

            600: {
              items: 2
            },

            1024: {
              items: 3
            },

            1366: {
              items: 4
            }
          }
    });

    if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });        
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>



</body>
</html>
