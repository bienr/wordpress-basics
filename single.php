<?php get_header();
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
                <?php the_post_thumbnail("banner-image"); ?>
            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <p class="post-info">
                <?php the_time("F jS, Y"); ?> by
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                | Posted in
                <?php
                    $categories = get_the_category();
                    $separator = ", ";
                    $output = "";

                    foreach($categories as $category) {
                        $output .= "<a href='" . get_category_link($category->term_id) . "'>" . $category->cat_name . "</a>" . $separator;
                    }
                    echo trim($output, $separator);
                ?>
            </p>
            <?php the_content(); ?>
        </article>
<?php endwhile; else : ?>
    <h4>No content found</h4>
<?php endif;
    get_footer();
?>
