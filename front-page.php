<?php get_header(); ?>

<div class="site-content clearfix">
    <?php if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part("content", get_post_format());
            endwhile;
        else :
    ?>
        <h4>No content found</h4>
    <?php endif;
        $lipsumCatId = get_category_by_slug("lipsum")->term_id;
        $lipsumPosts = new WP_Query("cat=" . $lipsumCatId . "&posts_per_page=2&orderby=title&order=DESC");
        if ($lipsumPosts->have_posts()) :
            while ($lipsumPosts->have_posts()) : $lipsumPosts->the_post(); ?>
                <h2><?php the_title(); ?></h2>
            <?php endwhile; else : ?>
            <h4>No lipsum posts</h4>
        <?php endif;
        wp_reset_postdata();
    ?>
</div>
<?php get_footer();
?>
