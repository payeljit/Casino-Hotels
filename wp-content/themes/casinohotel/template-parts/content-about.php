 <!-- About Us -->
 <div class="row p-5">
      <div class="col-12 col-md-6"> 
         <h6 class="text-pink mb-4"><?php echo get_field('content_title'); ?></h6>
         <h2 class="mb-4"><?php echo get_field('content_heading'); ?></h2>
         <?php the_field('content'); ?>
         <a class="btn p-btn bg-pink btn-lg mt-4" href="#!" role="button">
           Explore Today 
           <span><img class="btn-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right.png"></span>
         </a>
      </div>

      <div class="col-12 col-md-6 section-img">
         <?php 
            $section_image = get_field('section_image');
            if( !empty($section_image) ): ?>
            <img class="w-100 float-end" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>" />
            <?php
             endif; 
         ?>
      </div>
   </div>
 
   </div>
   <!-- .About Us -->
