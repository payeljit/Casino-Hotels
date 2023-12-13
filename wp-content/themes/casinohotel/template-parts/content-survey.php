 <!-- Survey Section -->
 <!-- Note: I would prefer to use Flex content ACF pro field to populate this section of the page, because of I am using free ACF plugin, hence I am using Group filed -->
<?php 
   $survey_section_image = get_field('survey_section_image');
   $survey_content_title = get_field('survey_content_title');
   $survey_content_heading = get_field('survey_content_heading');
   $survey_content = get_field('survey_content');
?>
 <div class="row p-5">
      <!-- Top heading section -->
      <div class="col-12 mb-5">
         <h6 class="text-pink mb-4 text-center"><?php echo  $survey_content_title; ?></h6>
         <h2 class="mb-4 text-center"><?php echo $survey_content_heading; ?></h2>
      </div>

      <!-- Image section -->
      <div class="col-12 col-md-6 section-img">
         <?php 
            if( !empty($survey_section_image) ): ?>
            <img class="w-100" src="<?php echo esc_url($survey_section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>" />
            <?php
            endif; 
         ?>
      </div>

      <!-- Content on right secton -->
      <div class="col-12 col-md-6"> 

            <?php if( $survey_content ): ?>
               <!-- Pink badge -->
               <button class="btn bg-pink p-btn text-white fs-5 px-4 py-0 mb-4">1</button>
               <!-- Display story one heading -->
               <h3 class="mb-3">  <?php echo $survey_content['story_one_heading']; ?></h3>
               <!-- Display story one content -->
               <div class="content"><?php echo $survey_content['story_one_content'];?></div>
             
               <!-- Pink badge -->
               <button class="btn bg-pink p-btn text-white fs-5 px-4 py-0 mb-4">1</button>
               <!-- Display story two heading -->
               <h3 class="mb-3">  <?php echo $survey_content['story_two_heading']; ?></h3>
               <!-- Display story two content -->
               <div class="content"><?php echo $survey_content['story_two_content'];?></div>

               <!-- Display story three heading -->
               <!-- Pink badge -->
               <button class="btn bg-pink p-btn text-white fs-5 px-4 py-0 mb-4">1</button>
               <h3 class="mb-3">  <?php echo $survey_content['story_three_heading']; ?></h3>
               <!-- Display story three content -->
               <div class="content"><?php echo $survey_content['story_three_content'];?></div>

            <?php
            endif;
            ?>
      </div>
</div>
<!-- .Survey section -->
