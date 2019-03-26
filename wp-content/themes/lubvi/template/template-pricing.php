<?php
/**
* Template Name: Pricing
*
* @package lubvi
* @since lubvi 1.0
*/
?>

<?php get_header(); ?>
<!DOCTYPE HTML>
<html lang="eng">
<body>
      <!--pricing-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
                <h1 class="display-4"><?php the_field('title_pricing'); ?></h1>
            </div>
        </div>
    </div>



    <!--3 divisions-->
    <div class="container-fluid padding">
    
        <div class="row text-center pricing" >

            <?php
            $pricing_block_1 = get_field('pricing_block_1');	
            if( $pricing_block_1 ): ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" id="pricing_block_1">
                <div class="pricing-container img-1">
                    <div class="pricing-text">
                        <h1><?php echo $pricing_block_1['title'];?></h1>
                        <ul>
                            <li><?php echo $pricing_block_1['arg1'];?></li>
                            <li><?php echo $pricing_block_1['arg2'];?></li>
                            <li><?php echo $pricing_block_1['arg3'];?></li>
                        </ul>
                        <h4><?php echo $pricing_block_1['price'];?></h4>
                        <a href="./contact"><button class="btn btn-book btn-lg" type="button">Book now</button></a>
                    </div>

                </div>
            </div>
            <?php endif; ?> 

            <?php
            $pricing_block_1 = get_field('pricing_block_2');	
            if( $pricing_block_1 ): ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="pricing-container img-2">
                    <div class="pricing-text">
                    <h1><?php echo $pricing_block_1['title'];?></h1>
                        <ul>
                            <li><?php echo $pricing_block_1['arg1'];?></li>
                            <li><?php echo $pricing_block_1['arg2'];?></li>
                            <li><?php echo $pricing_block_1['arg3'];?></li>
                        </ul>
                        <h4><?php echo $pricing_block_1['price'];?></h4>
                        <a href="./contact"><button class="btn btn-book btn-lg" type="button">Book now</button></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php
                $pricing_block_1 = get_field('pricing_block_3');	
                if( $pricing_block_1 ): ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="pricing-container img-3">
                    <div class="pricing-text">
                    <h1><?php echo $pricing_block_1['title'];?></h1>
                        <ul>
                            <li><?php echo $pricing_block_1['arg1'];?></li>
                            <li><?php echo $pricing_block_1['arg2'];?></li>
                            <li><?php echo $pricing_block_1['arg3'];?></li>
                        </ul>
                        <h4><?php echo $pricing_block_1['price'];?></h4>
                        <a href="./contact"><button class="btn btn-book btn-lg" type="button">Book now</button></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
    </div>

</body>
</html>
   

<?php get_footer(); ?>
