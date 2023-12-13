 <!-- About Us -->
 <div class="row p-5">
   <?php
   $content_title = get_field('content_title');
   $content_heading = get_field('content_heading');
   $section_image = get_field('section_image');

   ?>
   <!-- ======================= Column first ================== -->
      <div class="col-12 col-md-6 "> 
         <!-- Title -->
         <h6 class="text-pink mb-4"><?php echo $content_title ; ?></h6>
         <!-- Heading -->
         <h2 class="mb-4"><?php echo $content_heading; ?></h2>

         <!-- MOBILE ONLY -->
         <div class="section-img  d-block d-md-none">
            <?php 
               if( !empty($section_image) ): ?>
               <img class="w-100 float-en mb-4" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>" />
               <?php
               endif; 
            ?>
         </div>
         <!-- .MOBILE ONLY -->

         <!-- Content -->
         <?php the_field('content'); ?>
         <!-- Button -->
         <a class="btn p-btn bg-pink btn-lg mt-4" href="#!" role="button">
           Explore Today 
           <span><img class="btn-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right.png"></span>
         </a>
      </div>

      <!-- ======================  Column second ================== -->
      <div class="col-12 col-md-6 section-img">
         <!-- Don't show this section on mobile version, show on medium screen and onwords -->
         <div class="section-img d-none d-md-block">
            <?php 
               if( !empty($section_image) ): ?>
               <img class="w-100 float-end" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>" />
               <?php
               endif; 
            ?>
         </div>
      </div>

     </div>
 
   <!-- .About Us -->
