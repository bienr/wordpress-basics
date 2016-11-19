<?php get_header();
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post page">
            <div class="title-column">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="content-column">
                <?php the_content(); ?>
            </div>
        </article>
<?php endwhile; else : ?>
    <h4>No content found</h4>
<?php endif;
    get_footer();
?>
