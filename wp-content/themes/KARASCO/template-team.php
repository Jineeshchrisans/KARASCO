<?php
/* Template Name:team*/
get_header();?>
        
        <?php include('includes/banner.php'); ?>

        
        
       
        
         <section class="space">
           
        <div class="container z-index-common">
 <?php if( have_rows('teams') ): ?>
            <div class="row gy-30 justify-content-center">
                

<?php while( have_rows('teams') ): the_row(); 
        $photo = get_sub_field('photo');
        $name = get_sub_field('name');
        $designation = get_sub_field('designation');
        $mobile = get_sub_field('mobile');
        $tel = get_sub_field('tel');
        $email = get_sub_field('email');
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
                            Mobile: <a href="tel:<?php echo $mobile;?>"><?php echo $mobile;?></a><br>
                            Tel : <a href="tel:<?php echo $tel;?>"><?php echo $tel;?></a><br>
                            Email : <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                        </div>
                    </div>
                </div>

 <?php endwhile; ?>

            </div>
   <?php endif; ?>    


   <?php if( have_rows('salesteams') ): ?>
            <div class="row gy-30 justify-content-center mt-5 text-center">
                <h3>Sales & Marketing Department</h3>

<?php while( have_rows('salesteams') ): the_row(); 
        $photo = get_sub_field('photo');
        $name = get_sub_field('name');
        
        $mobile = get_sub_field('mobile');
        $tel = get_sub_field('tel');
        $email = get_sub_field('email');
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
                            
                             Mobile: <a href="tel:<?php echo $mobile;?>"><?php echo $mobile;?></a><br>
                            Tel : <a href="tel:<?php echo $tel;?>"><?php echo $tel;?></a><br>
                            Email : <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                        </div>
                    </div>
                </div>

 <?php endwhile; ?>

            </div>

               <?php endif; ?>    

        </div>
         
    </section>

        
        
        
        
        
        
        




<?php get_footer();?>