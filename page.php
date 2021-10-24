<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Indusrty
 */

if(get_post_meta( $post->ID, 'industry_rrfonline_page_meta', true)) {
    $page_meta = get_post_meta( $post->ID, 'industry_rrfonline_page_meta', true);
} else {
    $page_meta = array();
}

if(array_key_exists('enable_title', $page_meta)) {
    $enable_title = $page_meta['enable_title'];
} else {
    $enable_title = true;
}

if(array_key_exists('custom_title', $page_meta)) {
    $custom_title = $page_meta['custom_title'];
} else {
    $custom_title = '';
}

if(array_key_exists('title_text_direction', $page_meta)) {
    $title_text_direction = $page_meta['title_text_direction'];
} else {
    $title_text_direction = 'left';
}


get_header(); ?>

    <?php if($enable_title == true) : ?>

    <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" class="industry-page-title-area">
        <div class="container">
            <div class="row text-<?php echo $title_text_direction ?>">
                <div class="col-md-12">
                    <?php if(empty($custom_title)) : ?>
                    <h1><?php the_title(); ?></h1>
                    <?php else : ?>
                        <div class="industry-page-custom-title">
                            <?php echo wpautop($custom_title); ?>
                        </div>
                    <?php endif; ?>
                    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
                    
                </div>
            </div>
        </div>
    </div>

    <?php endif; ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php  get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php endwhile; // End of the loop. ?>
<?php
get_footer();
