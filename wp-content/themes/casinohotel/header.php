<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <?php
    wp_head();
    ?>
</head>

<body>
    <header>

        <div class="container-fluid p-0">
            <!-- Jumbotron -->
            <?php
    if(function_exists('the_custom_logo')) {
        $custom_logo_id =   get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
    }
   $hero_image = get_field('hero_image'); ?>

            <div class="p-5 w-100 bg-image h-200" style="
    height: 636px;
    background-image: 
    url('<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>');">

                <div class="row d-flex justify-content-start align-items-start">
                    <div class="col-12 col-md-6 text-white" data-aos="fade-right">
                        <img class="mb-4" src="<?php echo $logo[0]; ?>">
                        <h1 class="mb-4"><?php echo get_field('hero_heading') ?></h1>
                        <h5 class="mb-4"><?php echo get_field('hero_sub_heading')?></h5>
                        <a class="btn p-btn bg-pink btn-lg" href="#!" role="button">
                            Explore Today
                            <span><img class="btn-arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-down.png"></span>
                        </a>
                    </div>
                </div>

            </div>
            <!-- .Jumbotron -->

    </header>