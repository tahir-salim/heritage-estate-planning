<?php $fourth_section = get_field('fourth_section',9);?>
<section class="hm-sec5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="common-heading">
                    <h3 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $fourth_section['heading'];?></h3>
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $fourth_section['sub_heading'];?></h2>
                </div>
                <p class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $fourth_section['content'];?></p>
                <span class="quote wow fadeInUp" data-wow-duration="1.5s"><i class="fas fa-quote-left"></i></span>
            </div>
            <div class="col-md-6">
                <div class="testi-slider">

                    <?php $box_list = $fourth_section['box_list'];?>
                    <?php  foreach ($box_list as $boxlist) {?>

                    <div class="testi-box">
                        <p><?php echo $boxlist['content']; ?></p>
                        <div class="clt">
                            <span class="auth"><img src="<?php echo $boxlist['image']; ?>" alt=""></span>
                            <div class="txt">
                                <h5><?php echo $boxlist['heading']; ?></h5>
                                <h6><?php echo $boxlist['sub_heading']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>