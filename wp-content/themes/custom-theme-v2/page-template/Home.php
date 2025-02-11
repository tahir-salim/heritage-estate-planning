<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>


<?php get_header(); ?>
<div class="banner-slider">

    <?php $box_list = $banner_section['box_list'];?>
    <?php  foreach ($box_list as $boxlist) {?>
    <div class="mainBanner" style="background-image:url(<?php echo $boxlist['image']; ?>); ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $boxlist['heading']; ?></h1>
                        <p class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $boxlist['content']; ?></p>
                        <?php echo $boxlist['list']; ?>
                        <a href="<?php echo $boxlist['button_link']; ?>" class="theme-btn wow fadeInUp"
                            data-wow-duration="1.5s"><?php echo $boxlist['button_text']; ?></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-img">
                        <img src="<?php echo $boxlist['image_2']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>
<section class="hm-sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="common-heading">
                    <h3 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $first_section['heading']; ?></h3>
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $first_section['sub_heading']; ?></h2>
                </div>
                <p class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $first_section['content']; ?></p>
                <p class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $first_section['content_2']; ?></p>
            </div>
            <div class="col-md-8">
                <div class="srv-slider">

                    <?php $box_list = $first_section['box_list'];?>
                    <?php  foreach ($box_list as $boxlist) {?>
                    <div class="srv-box">
                        <a href="#">
                            <div class="img-box">
                                <img src="<?php echo $boxlist['image']; ?>" alt="">
                            </div>
                            <div class="txt">
                                <h4><?php echo $boxlist['heading']; ?></h4>
                                <p><?php echo $boxlist['content']; ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="do-img">
            <img src="<?php echo $first_section['image']; ?>" alt="">
        </div>
    </div>
</section>
<section class="new-sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="common-heading">
                    <h2><?php echo $second_section['heading']; ?></h2>
                    <h3><?php echo $second_section['sub_heading']; ?></h3>
                </div>
            </div>

            <?php $box_list = $second_section['box_list'];?>
            <?php  foreach ($box_list as $boxlist) {?>
            <div class="col-md-3">
                <div class="why-choose-box">
                    <span class="icon"><img src="<?php echo $boxlist['image']; ?>" alt=""></span>
                    <h4><?php echo $boxlist['heading']; ?></h4>
                    <p><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php get_template_part("includes/secure-retirement"); ?>
<?php get_template_part("includes/testimonial-sec"); ?>
<div class="expertise">
    <marquee direction="left" scrollamount="20">
        <?php echo get_field('heading',9);?>
    </marquee>
</div>
<section class="hm-sec6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="common-heading">
                    <h3 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo get_field('heading_2',9);?></h3>
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo get_field('heading_3',9);?>s</h2>
                </div>
                <div class="blog-slider">

                    <?php    $x=1;  $args = array( 'post_type' => 'blog' , 'posts_per_page' => '4','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                    <div class="blog-box">
                        <div class="img-box">
                            <img src="<?php the_post_thumbnail_url() ;?>" alt="">
                        </div>
                        <a href="#" class="txt">
                            <h4><?php the_title() ;?></h4>
                            <p><?php the_excerpt() ;?></p>
                            <h6><?php echo get_the_date('d M Y') ;?></h6>
                        </a>
                    </div>
                    <?php $x++; endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part("includes/cta-sec"); ?>
<?php get_footer(); ?>