<?php
/* Template Name:careers*/
get_header();?>
        
        <?php include('includes/banner.php'); ?>

        
        
       
         <section class="space">
        <div class="container z-index-common">
            <div class="row gy-30 justify-content-center">
                <div class="col-lg-7">
                        <h2 class="h4">Apply Job</h2>  
                        
 <?php echo do_shortcode('[contact-form-7 id="981a019" title="Careers"]');?>     

                    </div>

                 
              
            </div>
           
        </div>
    </section>
        
        
     


<?php get_footer();?>