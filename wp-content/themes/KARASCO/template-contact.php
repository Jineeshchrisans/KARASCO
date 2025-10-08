<?php
/* Template Name:contact*/
get_header();?>
        
        <?php include('includes/banner.php'); ?>

        
         
       
         <div class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img src="<?php bloginfo ('template_directory');?>/img/logo-icn.png"
                        alt="Icon">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>
            <div class="row gy-4 align-items-stretch">
              
                <div class="col-xl-6 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body">
                            <h5 class="box-title">Kuwait Address</h5>
                            <p><?php echo get_field('kuwait_address');?></p>

                              <p>T: <a href="tel:<?php echo get_field('kuwait_phonenumber_one');?>"><?php echo get_field('kuwait_phonenumber_one');?></a>/<a href="tel:+965224900<?php echo get_field('kuwait_phonenumber_two');?>"><?php echo get_field('kuwait_phonenumber_two');?></a>/<a href="tel:+965224900<?php echo get_field('kuwait_phonenumber_three');?>"><?php echo get_field('kuwait_phonenumber_three');?></a>/ <a href="tel:+965224900<?php echo get_field('kuwait_phonenumber_four');?>"><?php echo get_field('kuwait_phonenumber_four');?></a>  </p>
                             
                              <p>E: <a href="mailto:<?php echo get_field('kuwait_email');?>"><?php echo get_field('kuwait_email');?></a></p>
                        </div>
                    </div>
                </div>
                  

                  
                 <div class="col-xl-6 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body">
                            <h5 class="box-title">Dubai Address</h5>
                          <p><?php echo get_field('dubai_address');?>  </p>

                              <p>T:<a href="tel:<?php echo get_field('dubai_phonenumber_one');?>"><?php echo get_field('dubai_phonenumber_one');?> </a> </p>
                              <p>E:<a href="mailto:<?php echo get_field('dubai_email');?>"><?php echo get_field('dubai_email');?></a><br>
                            
                            </p>
                             
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

     

    <div class="space" data-bg-src="<?php bloginfo ('template_directory');?>/img/bg/contact_bg_6.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 text-center text-xl-start">  
                        
                           <?php echo do_shortcode('[contact-form-7 id="238d16d" title="Contact form"] ');?>       
</div>           
                
                <div class="col-xl-6 mt-5 mt-xl-0">
                 
                </div>
            </div>
        </div>
    </div>
        
        
     


<?php get_footer();?>