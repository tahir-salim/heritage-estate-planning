<?php /** * Template Name: Contact Template */ ?>
<?php get_header(); ?>

<section class="cnt-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="common-heading">
                    <h2>LET'S GET IN TOUCH!</h2>
                </div>
                <div class="cnt-form">
                <?php echo do_shortcode('[contact-form-7 id="62dd5a8" title="Contact form 1"]');?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="cnt-pad">
                    <div class="cnt-info">
                        <div class="info">
                            <h6>Email us</h6>
                            <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                        </div>
                        <div class="info">
                            <h6>Call us</h6>
                            <a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                            <a href="tel:<?php echo $options['phone_number2'];?>"><?php echo $options['phone_number2'];?></a>
                        </div>
                        <div class="info">
                            <h6>Find us</h6>
                            <p><?php echo $options['address'];?></p>
                        </div>
                    </div>
                    <ul class="ft-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><img src="<?php echo get_field('image',9);?>" alt=""></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>