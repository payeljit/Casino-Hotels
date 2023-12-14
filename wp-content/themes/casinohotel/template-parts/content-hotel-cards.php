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
 <div id="table" class="container-fluid bg-grey hotels">
     <div class="row padding-extra position-relative z-index">
         <!-- Heading section -->
         <h2 class="text-center mt-5 mb-2"><?php echo get_field('hotel_section_heading'); ?></h2>
         <div class="text-center mb-5">
             <img class="px-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar.png">
             <!-- Current date show -->
             <em><?php echo date("m/d/y");?></em>
         </div>
         <!-- .Heading section -->
         <!-- BLUE BOX -->
         <div class="position-relative d-flex justify-content-center mt-4">
             <small class="top_rated_box text-white px-4 pt-1  position-absolute text-center">Top Rated Hotel</small>
         </div>


         <!-- ================= TABLE starts ================= -->
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
         <div class="col-12 mb-4 position-relative" data-aos="fade-up" data-aos-delay="200">
             <!-- Printing the number of post count  -->
             <span class="position-absolute hotel-counter text-white font-bold"><?php echo $count++; ?></span>

             <!-- ================ CARD: LARGE DEVICES CODE ==================== -->

             <div class="d-none d-md-block">
                 <div class="hotel_table p-md-x-5">
                     <!-- Dispaly Company Logo -->
                     <div class="hotel_table_col">
                         <?php if( !empty( $table_logo) ): ?>
                         <img class="" src="<?php echo esc_url(  $table_logo['url']); ?>"
                             alt="<?php echo esc_attr(  $table_logo['alt']); ?>" />
                         <?php endif;?>
                     </div>
                     <!-- Display Address -->
                     <div class="hotel_table_col ">
                         <?php if( !empty( $address ) ) :
                           echo 'Address';
                           echo '</br>';
                           echo $address;
                           endif;?>
                     </div>
                     <!-- Display Stars rating -->
                     <div class="hotel_table_col d-flex">

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
                     <!-- Display Score pink ring -->
                     <div class="hotel_table_col position-relative">
                         <?php 
                        //  To display the verious ring based of score, I created below veriable to store all the css classes to use later.
                    
                        $score_ring_variation = array(
                            'goodScore' => 'circle-good',
                            'badScore'  => 'circle-not-good',
                            'veryBadScore'  => 'circle-bad'
                        );
                        // I asigned all the classes to display based on score numbering
                       $resut = 
                       $score > 6 ? $score_ring_variation['goodScore']:
                       ($score > 3 &&  $score <= 6 ? $score_ring_variation['badScore']:
                       ($score < 3 ? $score_ring_variation['veryBadScore'] :
                       'Need improvemenet'));
                        ?>
                         <!-- Now I used the $result variable to print the class name -->
                         <div class="<?php echo $resut;?> position-relative">
                             <h2 class="position-absolute">
                                 <?php echo $score ;?>
                             </h2>
                         </div>
                     </div>


                     <!-- Display Button -->
                     <div class="hotel_table_col">
                         <?php if( !empty( $link  ) ) : ?>
                         <a class="btn p-btn bg-green btn-lg" href="<?php echo $link ;?>" target="_blank" role="button">
                             Visit Hotel
                             <span><img class="btn-arrow"
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right.png"></span>
                         </a>
                         <a href="<?php echo get_permalink($post->ID);?>">Read review</a>
                         <?php endif; ?>
                     </div>
                 </div>

             </div>
         </div>

         <!-- ================ END CARD: LARGE DEVICES CODE ==================== -->

         <!--  =============== CARD: MOBILE DEVICES CODE ======================== -->

         <div class="d-block d-md-none bg-white mb-1 p-3 rounded">
             <div class="row">
                 <div class="col-6 d-flex align-items-center">
                     <!-- Dispaly Company Logo -->
                     <?php if( !empty( $table_logo) ): ?>
                     <img class="" src="<?php echo esc_url(  $table_logo['url']); ?>"
                         alt="<?php echo esc_attr(  $table_logo['alt']); ?>" />
                     <?php endif;?>
                 </div>
                 <div class="col-6 position-relative">
                     <!-- Display Score pink circle -->
                     <div class="circle-good position-relative">
                         <h2 class="position-absolute"><?php echo $score ;?></h2>
                     </div>
                     <div class="text-end py-2">
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
                 </div>
             </div>
             <div class="row">
                 <div class="col-12 text-center my-4">
                     <hr class="hr-for-light-bg my-3">
                     <!-- Display Address -->
                     <?php if( !empty( $address ) ) :
                           echo 'Address';
                           echo '</br>';
                           echo $address;
                        endif;?>
                     <hr class="hr-for-light-bg my-3">
                 </div>
             </div>

             <div class="row">
                 <div class="col-12 text-center">
                     <!-- Display Button -->
                     <?php if( !empty( $link  ) ) : ?>
                     <a class="btn p-btn bg-green btn-lg" href="<?php echo $link ;?>" target="_blank" role="button">
                         Visit Hotel
                         <span><img class="btn-arrow"
                                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right.png"></span>
                     </a>

                     <?php endif; ?>
                     <div class="my-3"> <a href="<?php echo get_permalink($post->ID);?>">Read review</a></div>


                 </div>
             </div>

         </div>
         <!--  =============== CARD: MOBILE DEVICES CODE ======================== -->

         <?php
  
endwhile;
      // Reset Post Data
      wp_reset_postdata();
      // End of count post number
      endif;
      ?>
         <!-- ========================== .TABLE ====================== -->

     </div>
 </div>
 <!-- .Casino Hotel Table -->