<?php
    /*
        Template Name: Template Disclaimer
    */
    get_header();
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post page">
            <h2><?php the_title(); ?></h2>
            <div class="info-box">
                <h4>Disclaimer</h4>
                <p>Enthusiastically fabricate team driven imperatives before strategic strategic theme areas. Authoritatively promote plug-and-play functionalities whereas multimedia based e-markets. Proactively utilize quality process improvements without collaborative metrics.<p>
            </div>
            <div class="content-justified">
                <?php the_content(); ?>
            </div>
        </article>
<?php endwhile; else : ?>
    <h4>No content found</h4>
<?php endif;
    get_footer();
?>
