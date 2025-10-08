 
  <!--common code start--->
 <?php get_header();
//  template name:home
 ?>
 <!--common code stop--->

<?php if( have_rows('banner') ): ?>
     <div class="th-hero-wrapper hero-2 slider-area" id="hero" data-bg-src="<?php bloginfo ('template_directory');?>/img/hero/hero_bg_2.jpg">
        <div class="swiper th-slider" id="heroSlide2" data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">

            <?php while( have_rows('banner') ): the_row(); 
        $banner_text = get_sub_field('banner_text');
        $banner_image = get_sub_field('banner_image');
        $banner_link = get_sub_field('banner_link');
        ?>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container align-items-center">
                            <div class="hero-style2">
                                <h1 class="hero-title"><span class="title1" data-ani="slideinup" data-ani-delay="0.2s"><?php echo $banner_text;?>   </span>  </h1>
                                <a href="<?php echo $banner_link;?>" class="th-btn2 style3" data-ani="slideinup" data-ani-delay="0.8s">Our Services <i class="fas fa-arrow-right"></i></a></div>
                                <div class="hero-img" data-ani="slideinright" data-ani-delay="0.2s"><img src="<?php echo $banner_image;?>" alt="Image"></div>
                        </div>
                        
                    </div>
                </div>

                    <?php endwhile; ?>
                
            </div>
        </div>
        <button data-slider-prev="#heroSlide2" class="slider-arrow slider-prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button data-slider-next="#heroSlide2" class="slider-arrow slider-next"><i class="fa-solid fa-arrow-right"></i></button>

    </div>

 <?php endif; ?>


    <div class="overflow-hidden space">
        <div class="container">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-xl-6 mb-35 mb-xl-0">
                    <div class="img-box4">
                        <?php $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'about_size');
                    $src = $attachment[0];?>
                        <div class="comparison-img">
                            <img src="<?php echo $src;?>">
                        </div>
                    </div>
                </div>
              
                <?php $welcome = get_field('welcome');
if( $welcome ): ?>
                <div class="col-xl-6 text-center text-xl-start">                   
                    
                    <div class="pe-xxl-5">
                            <h2 class="sec-title"><?php echo $welcome['heading'];?>  </h2>
                            <p class="sec-text"><?php echo the_content();?></p>
                        </div>
               
                        <div class="btn-group mt-30 justify-content-center"><a href="<?php echo $welcome['about_link'];?>" class="th-btn2">Discover More<i class="fa-solid fa-arrow-right"></i></a>

                        </div>
                    </div>

                     <?php endif; ?>
                    
                </div>

            </div>
        </div>
    </div>

<?php $what_we_do = get_field('what_we_do');
if( $what_we_do ): ?>
    <section class="overflow-hidden space" id="service-sec" data-bg-src="<?php bloginfo ('template_directory');?>/img/bg/service_bg_1.jpg">
        
        <div class="container pb-45">
            <div class="row justify-content-between">
                <div class="col-xl-4 text-center text-xl-start">
                    <div class="title-area"><span class="sub-title shape-white"><img src="<?php bloginfo ('template_directory');?>/img/logo-icn2.png" alt="What we do">What we do</span>
                        <h2 class="sec-title text-white">Our Services</h2>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="sec-btn text-center text-xl-start">
                        <?php echo $what_we_do['description'];?> 
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider2" data-slider-options='{"loop":false,"slidesPerGroup":"2","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card style2">
                                <div class="box-number">01</div>
                                <div class="box-icon"><img src="<?php echo $what_we_do['products_&_services_icon'];?>" alt="Products & Services Offered"></div>
                                <h3 class="box-title"><a href="<?php echo $what_we_do['products_services_link'];?>">Products & Services Offered</a></h3>
                                <p class="box-text"> <?php echo $what_we_do['products_services_offered_content'];?></p>
                                <a href="<?php echo $what_we_do['products_services_link'];?>" class="th-btn2 style2 btn-sm">Read More<i class="fa-solid fa-arrow-right"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card style2">
                                <div class="box-number">02</div>
                                <div class="box-icon"><img src="<?php echo $what_we_do['object_icon'];?>" alt="Objective"></div>
                                <h3 class="box-title"><a href="<?php echo $what_we_do['object_link'];?>">Objective</a></h3>
                                <p class="box-text"> <?php echo $what_we_do['objective'];?></p>
                                <a href="<?php echo $what_we_do['object_link'];?>" class="th-btn2 style2 btn-sm">Read More<i class="fa-solid fa-arrow-right"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card style2">
                                <div class="box-number">03</div>
                                <div class="box-icon"><img src="<?php echo $what_we_do['quality_statement_icon'];?>" alt="Quality Statement"></div>
                                <h3 class="box-title"><a href="<?php echo $what_we_do['quality_statement_link'];?>">Quality Statement</a></h3>
                                <p class="box-text"> <?php echo $what_we_do['quality_statement'];?></p>
                                <a href="<?php echo $what_we_do['quality_statement_link'];?>" class="th-btn2 style2 btn-sm">Read More<i class="fa-solid fa-arrow-right"></i></a></div>
                                
                        </div>

                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
        
    </section>
 <?php endif; ?>

    <section class="cta-sec1" data-bg-src="<?php bloginfo ('template_directory');?>/img/bg/pattern_bg_3.png">
        
        <div class="cta-img1"><img src="<?php bloginfo ('template_directory');?>/img/normal/cta_1.png" alt=""></div>
        <?php $callus_caption = get_field('callus_caption');
