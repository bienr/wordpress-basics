<?php get_header();
    if (have_posts()) : ?>

        <h2>Search Results for: <?php the_search_query(); ?></h2>

    <?php while (have_posts()) : the_post();
        get_template_part("content");
    endwhile; else : ?>
    <h4>No content found</h4>
<?php endif;
    get_footer();
?>
