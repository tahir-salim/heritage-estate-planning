<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>

<?php get_header(); ?>

<section class="hm-sec1 abt-sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="common-heading">
                    <h2><?php echo $first_section['heading'];?></h2>
                    <!-- <h2>abundance for life</h2> -->
                </div>
                <p><?php echo $first_section['content'];?></p>
                <?php echo $first_section['list'];?>
            </div>
        </div>
        <div class="row">

            <?php $box_list = $first_section['box_list'];?>
            <?php  foreach ($box_list as $boxlist) {?>

            <div class="col-md-6">
                <div class="abt-content">
                    <h4><?php echo $boxlist['heading']; ?></h4>
                    <p><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<section class="hm-sec3 abt-sec2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="common-heading">
                    <h2><?php echo $second_section['heading'];?></h2>
                </div>
                <p><?php echo $second_section['content'];?></p>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo $second_section['image'];?>" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <?php $box_list = $second_section['box_list'];?>
            <?php  foreach ($box_list as $boxlist) {?>

            <div class="col-md-6">
                <div class="abt-pad">
                    <div class="common-heading">
                        <h2><?php echo $boxlist['heading']; ?></h2>
                    </div>
                    <p><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<section class="abt-sec3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="common-heading">
                    <h2><?php echo $second_section['heading_2'];?></h2>
                </div>
                <?php echo $second_section['list'];?>
                <a href="<?php echo $second_section['button_link'];?>"
                    class="theme-btn"><?php echo $second_section['button_text'];?></a>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo $second_section['image_2'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part("includes/secure-retirement"); ?>
<?php get_template_part("includes/cta-sec"); ?>
<?php get_footer(); ?>