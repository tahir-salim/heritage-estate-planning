<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-nav">
                    <a href="<?php echo site_url();?>" class="flogo">
                        <img src="assets/images/logo.png" alt="">
                        Heritage Estate Planning
                    </a>
                    <!-- <ul class="ft-links">
                        <li><a href="./">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="what-we-do.php">What We Do</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'ft-links' ) ); ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <p><?php echo $options['footer_about'];?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget ft-pad">
                    <div class="ft-info">
                        <span class="icon"><i class="fas fa-phone"></i></span>
                        <div class="txt">
                            <a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                            <a href="tel:<?php echo $options['phone_number2'];?>"><?php echo $options['phone_number2'];?></a>
                        </div>
                    </div>
                    <div class="ft-info">
                        <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                        <div class="txt">
                            <p><?php echo $options['address'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <ul class="ft-social">
                        <li><a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $options['youtube'];?>"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="<?php echo $options['twitter'];?>"><img src="<?php echo get_field('image',9);?>" alt=""></a>
                        </li>
                        <li><a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <p><?php echo $options['copyright'];?></p>
    </div>
</div>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->

<?php wp_footer(); ?>
<script>
  $(".banner-slider").slick({
        dots: false,
        arrows:true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        fade:true,
        autoplay:true,
        autoplaySpeed:3000,
        prevArrow:"",
        nextArrow: "<span class='arr-right'><img src='<?php echo get_template_directory_uri();?>/assets/images/arrow.png'></span>"
    });
</script>
</main>
</body>

</html>