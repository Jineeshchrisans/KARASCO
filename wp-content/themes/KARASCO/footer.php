  <footer class="footer-wrapper footer-layout1 footer-layout2" data-bg-src="<?php bloginfo ('template_directory');?>/img/bg/footer_bg_1.jpg">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="#"><img src="<?php bloginfo ('template_directory');?>/img/footer-logo.webp" alt=""></a>
                                </div>
                                <p class="about-text">Going forward, a new normal that has evolved from generation is on the runway heading towards a streamlined cloud solution.</p>
                                <div class="th-social"><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a> 
                                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                 <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title"><img src="<?php bloginfo ('template_directory');?>/img/logo-icn3.png" alt="icon"> Useful Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="<?php echo site_url('/about-us');?>">Company Profile</a></li>
                                    <li><a href="<?php echo site_url('/team');?>">Our Team</a></li>
                                    <li><a href="<?php echo site_url('/careers');?>">Careers</a></li>
                                    <li><a href="<?php echo site_url('/contact-us');?>">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title"><img src="<?php bloginfo ('template_directory');?>/img/logo-icn3.png" alt="icon"> Our Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="<?php echo site_url('/ocean-freight');?>">Ocean Freight</a></li>
                            <li><a href="<?php echo site_url('/lcl-service');?>">LCL Service</a></li>
                            <li><a href="<?php echo site_url('/fcl-service');?>">FCL Service</a></li>
                            <li><a href="<?php echo site_url('/air-freight');?>"> Air Freight</a></li>
                            <li><a href="<?php echo site_url('/over-land-transportation');?>"> Over Land Transportation</a></li>
                            <li><a href="<?php echo site_url('/custom-clearance-services');?>"> Custom Clearance Services</a></li>
                            <li><a href="<?php echo site_url('/warehousing');?>"> Warehousing</a></li>
                            <li><a href="<?php echo site_url('/equipment');?>"> Equipment </a></li>
                            <li><a href="<?php echo site_url('/insurance');?>"> Insurance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget newsletter-widget footer-widget">
                            <h3 class="widget_title"><img src="<?php bloginfo ('template_directory');?>/img/logo-icn3.png" alt="icon"> Newsletter</h3>
                            <p class="footer-text">Get latest updates and offers.</p>
                           <?php echo do_shortcode(' [newsletter_form]');?>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-contact-area">
            <div class="container">
                <div class="footer-contact-wrap">
                    <div class="footer-contact">
                        <div class="box-icon"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body">
                            <p class="box-text">
                                <?php echo get_field('kuwait_address',$page_id = 177);?>
                            </p>

                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body">
                            <p class="box-text"><?php echo get_field('dubai_address',$page_id = 177);?></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="media-body">
							 <p class="box-text"><a href="tel:<?php echo get_field('kuwait_phonenumber_one',$page_id = 177);?>"><?php echo get_field('kuwait_phonenumber_one',$page_id = 177);?></a></p>
                            <p class="box-text"><a href="tel:<?php echo get_field('dubai_phonenumber_one',$page_id = 177);?>"><?php echo get_field('dubai_phonenumber_one',$page_id = 177);?></a></p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-12">
                        <p class="copyright-text text-center"> © 2025 KARASCO All rights reserved. Powered by <a href="https://www.chrisansgroup.com/" target="_blank">Chrisans Web Solutions</a></p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    
    <!-- jQuery Frameworks
    ============================================= -->
    <?php wp_footer();?>

    <script>
    $(document).on("click","#cust_btn",function(){
  
  $("#myModal").modal("toggle");
  
})
</script>
       <!-- Modal -->
  <!-- Modal -->
<div class="modal fade rq-pp" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get A Quote</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i  class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
  
                            <?php echo do_shortcode('[contact-form-7 id="acf09b2" title="Get A Quote"]');?>
      </div>
     
    </div>
  </div>
</div>
   
</body>

</html>