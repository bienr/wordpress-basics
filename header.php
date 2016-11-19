<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('name') ?></title>
        <meta charset="utf-8"/>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container">
            <header class="site-header">
                <a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                <h4>
                    <?php bloginfo('description') ?>
                    <?php if (is_page("contact-us")) : ?>
                         - Thank you for contacting us!
                    <?php endif; ?>
                </h4>
                <nav class="site-nav">
                    <?php
                        $args = array(
                            "theme_location" => "header"
                        );
                        wp_nav_menu($args);
                     ?>
                </nav>
            </header>