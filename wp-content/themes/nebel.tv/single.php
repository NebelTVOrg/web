<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                
                    <div class="entry-holder content-scroll">
                    <article id="post-<?php the_ID(); ?>" class ="post">
                            <?php if ( has_post_thumbnail() ) : ?>
                    		<div class="entry-thumbnail">
                    			<?php the_post_thumbnail(); ?>
                    		</div>
                    		<?php endif; ?>
                            <div class="post-content">                                
                            	<header class="entry-header clear">
                            		<h1 class="post-title"><?php the_title(); ?></h1>
                            		<div class="entry-meta">
                            			<?php aeg_author_meta(); ?>
                                        <?php aeg_cat_meta(); ?>
                                        <?php aeg_tag_meta(); ?>
                            			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                            		</div><!-- .entry-meta -->
                            	</header><!-- .entry-header -->
                            
                            	<div class="entry-summary">
                            		<?php the_content(); ?>
                                    <footer class="entry-meta">
                                        <?php aeg_post_date(); ?>
                                        <?php get_template_part('inc/social'); ?>
                                        <?php twentythirteen_post_nav(); ?>
                                		<?php if ( comments_open() && ! is_single() ) : ?>
                                			<div class="comments-link">
                                				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
                                			</div><!-- .comments-link -->
                                		<?php endif; // comments_open() ?>
                                	</footer><!-- .entry-meta -->
                            	</div><!-- .entry-content -->
                            </div>
                            <div class="clear"></div>
                    	                        
				        <?php comments_template(); ?>
                    </article><!-- #post -->
                    </div>
                
			<?php endwhile; ?>
		</div><!-- #content -->
        <?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>