 <!-- Casino Hotel Table -->
 <?php $args = array(
   'meta_key'  => 'score',
   'post_type' => 'casino_hotels',
   'orderby' => 'meta_value',
   'post_per_page' => -1,
   'order' => 'DESC',
 );
 $the_query = new WP_Query( $args );
//  To count number of post looping through the total number of post and printing them
 $count_post_number = $the_query->post_count;
 $count = 1;
 if ($count <=  $count_post_number) :
 ?>
   <div class="container-fluid bg-grey hotels">
       <div class="row padding-extra position-relative z-index">
        
         <h2 class="text-center mt-5 mb-2"><?php echo get_field('hotel_section_heading'); ?></h2>
         <div class="text-center mb-5">
            <img class="px-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar.png">
            <!-- Current date show -->
            <em><?php echo date("m/d/y");?></em>
         </div>
         <!-- Top reted hotel box -->
         <div class="position-relative d-flex justify-content-center">
            <small class="top_rated_box  text-white px-4 pt-1  position-absolute text-center">Top Rated Hotel</small>
         </div>
        <?php 
            // Hotel custom type loop starts
               while ( $the_query->have_posts() ) : $the_query->the_post();
             
               $table_logo = get_field( 'logo', $post_id );
               $address = get_field( 'address', $post_id );
               $star_rating = get_field('star_rating');
               $score = get_field('score');
               $link = get_field( 'link', $post_id );
               $rating_number = get_field( 'rating_number', $post_id );
            
            ?>
       
         <div class="col-12 mb-4 position-relative">
            <!-- Printing the number of post count  -->
            <span class="position-absolute hotel-counter text-white font-bold"><?php echo $count++; ?></span>
            <div class="hotel_table p-md-x-5">
              <div class="hotel_table_col">
             
               <!-- Dispaly Logo -->
               <?php if( !empty( $table_logo) ): ?>
                     <img class="" src="<?php echo esc_url(  $table_logo['url']); ?>" alt="<?php echo esc_attr(  $table_logo['alt']); ?>" />
                  <?php endif;?>
               </div>
               <div class="hotel_table_col">
                     <?php if( !empty( $address ) ) :
                           echo 'Address';
                           echo '</br>';
                           echo $address;
                           endif;?>
               </div>
               <div class="hotel_table_col d-flex">
                  <!-- Display Score, if score grater than 6 then print Excellent otherwise print Need improvement -->
                
                 <?php
                  if(empty( $rating_number )){ echo 'No rating added';} 
                     else {
                     // Listing the stars veriables using PHP list function
                     list($fullStars, $halfStar) = explode('.', (float)$rating_number);
                    
                     if(!empty ($fullStars)){
                     echo str_repeat('<i class="fa-solid fa-star "></i>',(int)$fullStars);
                     }
                     
                     if(!empty ($halfStar)){
                     echo '<i class="fa-solid fa-star-half"></i>';
                     }
                     
                     }

                  ?>
               </div>
               <div class="hotel_table_col position-relative">
                  <!-- <img class="btn-arrow position-absolute score_ring" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating-ring.png"> -->
                  
                  <div class="circle">
                     <h2><?php echo $score ;?></h2>
                  </div>
                  
                  <!-- Circle -->
             
              <!-- <div class="circle small-circle">
                  <h3</h3>
               </div>
                -->
               </div>
               <div class="hotel_table_col">
                     <?php
                     if( !empty( $link  ) ) : ?>
                        <a class="btn p-btn bg-green btn-lg" href="<?php echo $link ;?>" target="_blank" role="button">
                           Visit Hotel
                           <span><img class="btn-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right.png"></span>
                        </a>
                       <a href="<?php echo get_permalink($post->ID);?>">Read review</a>
                     <?php endif;
                   ?>
                  </div>
            </div>
      </div>
  
      <?php
  
      endwhile;
      // Reset Post Data
      wp_reset_postdata();
      // End of count post number
      endif;
      ?> 
     
      </div>
   </div>
   <!-- .Casino Hotel Table -->
