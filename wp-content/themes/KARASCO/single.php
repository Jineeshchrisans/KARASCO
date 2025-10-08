<?php get_header();?>



<?php include('includes/banner.php'); ?>

<?php 
get_header();
//global $post;

$cats = get_the_category();
//print_r($cats);

$services = 0;
$sample_projects = 0;
$news_events = 0;

foreach($cats as $cat){
  if ($cat->slug=='service' )  {
    $service = 1;
  }
  if ($cat->slug=='sample-projects' )  {
    $sample_projects = 1;
  }
  if ($cat->slug=='news' )  {
    $news_events = 1;
  }
  
}

if ($service) {
$attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'news_sizes');
$src=$attachment[0];
$service_page_image  = get_field('service_page_image', $post->ID);
$description  = get_field('description', $post->ID);

?>


  <section class="space-top space-extra-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single mb-30">

                        <div class="page-content">
                            <h2 class="h3 sec-title page-title"> <?php echo the_title();?></h2>
                            <div class="page-img"><img src="<?php echo $src;?>" alt="Service Image"></div>
                           <?php echo the_content();?>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">

                        <div class="widget widget_categories">
                            <h3 class="widget_title">All Services</h3>
                           
                            <ul>
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
                ?>

                                <li><a href="<?php echo the_permalink();?>"><img src="<?php bloginfo ('template_directory');?>/img/logo-icn.png" alt="icon"> <?php echo the_title(); ?></a></li>
                                  <?php  
                    endwhile;
                    endif; 
                    wp_reset_postdata();
                ?>  
                               
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>


    <?php } ?>






<?php get_footer();?>