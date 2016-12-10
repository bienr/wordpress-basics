<?php get_header(); ?>

<div class="site-content clearfix">
    <div class="main-column">
    <?php if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part("content", get_post_format());
            endwhile;
        else :
    ?>
        <h4>No content found</h4>
    <?php endif; ?>
    </div>

    <div class="secondary-column">
        This is the sidebar...
    </div>
</div>
<?php get_footer();
?>
