<?php
/**
 * The template for displaying Author archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */

get_header(); ?>

<div id="primary" class="content-area clear">
    <div id="content" class="site-content" role="main">
        <article class="blog">
            <div class="entry-holder content-scroll">
                 <div class="entry-content">
                    <ul class="posts">
                        <?php if( have_posts() ) : 
                        the_post();
                        rewind_posts();
                        ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail('thumb'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="post-preview">
                                    <header class="entry-header clear">
                                        <?php aeg_author_meta(); ?>
                                        <h2 class="post-title"><a class="greener" href="<?php echo get_permalink(get_the_ID())?>"><?php the_title(); ?></a></h2>
                                    </header>
                                        <div class="entry-summary">
                                            <?php 
                                                $excerpt = get_the_excerpt(); 
                                                echo aeg_string_limit_words($excerpt, 19);
                                            ?>
                                        </div>
                                        <div class="entry-meta">
                                            <div class="clear">
                                                <a class="read-more" href="<?php echo get_permalink()?>">Read More&hellip;</a>
                                                <?php aeg_author_meta(); ?>
                                                <?php aeg_post_date(); ?>
                                                <?php aeg_tag_meta(); ?>
                                                <?php aeg_cat_meta(); ?>
                                            </div>                                                
                                        </div>
                                </div><!-- .post-preview -->
                            </li><!-- #post -->
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </article>
        <div class="sub-content clear">
            <?php aeg_pagination(); ?>
            <?php aeg_socials(); ?>
        </div>
    </div><!-- #content -->
    <?php get_sidebar(); ?>
</div><!-- #primary -->
<?php get_footer(); ?>