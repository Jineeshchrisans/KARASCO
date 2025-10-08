<?php
/* Template Name: servies*/
get_header();?>


<?php $banner = get_field('banner');
if( $banner ): ?>
   <div class="breadcumb-wrapper" data-bg-src="<?php echo $banner['banner_image'];?> ">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo the_title();?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="#">Home</a></li>
                    <li><?php echo the_title();?></li>
                </ul>
            </div>
        </div>
    </div>
        
   <?php endif; ?>     
 
<?php
                    $args = array('post_type'=>'post','cat'=>[1],'posts_per_page'=>'6','order'=>'ASC');      
                    $the_query = new WP_Query($args);
                    if($the_query->have_posts()):
                    while($the_query->have_posts()):$the_query->the_post();
                    $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                    $src = $attachment[0];  
                    // if(!$src){
                    //     $src = home_url('').'/images/team-1.jpg';
                    //   }                     
                      $icon  = get_field('icon', $post->ID);
                ?>


                     <section class="space-top space-extra-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single mb-30">

                        <div class="page-content">
                            <h2 class="h3 sec-title page-title"><?php echo the_title();?></h2>
                            <div class="page-img"><img src="<?php echo $src;?>" alt="Service Image"></div>
                            <?php echo the_content(); ?>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">

                        <div class="widget widget_categories">
                            <h3 class="widget_title">All Services</h3>
                            <ul>


                                <li><a href="ocean-freight.html"><img src="img/logo-icn.png" alt="icon"> Ocean Freight</a></li>
                                <li><a href="lcl-service.html"><img src="img/logo-icn.png" alt="icon"> LCL Service</a></li>
                                <li><a href="fcl-service.html"><img src="img/logo-icn.png" alt="icon"> FCL Service</a></li>
                                <li><a href="air-freight.html"><img src="img/logo-icn.png" alt="icon"> Air Freight</a></li>
                                <li><a href="over-land-transportation.html"><img src="img/logo-icn.png" alt="icon"> Over Land Transportation</a>
                                </li>
                                <li><a href="custom-clearence-service.html"><img src="img/logo-icn.png" alt="icon"> Custom Clearance Services</a>
                                </li>
                                <li><a href="wearehousing.html"><img src="img/logo-icn.png" alt="icon"> Warehousing</a></li>
                                <li><a href="equipment.html"><img src="img/logo-icn.png" alt="icon"> Equipment </a></li>
                                <li><a href="insurence.html"><img src="img/logo-icn.png" alt="icon"> Insurance</a></li>
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>



 <?php  
                    endwhile;
                    endif; 
                    wp_reset_postdata();
                ?>    
     

 




<?php get_footer();?>