<?php /** * Template Name: What we do Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="we-do1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="common-heading">
                    <h2><?php echo $first_section['heading'];?></h2>
                    <h3><?php echo $first_section['heading_2'];?></h3>
                </div>
                <p><?php echo $first_section['content'];?></p>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="we-do2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo $first_section['image_2'];?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="common-heading">
                    <h2><?php echo $first_section['heading_3'];?></h2>
                </div>
                <p><?php echo $first_section['content_2'];?></p>
            </div>
        </div>
    </div>
</section>
<section class="we-do3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="common-heading">
                    <h2><?php echo $first_section['heading_4'];?></h2>
                </div>
                <p><?php echo $first_section['content_3'];?></p>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo $first_section['image_3'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="we-do4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="common-heading">
                    <h2><?php echo $first_section['heading_5'];?></h2>
                </div>
                <p><?php echo $first_section['content_4'];?></p>
            </div>
        </div>
    </div>
</section>
<?php get_template_part("includes/secure-retirement"); ?>
<?php get_template_part("includes/testimonial-sec"); ?>
<?php get_footer(); ?>