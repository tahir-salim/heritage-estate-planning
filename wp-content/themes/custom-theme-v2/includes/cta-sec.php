<?php $fifth_section = get_field('fifth_section',9);?>
<section class="hm-sec7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="common-heading">
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $fifth_section['heading'];?></h2>
                </div>
                <p class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $fifth_section['content'];?>
                </p>
                <a href="<?php echo $fifth_section['button_link'];?>" class="theme-btn wow fadeInUp"
                    data-wow-duration="1.5s"><?php echo $fifth_section['button_text'];?></a>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo $fifth_section['image'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>