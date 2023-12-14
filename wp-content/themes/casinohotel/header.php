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
<!-- Body class function added to specify the classes on each page to use these classes in css or js -->

<body <?php body_class() ?>>
    <header>
        <!-- ======================  Top banner section ========================  -->
        <?php if( is_front_page()) :
         get_template_part('template-parts/content', 'banner');
        endif;
        ?>

    </header>