<div id="tertiary" class="footer-widget-area" role="complementary">
    <div class="footer-widget-wrapper clear">
        <div class="footer-widget">
            <aside id="nav_menu-4" class="widget widget_nav_menu"><h2 class="widget-title">Pages</h2>

                <div class="menu-elements-container">
                    <ul id="menu-elements" class="menu">
                        <li id="menu-item-226"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-226"><a
                                href="https://gorandemo.wordpress.com/html-elements/">HTML Elements</a></li>
                        <li id="menu-item-227"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227"><a
                                href="https://gorandemo.wordpress.com/image-alignment-and-styles/">Image Alignment
                                and Styles</a></li>
                        <li id="menu-item-228"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a
                                href="https://gorandemo.wordpress.com/readability/">Readability</a></li>
                    </ul>
                </div>
            </aside>
        </div>
        <!-- .footer-widget -->

        <div class="footer-widget">
            <aside id="text-3" class="widget widget_text"><h2 class="widget-title">Responsive Design</h2>

                <div class="textwidget"><p>Goran's layout adjusts itself depending on the device you are using. This
                        means your site will look good not only on laptop browsers, but also on devices with smaller
                        screens, such as the iPad and the iPhone.</p>
                </div>
            </aside>
        </div>
        <!-- .footer-widget -->

        <div class="footer-widget">
            <aside id="nav_menu-2" class="widget widget_nav_menu"><h2 class="widget-title">Follow Us</h2>

                <div class="menu-social-container">
                    <ul id="menu-social" class="menu">
                        <li id="menu-item-111"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-111"><a
                                href="http://facebook.com/">Facebook</a></li>
                        <li id="menu-item-112"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112"><a
                                href="http://twitter.com/">Twitter</a></li>
                        <li id="menu-item-115"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-115"><a
                                href="http://plus.google.com/">Google Plus</a></li>
                        <li id="menu-item-113"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-113"><a
                                href="http://pinterest.com/">Pinterest</a></li>
                        <li id="menu-item-114"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-114"><a
                                href="http://dribbble.com/">Dribbble</a></li>
                    </ul>
                </div>
            </aside>
        </div>
        <!-- .footer-widget -->
    </div>
    <!-- .footer-widget-wrapper -->
</div>
<!-- #tertiary -->


<footer id="colophon" class="site-footer" role="contentinfo">
    <nav class="footer-navigation" role="navigation">
        <div class="menu-footer-container">
            <ul id="menu-footer" class="clear">
                <li id="menu-item-161"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-161"><a
                        href="<?php echo esc_url(home_url('/about-us')); ?>">About us</a></li>
                <li id="menu-item-166"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-166"><a
                        href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact us</a></li>
            </ul>
        </div>
    </nav>
    <!-- .footer-navigation -->
    <div class="site-info">
        <a href="<?php echo esc_url(home_url('/')); ?>">NT International</a>
<!--        <span class="sep"> | </span>-->
    </div>
    <!-- .site-info -->
</footer>
<!-- #colophon -->
</div>
<!-- #page -->

<!-- wpcom_wp_footer -->
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/gprofiles.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var WPGroHo = {"my_hash": ""};
    /* ]]> */
</script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/wpgroho.js"></script>

<script>
    //initialize and attach hovercards to all gravatars
    jQuery(document).ready(function ($) {

        if (typeof Gravatar === "undefined") {
            return;
        }

        if (typeof Gravatar.init !== "function") {
            return;
        }

        Gravatar.profile_cb = function (hash, id) {
            WPGroHo.syncProfileData(hash, id);
        };
        Gravatar.my_hash = WPGroHo.my_hash;
        Gravatar.init('body', '#wp-admin-bar-my-account');
    });
</script>

<div style="display:none">
</div>

<div id="bit" class="loggedout-follow-normal" style="bottom: -281px;">
    <a class="bsub" href="javascript:void(0)"><span id="bsub-text">Follow</span></a>

    <div id="bitsubscribe">

        <h3><label for="loggedout-follow-field">Follow “Goran”</label></h3>

        <form action="https://subscribe.wordpress.com/" method="post" accept-charset="utf-8" id="loggedout-follow">
            <p>Get every new post delivered to your Inbox.</p>

            <p id="loggedout-follow-error" style="display: none;"></p>

            <p class="bit-follow-count">Join 355 other followers</p>

            <p><input type="email" name="email" value="Enter your email address"
                      onfocus="this.value=(this.value==&quot;Enter your email address&quot;) ? &quot;&quot; : this.value;"
                      onblur="this.value=(this.value==&quot;&quot;) ? &quot;Enter your email address&quot; : this.value;"
                      id="loggedout-follow-field"></p>

            <input type="hidden" name="action" value="subscribe">
            <input type="hidden" name="blog_id" value="73011137">
            <input type="hidden" name="source" value="https://gorandemo.wordpress.com/">
            <input type="hidden" name="sub-type" value="loggedout-follow">

            <input type="hidden" id="_wpnonce" name="_wpnonce" value="405462d1f5"><input type="hidden"
                                                                                         name="_wp_http_referer"
                                                                                         value="/">

            <p id="bsub-subscribe-button"><input type="submit" value="Sign me up"></p>
        </form>
        <div id="bsub-credit"><a href="https://wordpress.com/?ref=lof">Build a website with WordPress.com</a></div>
    </div>
    <!-- #bitsubscribe -->
