 <!-- ======= Footer Area Start ======= -->
        <footer class="footer-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="footer">
                       <a href="find-us.php">About us</a>
                       <p style="font-family:Veronica">We are a Design & Build firm
                          specialized in Design & Build projects
                            We Provide complete solution for interiors, Interior
                          design, project management & execution work for all
                          kind of commercials and residential projects</p>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="footer">
                       <a href="find-us.php">Address</a>
                       <li><img src="img/location/location.png" style="height:25px; margin-bottom:0"><span style="font-family:Veronica"> 2B-19,2nd Floor,Phoenix Paragon Plaza,Phoenix Marketcity kurla,LBS road kurla west Mumbai -400070.</span></li>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="index.php"><img src="img/footer-logo.png" class="img-responsive center-block" /></a>
                        <div class="copy-right-text">
                            <!-- © 2020 Up Studio Design. All Rights Reserved. Designed By Cosmic Web Solution -->
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="footer">
                       <a href="find-us.php">contact</a>
                       <li><i class="fa fa-mobile" aria-hidden="true"> (+91) 98203 05770</i></li>
                       <li><i class="fa fa-phone" aria-hidden="true"> 022 46016904</i></li>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class=" footer">
                            
                            <div class="social-link1">
                               <a href="https://www.instagram.com/upstudiodesign2019/" target="_blank"><i id="insta" class="fab fa-instagram" ></i></a>
                                <a href="https://www.facebook.com/upstudiodesign.co.in/" target="_blank"><i id="face" class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/company/upstudiodesign1" target="_blank"><i id="link" class="fab fa-linkedin-in"></i></a>
                                <a href="https://in.pinterest.com/upstudiodesign/" target="_blank"><i id="pin" class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.youtube.com/channel/UC33AtT8bn67f7uTOfJ6Rnpw" target="_blank"><i id="youtube" class="fab fa-youtube"></i></a>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
             
        </footer>
        <!-- ======= Footer Area End ======= -->

    </div>
    <!-- /.body wraper -->
    
    <!-- All JS Files -->
    <!-- ====== JQuery js ======= -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- ====== bootstrap js ======= -->
    <script src="js/bootstrap.min.js"></script>
    <!-- ====== plugins js ======= -->
    <script src="js/plugins.js"></script>
    <!-- ====== owl carousel js ======= -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- ====== masonry js ======= -->
    <script src="js/masonry.pkgd.min.js"></script>
    
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- ====== isotope js ======= -->
    <script src="js/isotope.pkgd.min.js"></script>
    
    <!-- ====== custom js ======= -->
    <script src="js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    
<script>
    

/* Latest compiled and minified JavaScript included as External Resource */

$(document).ready(function(){
		/* set default show to towera  */
		$(".filter").not('.hdpe').hide('3000');
    $('.filter').filter('.hdpe').show('3000');
    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
    
    $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>

</body>

</html>