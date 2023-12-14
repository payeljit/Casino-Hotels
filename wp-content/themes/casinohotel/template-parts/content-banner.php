 <div class="container-fluid p-0">
     <!-- I have added the custom logo function, so user can change the logo from admin area -->
     <?php
    if(function_exists('the_custom_logo')) {
        $custom_logo_id =   get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
    }

   $hero_image = get_field('hero_image'); 
   $hero_heading = get_field('hero_heading');
   $hero_sub_heading = get_field('hero_sub_heading');
   ?>
     <!-- Used banner image as div background -->
     <div class="p-5 w-100 bg-image h-200" style="
    height: 636px;
    background-image: 
    url('<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>');"
         loading="lazy">

         <div class="row text-center text-md-start">
             <div class="col-12 col-md-6 text-white">
                 <a href="<?php echo home_url();?>"><img class="mb-4" src="<?php echo $logo[0]; ?>"></a>
                 <!-- Main heading -->
                 <h1 class="mb-4"><?php echo $hero_heading;?></h1>
                 <!-- Sub heading -->
                 <h5 class="mb-4"><?php echo $hero_sub_heading;?></h5>
                 <!-- Button -->
                 <a class="btn p-btn bg-pink btn-lg" href="#table" role="button">
                     Explore Today
                     <span><img class="btn-arrow"
                             src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-down.png"
                             alt="Arrow down icon" loading="lazy"></span>
                 </a>
             </div>
         </div>

     </div>