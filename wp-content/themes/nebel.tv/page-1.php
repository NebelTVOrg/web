<?php
/*
Template Name: Simple page
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */


get_header(); ?>

    <div id="primary" class="content-area static_page">
        <div id="content" class="site-content" role="main">
            <article class="page">
                <div class="entry-holder content-scroll">
                    <h1 class="greener bold"><?php the_title(); ?></h1>
                    <div class="entry-content">
                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <?php the_content(); ?>
			<div id="m_container">
                        <div class="team_m first_m">
				<img src="http://181.224.158.152/~dejanmoo/wp4/wp-content/themes/nebel.tv/images/first.png" alt="first" />
				<p class="margin_top tit_m">Ihor Starepravo, MBA</p>
				<p class="tit_m">CEO & Founder</p>
				<p class="team_des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			</div>
                        <div class="team_m">
				<img src="http://181.224.158.152/~dejanmoo/wp4/wp-content/themes/nebel.tv/images/second.png" alt="first" />
				<p class="margin_top tit_m">Andrly Voznycia</p>
				<p class="tit_m">Technology & Architect</p>
				<p class="team_des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
                        <div class="team_m">
				<img src="http://181.224.158.152/~dejanmoo/wp4/wp-content/themes/nebel.tv/images/third.png" alt="first" />
				<p class="margin_top tit_m">Yurly Vykhovanskyy</p>
				<p class="tit_m">QA & QC</p>
				<p class="team_des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
                        <div class="team_m">
				<img src="http://181.224.158.152/~dejanmoo/wp4/wp-content/themes/nebel.tv/images/fourth.png" alt="first" />
				<p class="margin_top tit_m">Andrei Sirenko</p>
				<p class="tit_m">UI/UX  & Web Designer</p>
				<p class="team_des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			</div>
                    </div>
                </div>
            </article>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>