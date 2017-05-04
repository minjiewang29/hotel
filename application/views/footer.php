 <!-- Footer -->
    <div class="w3l-footer">
        <div class="container">
            <div class="footer-info-agile">
                <div class="col-md-2 footer-info-grid links">
                    <h4>快速链接</h4>
                    <ul>
                        <li><a href="home.php">首位</a></li> 
                        <li><a href="about.html">预订</a></li> 
                        <li><a href="codes.html">酒店图集</a></li> 
                        <li><a href="gallery.html">非洲游记</a></li> 
                        <li><a href="contact.html">关于我们</a></li> 
                    </ul>
                </div>
                <div class="col-md-3 footer-info-grid address">
                    <h4>地址</h4>
                    <address>
                        <ul>
                            <li>Mexico United States 3000</li>
                            <li>40019 Honey Street</li>
                            <li>BO,Mexico</li>
                            <li>Telephone : +1 (734) 123-4567</li>
                            <li>Email : <a class="mail" href="mailto:mail@example.com">info(at)example.com</a></li>
                        </ul>
                    </address>
                </div>
                <!--
                <div class="col-md-3 footer-grid">
                   <h4>Instagram</h4>
                    <div class="footer-grid-instagram">
                        <a href="#"><img src="<?php echo base_url('asset/images/f1.jpg');?>" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid-instagram">
                        <a href="#"><img src="<?php echo base_url('asset/images/f2.jpg');?>" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid-instagram">
                        <a href="#"><img src="<?php echo base_url('asset/images/f3.jpg');?>" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid-instagram">
                        <a href="#"><img src="<?php echo base_url('asset/images/f4.jpg');?>" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                -->
                <div class="col-md-4 footer-info-grid">
                    <div class="connect-social">
                        <h4>联系我们</h4>
			<section class="social">
                            <ul>
                                <li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </section>
                    </div>
                </div>
		<div class="clearfix"></div>
            </div>
            <!--
            <div class="connect-agileits newsletter">
                <h4>Newsletter</h4>
                <p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
                </p>
                <form action="#" method="post" class="newsletter">
                        <input class="email" type="email" placeholder="Your email address..." required="">
                        <input type="submit" class="submit" value="Subscribe">
                </form>
            </div>
            -->
        </div>
    </div>
    
    <div class="w3agile_footer_copy">
        <p>Copyright &copy; <?php echo date('Y')?>.Minjie Wang All rights reserved.</p>
    </div>
    
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

    
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery-2.1.4.min.js');?>"></script>
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(            
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');        
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');       
                }
            );
        });
    </script>
    <!-- //Dropdown-Menu-JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.zoomslider.min.js');?>"></script>
    <!-- search-jQuery -->
    <script src="<?php echo base_url('asset/js/main.js');?>"></script>

    <!--/script-->
    <script src="<?php echo base_url('asset/js/simplePlayer.js');?>"></script>
    <script>
            $("document").ready(function() {
                    $("#video").simplePlayer();
            });
    </script>
    <!-- flexSlider -->
    <script defer src="<?php echo base_url('asset/js/jquery.flexslider.js');?>"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                  $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- Calendar -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/jquery-ui.css');?>" />
    <script src="<?php echo base_url('asset/js/jquery-ui.js');?>"></script>
    <script>
        $(function() {
              $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
        });
    </script>
    <!-- //Calendar -->
    
    <script type="text/javascript" src="<?php echo base_url('asset/js/move-top.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/easing.js');?>"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){		
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <script src="<?php echo base_url('asset/js/bootstrap.js');?>"></script>
</body>
</html>