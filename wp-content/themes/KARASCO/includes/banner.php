<?php
        global $post;
        $post_slug = $post->post_name;
        $image_url = '';
        $image_id  = get_field('banner_image', $post->ID);
        if($image_id)
            $image_url = $image_id;
        if(!$image_url)
            $image_url = esc_url(get_template_directory_uri()).'/img/bg/breadcumb-bg.jpg';
           
    ?>

    <div class="breadcumb-wrapper" data-bg-src="<?php echo $image_url;?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo the_title(); ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="#">Home</a></li>
                    <li><?php echo the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>