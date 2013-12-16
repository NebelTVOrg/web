<?php
/**
 * Template Name: Static Page
 */

get_header(); ?>

    <div id="primary" class="content-area static-page clear">
        <div id="content" class="site-content" role="main">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="entry-holder content-scroll">
                    <article id="post-<?php the_ID(); ?>" class ="post blog">
                        <div class="post-content">
                            <header class="entry-header clear">
                                <h1 class="post-title"><?php the_title(); ?></h1>
                                     <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                            </header><!-- .entry-header -->
                            <div class="entry-summary">
                                <?php the_content(); ?>
                            </div><!-- .entry-content -->
                        </div>
                    </article><!-- #post -->
                </div>

            <?php endwhile; ?>
        </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>