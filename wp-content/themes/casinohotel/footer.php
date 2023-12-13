<footer>
    <div class="container-fluid bg-dark footer text-center  p-4">
        <div class="row footer-logo">
            <div class="col">
                <!-- Get the logo form the given path from stylesheet directory -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.png" alt="">
            </div>
            <?php
      // Populate wordpress footer menu
         wp_nav_menu(
            array(
               'menu' => 'footer',
               'container' => '',
               'theme_location'=> 'footer',
               'items_wrap' => '<ul class="footer-menu my-4">%3$s</ul>'
            )
            );
      ?>
            <hr>
            <!-- Copyrighrt-->
            <div class="copyright order-1 order-md-1  mt-4">
                &copy; 2022 Top 10 Casinos Worldwide. All rights reserved.
            </div>
            <!-- Be gamling awar icons -->
            <div class="footer-icons my-4 order-2 order-md-2">
                <img class="bc-icon"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-bc-icon.png"
                    alt="Footer Bc icon">
                <img class="age-18-icon text-center text-md-end mx-auto pt-4"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-icon.png" alt="Footer icon">
            </div>

        </div>
    </div>
</footer>


<?php
   wp_footer();
   ?>

<!-- AOS animation plugin installed -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>

</html>