</div>
<!-- #bit -->

<!--<div id="demosite-activate-wrap" class="demosite-activate">-->
<!---->
<!--    <header class="demosite-header">-->
<!--        <p class="demosite-tagline">Start your WordPress.com blog with this theme.</p>-->
<!--        <a class="demosite-activate-trigger" href="https://signup.wordpress.com/signup/?theme=pub%2Fgoran&source=demo-blog">Sign Up Now</a>-->
<!--    </header>-->
<!--    <div id="demosite-activate">-->
<!---->
<!--    </div><!-- #demosite-activate -->
<!--</div><!-- #demosite-activate-wrap -->
<script type="text/javascript">
    /* <![CDATA[ */
    var JetpackEmojiSettings = {"base_url": "https:\/\/s0.wp.com\/wp-content\/mu-plugins\/emoji\/twemoji\/"};
    /* ]]> */
</script>
<script type="text/javascript"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/js/saved_resource(3)"></script>
<script type="text/javascript">
    // <![CDATA[
    (function () {
        try {
            if (window.external && 'msIsSiteMode' in window.external) {
                if (window.external.msIsSiteMode()) {
                    var jl = document.createElement('script');
                    jl.type = 'text/javascript';
                    jl.async = true;
                    jl.src = '/wp-content/plugins/ie-sitemode/custom-jumplist.php';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(jl, s);
                }
            }
        } catch (e) {
        }
    })();
    // ]]>
</script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/w.js" type="text/javascript" async=""
        defer=""></script>
<script type="text/javascript">
    _tkq = window._tkq || [];
    _stq = window._stq || [];
    _tkq.push(['storeContext', {
        'blog_id': '73011137',
        'blog_tz': '0',
        'user_lang': 'en',
        'blog_lang': 'en',
        'user_id': '0'
    }]);
    _stq.push(['view', {
        'blog': '73011137',
        'v': 'wpcom',
        'tz': '0',
        'user_id': '0',
        'post': '106',
        'subd': 'gorandemo'
    }]);
    _stq.push(['extra', {'crypt': 'UE40eW5QN0p8M2Y/RE1oV0pFNEwueXFaVXlyMGwvVG9bYmZXaDJ1Nmx+ankzUUUvVlg4OF92Y0gwNXlOMVYwc1FKb3pmcFJbN3dUWmc5WldXR0Z+Vy8rJXJxd35UZXM/UERVR3hmQXxWLjVBZU1kSCwySDJMOFNYdVs1aFlVYjhhYz1VUVZ5OTFPUHE4UzJyc0NoQWlVQm9bWy1RSmZoX0t4ZXpza01NL2lZRnJxazFbLVI4P2VubD9+YS55UGg9L2N5M25lST9XZ2lXc0lTZnZyTFFlck9zY11qXVE0Q2ZHOUdzUktSWmUmLldEVHRhTXAmeHdUQX5SW2RkY3lEVlN4flAsTWU5ek9wJnY2YnxSflpxQlQ='}]);
    _stq.push(['clickTrackerInit', '73011137', '106']);
</script>
<noscript>&lt;img src="https://pixel.wp.com/b.gif?v=noscript" style="height:0px;width:0px;overflow:hidden" alt=""
    /&gt;</noscript>
<script>
    if ('object' === typeof wpcom_mobile_user_agent_info) {

        wpcom_mobile_user_agent_info.init();
        var mobileStatsQueryString = "";

        if (false !== wpcom_mobile_user_agent_info.matchedPlatformName)
            mobileStatsQueryString += "&x_" + 'mobile_platforms' + '=' + wpcom_mobile_user_agent_info.matchedPlatformName;

        if (false !== wpcom_mobile_user_agent_info.matchedUserAgentName)
            mobileStatsQueryString += "&x_" + 'mobile_devices' + '=' + wpcom_mobile_user_agent_info.matchedUserAgentName;

        if (wpcom_mobile_user_agent_info.isIPad())
            mobileStatsQueryString += "&x_" + 'ipad_views' + '=' + 'views';

        if ("" != mobileStatsQueryString) {
            new Image().src = document.location.protocol + '//pixel.wp.com/g.gif?v=wpcom-no-pv' + mobileStatsQueryString + '&baba=' + Math.random();
        }

    }
</script>


<!--
	generated in 0.289 seconds
	26110 bytes batcached for 300 seconds
-->
<img
    src="<?php echo esc_url(get_template_directory_uri()); ?>/g.gif"
    id="wpstats"></body></html>