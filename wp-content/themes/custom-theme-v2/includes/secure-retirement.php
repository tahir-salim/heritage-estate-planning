<?php $third_section = get_field('third_section',9);?>
<section class="hm-sec4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="common-heading">
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $third_section['heading'];?></h2>
                </div>
                <p class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $third_section['content'];?></p>
                <a href="<?php echo $third_section['link'];?>" class="vid-box" data-fancybox="media">
                    <img src="<?php echo $third_section['image'];?>" alt="">
                </a>
            </div>
        </div>
    </div>
</section>