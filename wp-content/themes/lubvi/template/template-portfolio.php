<?php
/**
* Template Name: Portfolio
*
* @package lubvi
* @since lubvi 1.0
*/
?>

<?php get_header(); ?>
<!DOCTYPE HTML>
<html lang="eng">
<body>
    <!--portfolio page-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
                <h1 class="display-4">Portfolio</h1>
            </div>
        </div>
        <div class="row portfolio btn-container">
            <div id="myBtnContainer" class="btn-port-container">
                <a class="btn-port active" onclick="filterSelection('all')"> Show all</a>
                <a class="btn-port" onclick="filterSelection('nature')"> Nature</a>
                <a class="btn-port" onclick="filterSelection('cars')"> Cars</a>
                <a class="btn-port" onclick="filterSelection('family')"> Family</a>
            </div>
        </div>
        <div class="row portfolio">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 column family">
                <img src="/wp-content/themes/lubvi/img/portfolio/1.jpg" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 column nature">
                <img src="/wp-content/themes/lubvi/img/portfolio/4.jpg" alt="Nature" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 column cars">
                <img src="/wp-content/themes/lubvi/img/portfolio/7.jpg" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 column family">
                <img src="/wp-content/themes/lubvi/img/portfolio/2.jpg" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 column nature">
                <img src="/wp-content/themes/lubvi/img/portfolio/5.jpg" alt="Nature" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 column cars">
                <img src="/wp-content/themes/lubvi/img/portfolio/8.jpg" />
            </div>

        </div>



        <div class="row portfolio">
            <?php echo do_shortcode('[robo-gallery id="461"]'); ?>        
        </div>
       <div class="row">
       <div class="col-lg-3">
       <div class="inner-section photos-section">
                <?php $args = array( 'type' => 'pgr-photos', 'hide_empty' => 0, 'taxonomy' => 'photos-category','orderby' => 'id', 'order' => 'DESC' );
                    $categories = get_categories($args);?>
                <div class="photos-tab">
                    <ul>
                        <li><a href="#" class="filter-btn active" data-rel="all">Show all</a></li>
                        <?php foreach ($categories as $category):?>
                            <li><a href="#" class="filter-btn" data-rel="<?php echo $category->slug;?>"><?php echo $category->name;?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div><!--/.photos-tab-->
                
                <div class="photos-tab-box">
                    
                    <?php $photos_post = new WP_Query( array('post_type' => 'pgr-photos', 'post_status' => 'publish','posts_per_page' => -1  ) );?>
                    <div class="photos-filter">
                            <div class="photos-list">
                                <?php if( $photos_post->post_count !== 0 ):
                                while( $photos_post->have_posts() ) : $photos_post->the_post(); //Loop start
                                    if( $terms = get_the_terms( $post->ID , 'photos-category' )): //check project category
                                        $arrCat=array('all');
                                        foreach($terms as $category):
                                            $arrCat[] = $category->slug;
                                        endforeach;
                                        $str_categories = implode(' ',$arrCat);
                                    endif;?>
                                
                                    <div class="photos-main-box scale-anm <?php echo $str_categories;?>">
                                        <div class="photos-box">
                                            <figure class="photos-img-box">
                                                <?php if( has_post_thumbnail() ) : //Check Has Post Thumbnail
                                                    the_post_thumbnail('activity-thumb', array( 'alt' => get_the_title() ) );
                                                else : //Else Default Image ?>
                                                    <img src="<?php echo get_theme_file_uri('/images/default-357x302.jpg' ); ?>" alt="<?php the_title();?>">
                                                <?php endif; //Endif ?>
                                            </figure>
                                            <div class="photos-content-box">
                                                <h3><?php the_title();?></h3>
                                                <?php the_content();?>
                                            </div><!--/.photos-content-box-->
                                        </div><!--/.photos-box-->
                                    </div><!--/.photos-main-box-->
                                <?php endwhile;
                                wp_reset_postdata();
                                endif;?>
                            </div><!--/.photos-list-->
                        </div><!--/.photos-filter-->
                                 
                    </div><!--/.photos-tab-box-->
                
            </div><!--/.photos-section-->
       </div>
       </div>

       
</body>

</html>
   

<?php get_footer(); ?>
