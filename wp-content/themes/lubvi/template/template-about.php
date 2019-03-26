<?php
/**
* Template Name: About
*
* @package lubvi
* @since lubvi 1.0
*/
?>

<?php get_header(); ?>

<!DOCTYPE HTML>
<html lang="eng">
<body>
    <!--about-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
                <h1 class="display-4"><?php the_field('title_about'); ?></h1>
            </div>
        </div>
        
        <?php
        // vars
        $about_block = get_field('about_block');	
        
        if( $about_block ): ?>
        <div class="row jumbotron" id="about_block">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 col-xl-9 content">
                <h1 class="cursive"> <?php echo $about_block['about_header'];?></h1>
                <h3 class="subheader"><?php echo $about_block['subheader']; ?></h3>
                <p class="lead"><?php echo $about_block['about_text']; ?></p>
                <a href="./contact"><button class="btn btn-contact btn-lg" type="button">Contact me</button></a>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 about">
                <img src="<?php echo $about_block['picture']; ?>" alt="">
            </div>
            
        </div>
        <?php endif; ?>   

    </div>



    <!--testimonials-->
    <div class="container-fluid">
        <div class="text-center alert">
            <div class="col-12">
                <h1 class="display-4"><?php the_field('title_testimonials'); ?></h1>
            </div>
        </div>
    </div>
    <div id="tests" class="carousel slide jumbotron" data-ride="carousel">
    

         <?php
        // vars
        $testimonials_block = get_field('testimonials_block');	
        
        if( $testimonials_block ): ?>

        <div class="carousel-inner" id="testimonials_block">
            <div class="carousel-item active">
                <div class="row testimonial">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <img src="<?php $testimonials_block['customer1_comment']; ?>" alt="">
                       
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 col-xl-9 ">
                        <p class="lead">
                            <?php echo $testimonials_block['customer1_comment'];?>
                        </p>
                        <h4><?php echo $testimonials_block['subs1'];?></h4>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="row testimonial">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 col-xl-9 ">
                        <p class="lead">
                            <?php echo $testimonials_block['customer2_comment'];?>
                        </p>
                        <h4><?php echo $testimonials_block['subs2'];?></h4>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="row testimonial">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 col-xl-9 ">
                        <p class="lead">
                            <?php echo $testimonials_block['customer3_comment'];?>
                        </p>
                        <h4><?php echo $testimonials_block['subs3'];?></h4>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>   

        <!-- Элементы управления -->
        <a class="carousel-control-prev" href="#tests" role="button" data-slide="prev">
            <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#tests" role="button" data-slide="next">
            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    
    <!--FAQ-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
                <h1 class="display-4"><?php the_field('title_faq'); ?></h1>
            </div>
        </div>


        <?php
        // vars
        $faq_block = get_field('faq_block');	
        
        if( $faq_block ): ?>
        <div class="row faq" id="faq_block">
            <div class="panel-group" id="collapse-group">
                <hr class="my-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">

                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el1">
                                <!-- <img src="/img/icons/plus.png"/> -->
                                <?php echo $faq_block['question1'];?></a>
                        </h4>
                    </div>
                    <div id="el1" class="panel-collapse collapse in">
                        <div class="panel-body"> <?php echo $faq_block['answer1'];?></div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el2">
                            <?php echo $faq_block['question2'];?></a>
                        </h4>
                    </div>
                    <div id="el2" class="panel-collapse collapse">
                        <div class="panel-body">
                        <?php echo $faq_block['answer2'];?></div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el3">
                            <?php echo $faq_block['question3'];?> </a>
                        </h4>
                    </div>
                    <div id="el3" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $faq_block['answer3'];?></div>
                    </div>
                </div>
                <hr class="my-4">
            </div>
        </div>
        <?php endif; ?> 




    </div>
</body>
</html>

<?php get_footer(); ?>