if( $callus_caption ): ?>
        <div class="cta-content">
            <h2 class="sec-title text-white mb-37"><?php echo $callus_caption['call_caption'];?></h2>
            <div class="btn-group justify-content-center">
                <div class="call-btn">
                    <div class="play-btn"><i class="fas fa-phone-volume"></i></div>
                    <div class="media-body">
                        <p class="box-label text-white">Call Us Now</p>
                        <h6 class="box-link text-white"><a href="tel:+96522490021">+965 22490021</a> / <a href="tel:+96522490023">23</a>/<a href="tel:+96522490024">24</a>/<a href="tel:+96522490025">25</a></h6>
                    </div>
                </div>
            </div>
        </div>
         <?php endif; ?>
    </section>

    <section class="overflow-hidden space" data-bg-src="<?php bloginfo ('template_directory');?>/img/bg/pattern_bg_1.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="title-area text-center"><span class="sub-title"><img src="<?php bloginfo ('template_directory');?>/img/logo-icn.png" alt="shape">What We Do</span>
                        <h2 class="sec-title">OUR SERVICES</h2>
                        <p class="sec-text"> As for an introduction to our international work, We have covered all aspects of this vast and dimensionless eld, Which includes import and export around the world of the following services:</p>
                    </div>
                </div>
            </div>


            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider2" data-slider-options='{"loop":false,",nav":true,"slidesPerGroup":"2","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">

<?php
                    $args = array('post_type'=>'post','cat'=>[1],'posts_per_page'=>'10','order'=>'ASC');      
                    $the_query = new WP_Query($args);
                    if($the_query->have_posts()):
                    while($the_query->have_posts()):$the_query->the_post();
                    $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                    $src = $attachment[0];  
                    // if(!$src){
                    //     $src = home_url('').'/images/team-1.jpg';
                    //   }                     
                      $icon  = get_field('icon', $post->ID);
                      $home_services_image  = get_field('home_services_image', $post->ID);
                ?>


                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="box-img"><img src="<?php echo $home_services_image; ?>" alt=""></div>

                                <div class="box-content">
                                    <h3 class="box-title"><a href="<?php echo the_permalink();?>"><?php echo the_title(); ?></a></h3><span class="box-desig"> 
                                    <?php echo the_excerpt(); ?> </span> <a href="<?php echo the_permalink();?>" class="th-btn2 btn-sm">More Details <i class="fa-solid fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                          <?php  
                    endwhile;
                    endif; 
                    wp_reset_postdata();
                ?>    
                      
                        
                    </div>
                    <div class="slider-pagination"></div>

                </div>
                <button data-slider-prev="#teamSlider2" class="slider-arrow slider-prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button data-slider-next="#teamSlider2" class="slider-arrow slider-next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </section>


    <div class="video-sec1" data-bg-src="<?php bloginfo ('template_directory');?>/img/normal/video_1.jpg">

        <div class="container">
            <?php $video_section = get_field('video_section');
