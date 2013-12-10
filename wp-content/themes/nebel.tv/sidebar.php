<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */

if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="blog-sidebar" class="blog-sidebar" role="complementary">
			<div class="widget-area">
                <aside id="calendar" class="widget widget_calendar">
                    <div id="calendar_wrap">
                        <?php aeg_get_calendar(false); ?>
                    </div>
                </aside>
                <aside id="categories" class="widget widget_categories">
                    <ul>
                        <?php wp_list_categories(array('title_li'=>'', 'exclude' => 1)); ?>
                    </ul> 
                </aside>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
	</div>
<?php endif; ?>