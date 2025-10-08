<?php
/* Template Name: about*/
get_header();?>
        
        <?php include('includes/banner.php'); ?>

        
        
        <?php $about = get_field('about');
if( $about ): ?>
        
         <div class="overflow-hidden space background-image" style="background-image: url(<?php bloginfo ('template_directory');?>/img/bg/about_bg_4.png&quot;);">
            
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-35 mb-xl-0">
                <?php $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'about_size');
                    $src = $attachment[0];?>
                <div class="img-box6">
                    <div class="img1"><img src="<?php echo $src;?>" alt="Image"></div>
                    <div class="year-box">
                        <div class="box-number"><span class="counter-number"><?php echo $about['years_of_experience'];?></span></div>
                        <p class="box-text">Years of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 text-center text-xl-start">
                <div class="pe-xxl-5">
                    <div class="title-area mb-37">
                        <h2 class="sec-title"> <?php echo $about['heading'];?>
</h2>
                       <?php echo the_content();?>
                    </div>
                    
                    <div class="btn-group mt-30 justify-content-center">
                        <div class="call-btn">
                            <div class="play-btn"><i class="fal fa-phone"></i></div>
                            <div class="media-body">
                                <p class="box-label">Call Us 24/7</p>
                                <h6 class="box-link"><a href="tel:<?php echo $about['call_us_number'];?>"> <?php echo $about['call_us_number'];?></a></h6></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="overflow-hidden space bg-white" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-xl-5 my-5 my-xl-0">
                    <div ><img class="w-100" src="<?php echo $about['2nd_section_image'];?>" alt="About"></div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-process-wrap no-bg">
                        <div class="contact-process">
                            <div class="box-number">01</div>
                            <div class="media-body">
                                <h3 class="box-title text-title">Products and services Offered</h3>
                                <?php echo $about['products_services_offered'];?>
                            </div>
                        </div>
                        <div class="contact-process">
                            <div class="box-number">02</div>
                            <div class="media-body">
                                <h3 class="box-title text-title">Objective</h3>
                                <?php echo $about['objective'];?>
                            </div>
                        </div>
                        <div class="contact-process">
                            <div class="box-number">03</div>
                            <div class="media-body">
                                <h3 class="box-title text-title">Quality Statement</h3>
                                <?php echo $about['quality_statement'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php endif; ?>     
        
        
        
        
        
        
        




<?php get_footer();?>