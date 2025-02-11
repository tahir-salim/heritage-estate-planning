<?php /** * Template Name: Services Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="srv-sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="common-heading">
                    <h2><?php echo $first_section['heading'];?></h2>
                </div>
                <h3><?php echo $first_section['heading_2'];?></h3>
                <h4><?php echo $first_section['heading_3'];?></h4>
            </div>

            <?php $box_list = $first_section['box_list'];?>
            <?php  foreach ($box_list as $boxlist) {?>

            <div class="col-md-6">
                <div class="srv-box">
                    <a href="#">
                        <div class="img-box">
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                        </div>
                        <div class="txt">
                            <h4><?php echo $boxlist['heading']; ?></h4>
                            <p><?php echo $boxlist['content']; ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php }?>
            <div class="col-md-12">
                <h3><?php echo $first_section['heading_4'];?></h3>
                <p><?php echo $first_section['content'];?></p>
                <p><?php echo $first_section['content_2'];?></p>
                <h3><?php echo $first_section['heading_5'];?></h3>
                <p><?php echo $first_section['content_3'];?></p>
                <p><?php echo $first_section['content_4'];?></p>
            </div>
            <div class="col-md-12">
                <div class="srv-second">
                    <div class="common-heading">
                        <h2><?php echo $first_section['heading_6'];?></h2>
                    </div>
                    <p><?php echo $first_section['content_5'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part("includes/secure-retirement"); ?>
<?php get_template_part("includes/testimonial-sec"); ?>
<?php get_footer(); ?>