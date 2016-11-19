<?php get_header();
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post page">
            <?php if (has_children() OR $post->ID > 0) : ?>
            <nav class="site-nav children-links clearfix">
                <a class="parent-link" href="<?php get_the_permalink(get_ancestors_top()); ?>">
                    <h4><?php echo get_the_title(get_ancestors_top()); ?></h4>
                </a>
                <ul>
                    <?php
                        $args = array(
                            "child_of" => get_ancestors_top(),
                            "title_li" => ""
                        );
                     ?>
                    <?php wp_list_pages($args); ?>
                </ul>
            </nav>
            <?php endif; ?>
            <!--pre><?php print_r(array_reverse(get_post_ancestors($post->ID))); ?></pre-->
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
<?php endwhile; else : ?>
    <h4>No content found</h4>
<?php endif;
    get_footer();
?>
