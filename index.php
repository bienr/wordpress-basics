<?php get_header();
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            get_template_part("content");
        endwhile;
    else :
?>
    <h4>No content found</h4>
<?php endif;
    get_footer();
?>
