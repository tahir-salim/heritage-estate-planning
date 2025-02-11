<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-end">
                        <div class="top-content">
                            <ul class="top-info">
                                <li><a href="tel:<?php echo $options['phone_number'];?>"><span class="icon"><i
                                                class="fas fa-phone"></i></span>
                                        <?php echo $options['phone_number'];?></a></li>
                                <li><a href="mailto:<?php echo $options['email'];?>"><span class="icon"><i
                                                class="fas fa-comments-alt"></i></span>
                                        <?php echo $options['email'];?></a>
                                </li>
                            </ul>
                            <ul class="top-social">
                                <li><a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="<?php echo $options['youtube'];?>"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="<?php echo $options['twitter'];?>"><img
                                            src="<?php echo get_field('image',9);?>" alt=""></a></li>
                                <li><a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-4">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="assets/images/logo.png" alt="">
                            Heritage Estate Planning
                        </a>
                    </div>
                    <div class="col-md-8 text-end">
                        <div class="menu-b">
                            <div class="menu-Bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="what-we-do.php">What We Do</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <?php if(is_home() || is_front_page() ){?>


        <?php } else{?>

        <?php $banner_section = get_field('banner_section'); ?>
        <div class="mainBanner innerBanner" style="background-image:url(<?php echo $banner_section['image'];?>); ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="banner-content">
                            <h2><?php echo $banner_section['heading'];?></h2>
                            <?php echo $banner_section['list'];?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-img">
                            <img src="<?php echo $banner_section['image_2'];?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>