if( $video_section ): ?>
            <div class="video-content1"><a href="<?php echo $video_section['video_link'];?>" class="play-btn style3 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                <h2 class="sec-title text-white"><?php echo $video_section['video_caption'];?></h2>
            </div>
             <?php endif; ?>
        </div>
        <div class="">
            <?php $counder = get_field('counder');
if( $counder ): ?>
            <div class="container">
                <div class="counter-card-wrap style2">
                    <div class="counter-card">
                        <div class="box-icon"><img src="<?php bloginfo ('template_directory');?>/img/icon/counter_card_5.svg" alt="Icon"></div>
                        <div class="media-body">
                            <h2 class="box-number text-white"><span class="counter-number"><?php echo $counder['completed_projects'];?></span>+</h2>
                            <p class="box-text text-white">Completed Projects</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card">
                        <div class="box-icon"><img src="<?php bloginfo ('template_directory');?>/img/icon/counter_card_2.svg" alt="Icon"></div>
                        <div class="media-body">
                            <h2 class="box-number text-white"><span class="counter-number"><?php echo $counder['happy_clients'];?></span>+</h2>
                            <p class="box-text text-white">Happy Clients</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card">
                        <div class="box-icon"><img src="<?php bloginfo ('template_directory');?>/img/icon/counter_card_3.svg" alt="Icon"></div>
                        <div class="media-body">
                            <h2 class="box-number text-white"><span class="counter-number"><?php echo $counder['expert_team'];?></span>+</h2>
                            <p class="box-text text-white">Expert Team</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card">
                        <div class="box-icon"><img src="<?php bloginfo ('template_directory');?>/img/icon/counter_card_4.svg" alt="Icon"></div>
                        <div class="media-body">
                            <h2 class="box-number text-white"><span class="counter-number"><?php echo $counder['awards_won'];?></span>+</h2>
                            <p class="box-text text-white">Awards Won</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
             <?php endif; ?>
        </div>
    </div>
    <div class="overflow-hidden space-bottom">
        <div class="shape-mockup moving d-none d-xxl-block" data-bottom="0%" data-right="0%"><img src="<?php bloginfo ('template_directory');?>/img/shape/man_shape_1.png" alt="shape"></div>
        <div class="container">
            <div class="contact-area" id="getaquote">
                <div class="row">
                    <div class="col-xl-5 mb-35 mb-xl-0">
                        <div class="contact-media-area">
                           
                            <div class="contact-media-wrap kuwait_add">
                                <h3 class="box-title">Kuwait Location</h3>
                                <div class="contact-media">
                                    <div class="icon-btn"><i class="fas fa-location-dot"></i></div>
                                    <div class="media-body">
                                        <p class="box-text"> <?php echo get_field('kuwait_address',$page_id = 177);?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-media-wrap kuwait_call">
                                <div class="contact-media">
                                    <div class="icon-btn"><i class="fas fa-phone-volume"></i></div>
                                    <div class="media-body">
                                        <h4 class="box-label">Call Us:</h4>
                                        <p class="box-text"><a href="tel:<?php echo get_field('kuwait_phonenumber_one',$page_id = 177);?>"><?php echo get_field('kuwait_phonenumber_one',$page_id = 177);?></a></p>
                                    </div>
                                </div>

                            </div>
                             <div class="contact-media-wrap">
                                <h3 class="box-title">UAE Location</h3>
                                <div class="contact-media">
                                    <div class="icon-btn"><i class="fas fa-location-dot"></i></div>
                                    <div class="media-body">
                                        <p class="box-text"> <?php echo get_field('dubai_address',$page_id = 177);?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-media-wrap">
                                <div class="contact-media">
                                    <div class="icon-btn"><i class="fas fa-phone-volume"></i></div>
                                    <div class="media-body">
                                        <h4 class="box-label">Call Us:</h4>
                                        <p class="box-text"><a href="tel:<?php echo get_field('dubai_phonenumber_one',$page_id = 177);?>"><?php echo get_field('dubai_phonenumber_one',$page_id = 177);?></a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 text-center text-xl-start">
                        <div class="ps-xxl-4 ms-xl-3">
                            <div class="title-area"><span class="sub-title"><img src="<?php bloginfo ('template_directory');?>/img/logo-icn.png" alt="shape">Get a quote</span>
                                <h2 class="sec-title">Request a quote</h2>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="acf09b2" title="Get A Quote"]');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 

<!--common code start--->
 <?php get_footer();?>
 <!--common code stop--->