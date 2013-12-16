<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */
?>

		</div><!-- #main -->
    <footer id="footer">
    <div class="clear">
        <aside class="footer_sections">
              <h3 class="footer_title">Search</h3>

            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                <label>
                    <input type="text" name="s" />
                </label>
                <input type="submit" id="sss" value="" />

            </form>

            <h3 class="footer_title">Archives</h3>
            <ul class="footer_list archieves">
            <?php
                wp_get_archives(array(
                'type'            => 'monthly',
                'limit'           => 3,
                'format'          => 'html'
            )); ?>
            </ul>
      </aside>

    <aside class="footer_sections">

            <h3 class="footer_title">Categories</h3>
             <ul class="footer_list footer_cats">
                    <?php wp_list_categories(array(
                        'hierarchical' => false,
                        'title_li'     => '',
                        'number'       => 12,
                        'exclude'      => 1
                    )); ?>
             </ul>

    </aside>


    <aside class="footer_sections">
             <h3 class="footer_titles">Recent Posts</h3>

            <ul class="footer_list">
            <?php
               $recent = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => 5,
                ));
                if($recent->have_posts()):
                    while($recent->have_posts()):
                        $recent->the_post();
                        $title = get_the_title() ?>
                    <li>
                        <a htef="<?php the_permalink(); ?>" title="<?php the_time(); ?>"><?php echo aeg_string_limit_words($title, 4); ?></a>
                    </li>
                    <?php endwhile;

                endif;
                wp_reset_postdata();
             ?>
            </ul>
    </aside>


    <aside class="footer_sections">
            <h3 class="footer_titles">Recent Comments</h3>
            <ul class="footer_list recent-comments">
            <?php aeg_recent_comments(); ?>
            </ul>
    </aside>


    <aside class="footer_sections">
            <h3 class="footer_titles social_header">Social Network</h3>
            <?php aeg_socials(); ?>

            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/donate-footer.png" class="aligncenter"/></a>

    </aside>
    </div>
    <div id="divider">
    </div>
        <div class="subfooter">
            <ul>
                <li>Meta</li>
                <li><a class="f_b_links" href="<?php echo home_url('/'); ?>wp-login.php">Log in</a></li>
                <li><a class="f_b_links" href="<?php echo home_url('/'); ?>feed">Entries RSS</a></li>
                <li><a class="f_b_links" href="http://nebeltv.disqus.com/latest.rss">Comments RSS</a></li>
            </ul>
    <p class="copy">Copyright &copy; <?php echo date('Y'); ?> Nebel.tv</p>
         </div>

</footer>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</div>
</body>
</html>
