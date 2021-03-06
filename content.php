<article class="post <?php if (has_post_thumbnail()) { ?>has-thumbnail<?php } ?>">
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("small-thumbnail"); ?></a>
    </div>
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
    <p>
    <?php if (is_search() OR is_archive()) {
            the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
        <?php } else {
            if (has_excerpt()) {
                echo get_the_excerpt();
            } else {
                the_content();
            } ?>
            <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
        <?php } ?>
    </p>
</article>