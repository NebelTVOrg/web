<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
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
                                                <?php aeg_cat_meta(); ?>                                                x
                                                <?php aeg_post_date(); ?>
                                            </div>                                                
                                        </div>
                                </div><!-- .post-preview -->
                            </li><!-- #post -->
                        <?php endwhile; ?>
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