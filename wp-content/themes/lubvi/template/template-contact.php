<?php
/**
* Template Name: Contact
*
* @package lubvi
* @since lubvi 1.0
*/
?>
<?php get_header(); ?>

<!DOCTYPE HTML>
<html lang="eng">
<body>
     <!--contact-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
                <h1 class="display-4"><?php the_field('title_contact'); ?></h1>
            </div>
        </div>

        
        <div class="row contact ">
            <?php
            $contact_block = get_field('contact_block');	
            if( $contact_block): ?>
            
            <div class="col-lg-6 col-sm-12 col-md-12 wrap" id="contact_block">
                <div class="contact-col-1">
                    <div class="contact-text">
                        <span>
                            <h3><?php echo $contact_block['info'];?></h3>
                            <p>
                                <a href="tel:+7-918-912-12-52">
                                <?php echo $contact_block['phone'];?>    
                                </a>                    
                            </p>
                            <p>
                                <a href="mailto:lubaabul-iv@mail.ru">
                                    <?php echo $contact_block['mail'];?>    
                                </a>                    
                            </p>
                            <p><?php echo $contact_block['address'];?></p>
                        </span>
                    </div>
                </div>
            </div>
            <?php endif; ?> 

            <div class="col-lg-6 col-sm-12 col-md-12 wrap">
                <div class="contact-col-2">
                    <h1>Send me a message</h1>
                    <form class="needs-validation container">
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputName" placeholder="Your name" required="required">
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                        <div class="form-group">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" required="required">
                        <!-- <div class="invalid-tooltip">Please select a valid email address.</div> -->
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                        </div>

                        <div class="form-group">
                            <input type="phone" class="form-control" id="inputNumber" placeholder="Phone number" required="required">
                            <!-- <div class="invalid-tooltip">Please enter a valid phone number.</div> -->
                            <div class="invalid-feedback">
        Please provide a valid city.
      </div>
                        </div>

                        
                        <div class="form-group" >
                            <div class="input-group date" id='datetimepickermy' data-provide="datepicker" >
                                 <input type="text" class="form-control" id="inputDate" placeholder="Event date" >
                                 <!-- <div class="invalid-tooltip">Please select a valid date.</div> -->
                                 <div class="invalid-feedback">
        Please provide a valid city.
      </div>
                                 <span class="input-group-addon">
                                     <span class="fa fa-calendar"></span>
                                </span>
                            </div>
                        </div>
                        


                        

                        <div class="form-group">
                            <input type="text" class="form-control" id="inputLocation" placeholder="Event location" required="required">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="inputMessage" rows="2" placeholder="Message...Social link"></textarea>
                        </div>

                        <div class="form-row my-4">
                            <div class="form-check pl-0">
                                <input class="form-check-input" type="checkbox" value="" id="agreement" required>
                                <label class="form-check-label" for="agreement">
                                    I agree my personal data to be processed
                                </label>
                            </div>
                        </div>
                        <a href="#"><button type="submit" class="btn btn-sendmes btn-primary btn-lg" type="button">Send message</button></a> 


                    </form>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
   

<?php get_footer(); ?>
