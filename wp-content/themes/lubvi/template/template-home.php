<?php
/**
* Template Name: Home
*
* @package lubvi
* @since lubvi 1.0
*/
?>

<?php get_header(); ?>

<!DOCTYPE HTML>
<html lang="eng">
<body>
    <!--slider-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
            
                <h1 class="display-4"><?php the_field('title_slider'); ?></h1>
            </div>
        </div>
    </div>
    <div class="carousel slide" data-ride="carousel" id="slides">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
            <li data-target="#slides" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner home-slider">
            <div class="carousel-item active">
                <?php $slider_image=wp_get_attachment_image_url( get_field("slide1",$album->ID), 'full'  );?>
                <img src="<?php echo $slider_image ?>" alt="">
            </div>
            <div class="carousel-item">
                <?php $slider_image=wp_get_attachment_image_url( get_field("slide2",$album->ID), 'full'  );?>
                <img src="<?php echo $slider_image ?>" alt="">
            </div>
            <div class="carousel-item">
                <?php $slider_image=wp_get_attachment_image_url( get_field("slide3",$album->ID), 'full'  );?>
                <img src="<?php echo $slider_image ?>" alt="">
            </div>
            <div class="carousel-item">
                <?php $slider_image=wp_get_attachment_image_url( get_field("slide4",$album->ID), 'full'  );?>
                <img src="<?php echo $slider_image ?>" alt="">
            </div>
        </div>
    </div>

    <!--portfolio-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
                <h1 class="display-4"><?php the_field('title_portfolio'); ?></h1>
            </div>
        </div>
    </div>
    <!--4 divisions-->
    <div class="container-fluid padding">
        <div class="row text-center portfolio">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 alb">
                <div>
                    <?php $album_image=wp_get_attachment_image_url( get_field("album1_img",$album->ID), 'full'  );?>
                    <img src="<?php echo $album_image ?>" alt="">
                    <div class="img-darkerer"></div>
                </div>
                <h3><?php the_field('title_album1'); ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 alb">
                <div>
                    <?php $album_image=wp_get_attachment_image_url( get_field("album2_img",$album->ID), 'full'  );?>
                    <img src="<?php echo $album_image ?>" alt="">
                    <div class="img-darkerer"></div>
                </div>
                <h3><?php the_field('title_album2'); ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 alb">
                <div>
                    <?php $album_image=wp_get_attachment_image_url( get_field("album3_img",$album->ID), 'full'  );?>
                    <img src="<?php echo $album_image ?>" alt="">
                    <div class="img-darkerer"></div>
                </div>
                <h3><?php the_field('title_album3'); ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 alb">
                <div>
                    <?php $album_image=wp_get_attachment_image_url( get_field("album4_img",$album->ID), 'full'  );?>
                    <img src="<?php echo $album_image ?>" alt="">
                    <div class="img-darkerer"></div>
                </div>
                    <h3><?php the_field('title_album4'); ?></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
    <!--instagram carousel-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
                <h1 class="display-4"><?php the_field('title_carousel'); ?></h1>
            </div>
        </div>
        <div  class="row">
            <?php get_sidebar(); ?>
         </div>
    </div>
        


</body>

</html>

<?php get_footer(); ?>
