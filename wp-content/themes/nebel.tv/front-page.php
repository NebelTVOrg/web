<?php
/**
 * Created by PhpStorm.
 * User: howtwizer
 * Date: 09.12.13
 * Time: 14:05
 */

get_header(); ?>

    <div class="side-menu-buttons">
        <?php wp_nav_menu( array( 'theme_location' => 'side', 'menu_class' => '' ) ); ?>
    </div>
    <div id="primary">
    <div id="content" class="site-content" role="main">

    <article class="slice-1 slice" data-500="position:abosolute;top:20px;" data-1500="top: -700px;">
        <header class="entry-header homepage-header">
            <h1 class="entry-title">
                <span class="first-letter hidden">W</span><span class="hidden">hatever you want.&nbsp;&nbsp;</span>
                <span class="first-letter hidden">W</span><span class="hidden">henever you want.&nbsp;&nbsp;</span>
                <span class="first-letter hidden">W</span><span class="hidden">herever you want.</span>
                <a class="try-it-now hidden" href="#"></a>
            </h1>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <div class="homepage-figure none">
                <div class="phase-1 phase hidden"></div>
                <div class="phase-2 phase hidden"></div>
                <div class="phase-3 phase hidden"></div>
                <div class="phase-4 phase hidden"></div>
                <div class="phase-5 phase hidden"></div>
                <div class="item phone hidden"><a data-target="phone" href="#"></a></div>
                <div class="item tablet hidden"><a data-target="tablet" href="#"></a></div>
                <div class="item device hidden"><a data-target="device" href="#"></a></div>
                <div class="item usb hidden"><a data-target="usb" href="#"></a></div>
                <div class="item tv active hidden"><a data-target="tv" href="#"></a></div>
            </div>
            <div class="homepage-figure-content hidden homepage-step-1">
                <div class="item tv active">
                    <p>Nebel.TV’s <span class="">design</span> allows you access to <span class="">your media</span> wishes all in one place.</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/tv-big.png" alt="tv" width="477" height="307"/>
                </div>
                <div class="item usb">
                    <p>Cutting edge <span class="green">technology</span>, share <span class="green">Whatever, Whenever, Wherever.</span></p>
                    <img src="<?php echo get_template_directory_uri();?>/images/usb-big.png" alt="usb" widh="477" height="165"/>
                </div>
                <div class="item phone">
                    <p>Perfect playback, <span class="green">no matter</span> the size of <span class="green">your device</span> or bandwidth restrictions.</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/phone-big.png" alt=""/></div>
                <div class="item tablet">
                    <p>True mobile <span class="green">access</span> to your media for <span class="green">when you’re </span>out and about.</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/tablet-big.png" alt=""/></div>
                <div class="item device">

                    <p>Connect <span class="green">your HDMI</span> enabled device and <span class="green">experience the pleasure</span> on your TV.</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/device-big.png" alt=""/></div>
            </div>
        </div><!-- .entry-content -->

    </article><!-- #post -->

    <article class="slice-2 slice" data-500="" data-3500="">
        <div  class="entry-content">
            <a  name="media-sharing"></a>
            <div class="media-sharing" data-700="top:1000px" data-1500="top:0px" data-2300="top:0px" data-3100="top:-600px">
                <h2 class="green drop-shadow">Media sharing</h2>
                <p class="white drop-shadow">Sharing your media has now never been easier. Instant access to the media files of your friends.</p>
            </div>
            <div class="full-control" data-700="top:1000px" data-1700="top:450px" data-2500="top:450px" data-3500="top:-600px">
                <h2 class="green drop-shadow">Full control</h2>
                <p class="white drop-shadow">Full control over access to your own material, share only with those within your social circle.</p>
            </div>
        </div><!-- .entry-content -->

    </article><!-- #post -->
    <article class="slice-3 slice" data-2500="" data-5500="">
        <div class="entry-content">
            <a  name="live-content"></a>
            <div class="live-recorded" data-2700="top:1000px" data-3500="top: 0px" data-5000="top:0px" data-5100="top:-600px">
                <h2 class="green drop-shadow">Enjoy both Live and Recorded content</h2>
                <p class="white drop-shadow">Pause live broadcasts and continue watching whenever you choose, wherever you choose.</p>
            </div>
            <div class="live-recorded-2" data-3500="left:-1000px" data-4000="left:65px" data-5000="top:240px" data-5500="top:-600px"></div>
            <div class="live-recorded-3" data-3500="right: -1000px" data-4000="right:50px" data-5000="top:240px" data-5500="top:-600px"></div>
            <div class="missed" data-3500="top:1000px" data-4000="top:350px;" data-5000="top:350px" data-5500="top:-600px">
                <p class="green dwop-shadow">Missed an episode of your favorite show? Access the recorded
                    content of your social network. Never miss anything again!</p>
            </div>
        </div><!-- .entry-content -->

    </article><!-- #post -->
    <article class="slice-4 slice" data-4500="" data-7500="">
        <div class="entry-content">
            <a  name="smart-playback"></a>
            <div class="smart-playback-1" data-4700="top:1000px" data-5500="top:0px" data-6500="top:0px" data-7100="top:-600px"></div>
            <div class="smart-playback" data-4900="top:1000px" data-5900="top:0px" data-6600="top:0px" data-7500="top:-600px">
                <h2 class="green drop-shadow">Smart playback</h2>
                <p class="white drop-shadow">Technology adjusts to screen capabilities and available network bandwidth</p>
            </div>
            <div class="bandwidth-load" data-4900="top:1000px" data-5900="top:210px" data-6600="top:210px" data-7500="top:-600px">
                <span class="green drop-shadow">Bandwidth load</span>
            </div>
        </div><!-- .entry-content -->
    </article>

    </div><!-- #content -->


   <div id="no-paralax">





   <div id="content" >


   <article class="slice slice-5 ui ui-1" data-7500="" data-10500="">
        <div class="entry-content">
            <a  name="features"></a>
            <div class="text center" data-7600="top:1000px" data-8400="top:60px" data-10000="top:60px" data-10500="top:-600px">
                <h2 class="green drop-shadow fs-42">Friend feeds</h2>
                <p class="white drop-shadow">
                    the stream of audio/video commented/rated by your network. Your highly personalized media guide.
                </p>
            </div>
            <div class="tv" data-7600="left:-1000px" data-8400="left:0px" data-10000="left:0px" data-10500="left:-1000px">
                <div class="magnifier" data-8400="opacity:0" data-9200="opacity:1" data-10000="opacity:1" data-10500="opacity:0"></div>
            </div>
            <div class="magnified" data-8400="opacity:0" data-9200="opacity:1" data-10000="opacity:1" data-10500="opacity:0"></div>
        </div>
    </article>
    <article class="slice slice-6 ui ui-2" data-9500="" data-12500="">
        <div class="entry-content">
            <div class="text center" data-10000="top:1000px" data-10700="top:60px" data-12000="top:60px" data-12500="top:-600px">
                <h2 class="green drop-shadow fs-42">What's close</h2>
                <p class="white drop-shadow">
                    access to all of your home media library and content which is highly availble in your current location
                </p>
            </div>
            <div class="device" data-10000="top:1000px" data-10700="top:240px" data-12000="top:240px" data-12500="top:1000px">
                <div class="magnifier" data-10700="opacity:0" data-11200="opacity:1" data-12000="opacity:1" data-12500="opacity:0"></div>
            </div>
            <div class="magnified" data-10700="opacity:0" data-11200="opacity:1" data-12000="opacity:1" data-12500="opacity:0"></div>
        </div>
    </article>
    <article class="slice slice-7 ui ui-3" data-11500="" data-14500="">
        <div class="entry-content">
            <div class="text" data-12000="top:1000px" data-12700="top:60px" data-14000="top:60px" data-14500="top:-600px">
                <h2 class="green drop-shadow">What's hot</h2>
                <p class="white drop-shadow">
                    the content which is most ranked/viewed by your network. The easy way to acquaint new media friends and artists.
                </p>
            </div>
            <div class="phone" data-12000="top:-1000px" data-12700="top:60px" data-14000="top:60px" data-14500="top:-1000px">
                <div class="magnifier" data-12700="opacity:0" data-13200="opacity:1" data-14000="opacity:1" data-14500="opacity:0"></div>
            </div>
            <div class="magnified" data-12700="opacity:0" data-13200="opacity:1" data-14000="opacity:1" data-14500="opacity:0"></div>
        </div>
    </article>
    <article class="slice slice-8 ui ui-4" data-13500="" data-16500="">
        <div class="entry-content">
            <div class="text center" data-14000="top:1000px" data-14700="top:60px" data-16000="top:60px" data-16500="top:-600px">
                <h2 class="green drop-shadow fs-42">Recently viewed</h2>
                <p class="white drop-shadow">
                    review the content you played back recently.
                </p>
            </div>
            <div class="tv" data-14000="left:-1000px" data-14700="left:0px" data-16000="left:0px" data-16500="left:-1000px">
                <div class="magnifier" data-14700="opacity:0" data-15200="opacity:1" data-16000="opacity:1" data-16500="opacity:0"></div>
            </div>
            <div class="magnified" data-14700="opacity:0" data-15200="opacity:1" data-16000="opacity:1" data-16500="opacity:0"></div>
        </div>
    </article>
    <article class="slice slice-9 ui ui-5" data-15500="" data-18500="">
        <div class="entry-content">
            <div class="text center" data-16000="top:1000px" data-16700="top:60px" data-18000="top:60px" data-18500="top:-600px">
                <h2 class="green drop-shadow fs-42">Change mood</h2>
                <p class="white drop-shadow">
                    change your network entirely with simple swipe move.
                </p>
            </div>
            <div class="tablet-sad" data-16000="top:1000px" data-16700="top:240px" data-18000="top:240px" data-18500="top:-600px">
                <div class="magnifier" data-16700="opacity:0" data-17200="opacity:1" data-18000="opacity:1" data-18500="opacity:0"></div>
            </div>
            <div class="magnified" data-16700="opacity:0" data-17200="opacity:1" data-18000="opacity:1" data-18500="opacity:0"></div>
        </div>
    </article>
    <article class="slice slice-10 ui ui-6" data-17500="" data-20500="">
        <div class="entry-content">
            <div class="text" data-18000="top:1000px" data-18700="top:60px" data-20000="top:60px" data-20500="top:-600px">
                <h2 class="green drop-shadow fs-42">Import media</h2>
                <p class="white drop-shadow">
                    load your movies and get all meta information for your titles instantly via open-source metabase
                </p>
            </div>
            <div class="phone" data-18000="top:-1000px" data-18700="top:60px" data-20000="top:60px" data-20500="top:-600px">
                <div class="magnifier" data-18700="opacity:0" data-19200="opacity:1" data-20000="opacity:1" data-20500="opacity:0"></div>
            </div>
            <div class="magnified" data-18700="opacity:0" data-19200="opacity:1" data-20000="opacity:1" data-20500="opacity:0"></div>
        </div>
    </article>
    <article class="slice slice-11 ui ui-7" data-19500="" data-22500="">
        <div class="entry-content">
            <div class="text center" data-20000="top:1000px" data-20700="top:60px" data-22000="top:60px" data-22500="top:-600px">
                <h2 class="green drop-shadow fs-42">Content navigate</h2>
                <p class="white drop-shadow">
                    navigate content easily via browsing similar titles or releases from the same artist.
                </p>
            </div>
            <div class="tv" data-20000="left:-1000px" data-20700="left:0px" data-22000="left:0px" data-22500="left:-1000px">
                <div class="magnifier" data-20700="opacity:0" data-21200="opacity:1" data-22000="opacity:1" data-22500="opacity:0"></div>
            </div>
            <div class="magnified" data-20700="opacity:0" data-21200="opacity:1" data-22000="opacity:1" data-22500="opacity:0"></div>
        </div>
    </article>
    <article class="slice slice-12" data-22500="" data-25500="">
        <div class="entry-content">

            <div class="pay-zero-1" data-22000="left:-1000px" data-23000="left:0" data-24500="top:50px" data-25500="top:-600px"></div>
            <div class="pay-zero-2" data-22000="right:-1000px" data-23000="right:0" data-24500="top:110px" data-25500="top:-600px"></div>
            <div class="pay-zero" data-23000="top:1000px" data-23200="top:70px" data-24500="top:70px" data-25500="top:-600px">
                <a name="payzero"></a>
                <h2 class="white drop-shadow"> is for free!!!</h2>

                <p class="white drop-shadow">

                    That’s right, pay absolutely nothing, zero, zilch, for the software download for
                    your applicable device from the online store.
                </p>

            </div>
        </div>
    </article>
    <article class="slice slice-13" data-24500="" data-27500="">
        <div class="entry-content">
            <a name="paymentsystem"></a>
            <h2 class="white drop-shadow center smoothly" data-24500="top: 1000px" data-25200="top:60px" data-26300="top:60px" data-27500="top:-600px">
                Smoothly integrated payment system: <br/>
                Pay and get paid for your own online content
            </h2>
            <div class="inner" data-26300="top:0px" data-27500="top:-600px">
                <p class="white drop-shadow coin" data-25200="opacity:0" data-25700="opacity:1">
                    Live in a country not supported by Paypal?
                    Not a problem... the integrated Bitcoin system
                    gives you the best confidentiality possible
                </p>
                <p class="white drop-shadow money" data-25700="opacity:0" data-26200="opacity:1">
                    Tired of being flooded with advertising...
                    now GET paid to view ads and spent
                    the credit on your new content!
                </p>
            </div>
            <div class="payment-system-phone" data-24700="top:1000px" data-25200="top:143px" data-26300="top:143px" data-27500="top:-600px"></div>
        </div>
    </article>
    <article class="slice slice-14" data-26500="" data-29500="">
        <div class="entry-content">
            <a name="no-intermediates"></a>
            <h2 class="white drop-shadow center" data-27000="top:1000px" data-27700="top:60px" data-29000="top:60px" data-29400="top:-600px">
                Follow your favorite artists without third party intervention
            </h2>
            <div class="left" data-27700="left:-1000px" data-28400="left:0px" data-29200="top:200px" data-29500="top:-600px">
                <p class="white drop-shadow">
                    <img src="<?php echo get_template_directory_uri();?>/images/follow-1.png" width="204" height="204"><br/>
                    Directly reward the artist themselves
                    for their creativity, not the recording label,
                    hosting site etc
                </p>
            </div>
            <div class="right" data-27700="right:-1000px" data-28400="right:0px" data-29200="top:200px" data-29500="top:-600px">
                <p class="white drop-shadow">
                    <img src="<?php echo get_template_directory_uri();?>/images/follow-2.png" width="204" height="204"/><br/>
                    Heard or seen something that you enjoyed?
                    Want to help get this artist recognised?
                    Pledge your support to their future projects.
                </p>
            </div>
        </div>
    </article>
    <article class="slice slice-15" data-28500="" data-31500="">
        <div class="entry-content">
            <a name="anartistyourself"></a>
            <h2 class="white drop-shadow" data-28900="top:1000px" data-29600="top:60px" data-31000="top:60px" data-31400="top:-600px">
                An Artist yourself?<br/>
                A budding independent film maker<br/>
                or creative musician?
            </h2>

            <div class="left first" data-29600="left:-1000px" data-30100="left:0px" data-31000="top:220px" data-31500="top:-600px">
                <p class="white drop-shadow">
                    <img src="<?php echo get_template_directory_uri();?>/images/artist-1.png" height="204" width="204" /><br/>
                    Promote your content and receive 100% royalties for your work by reaching out to a global audience.
                </p>
            </div>
            <div class="left second" data-29600="top:1000px" data-30100="top:220px" data-31000="top:220px" data-31500="top:-600px">
                <p class="white drop-shadow">
                    <img src="<?php echo get_template_directory_uri();?>/images/artist-2.png" height="204" width="204" /><br/>
                    Create your own news or TV channel, feed it to your network and compete with the likes of CNN and the BBC.
                </p>
            </div>
            <div class="left third" data-29600="right:-1000px" data-30100="right:0px" data-31000="top:220px" data-31500="top:-600px">
                <p class="white drop-shadow">
                    <img src="<?php echo get_template_directory_uri();?>/images/artist-3.png" height="204" width="204" /><br/>
                    Never share or give away your royalties. You works remains your forever.
                </p>
            </div>
        </div>
    </article>
    <article class="slice slice-16" data-30500="" data-32000="">
        <div class="entry-content">
            <a name="security"></a>
            <div class="text" data-31500="top:1000px" data-32200="top:60px" data-33200="top:60px" data-34000="top:1000px">
                <h2 class="white drop-shadow">The ability to make all of your viewing activities private:</h2>
                <h3 class="white drop-shadow">You have the ability to share your content and social network with only those you choose. Nothing is shared unless you choose to.</h3>
            </div>
            <div class="left" data-32200="opacity:0" data-32700="opacity:1"  data-33700="opacity:1" data-34100="opacity:0">
                <p class="green">
                    <img src="<?php echo get_template_directory_uri();?>/images/security-1.png" width="204" height="183"/><br/>
                    Share your content with one friend or group. Nobody is able to pick in!
                </p>
            </div>
            <div class="right" data-32200="opacity:0" data-32700="opacity:1" data-33700="opacity:1" data-34100="opacity:0">
                <p class="green">
                    <img src="<?php echo get_template_directory_uri();?>/images/security-2.png" width="196" height="183"/> <br/>
                    Make your social network private: no one except you can analyze and monetize your network.
                </p>
            </div>
        </div>
    </article>

   </div><!-- no palalx -->

    </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>
