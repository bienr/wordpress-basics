<?php get_header();
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <?php the_content(); ?>
        </article>
<?php endwhile; else : ?>
    <h4>No content found</h4>
<?php endif;
    get_footer();
?>
