<?php
/* Template Name:team*/
get_header();?>
        
        <?php include('includes/banner.php'); ?>

        
        
       
         <?php if( have_rows('teams') ): ?>
         <section class="space">
           
        <div class="container z-index-common">
            <div class="row gy-30">
                

<?php while( have_rows('teams') ): the_row(); 
        $photo = get_sub_field('photo');
        $name = get_sub_field('name');
        $designation = get_sub_field('designation');
         $facebook_link = get_sub_field('facebook_link');
          $xcom_link = get_sub_field('xcom_link');
           $instagram_lin = get_sub_field('instagram_lin');
            $linked = get_sub_field('linked');
        ?>
                 <div class="col-lg-4 col-md-6">
                    <div class="th-team team-card">
                        <div class="box-img"><img src="<?php echo $photo;?>" alt="<?php echo $name;?>"></div>
                        <div class="box-content">
                            <div class="box-social">
                                <div class="box-btn"><i class="far fa-plus"></i></div>
                                <div class="th-social">
                                <a target="_blank" href="<?php echo $facebook_link;?>"><i class="fab fa-facebook-f"></i></a> 
                                <a target="_blank"  href="<?php echo $xcom_link;?>"><i class="fab fa-x-twitter"></i></a> 
                                <a target="_blank" href="<?php echo $instagram_lin;?>"><i class="fab fa-instagram"></i></a> 
                                <a target="_blank" href="<?php echo $linked;?>"><i class="fab fa-linkedin-in"></i></a></div>
                            </div>
                            <h3 class="box-title"><a href="#"><?php echo $name;?></a></h3>
                            <p class="box-desig"><?php echo $designation;?></p>
                        </div>
                    </div>
                </div>

 <?php endwhile; ?>

            </div>
        </div>
         
    </section>
   <?php endif; ?>    
        
        
        
        
        
        
        




<?php get_footer();?>