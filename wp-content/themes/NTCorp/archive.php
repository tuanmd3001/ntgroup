<!DOCTYPE html>
<!-- saved from url=(0032)https://gorandemo.wordpress.com/ -->
<?php get_header(); ?>

<!-- #masthead -->

<div id="content" class="site-content">

    <?php $category = get_the_category(); ?>
    <div class="hero with-featured-image" style="padding-top: 312px;">

        <div class="hero-wrapper"><h1 class="page-title"><?php echo $category[0]->cat_name; ?></h1></div>
    </div>
    <!-- .hero -->

    <div class="breadcrumbs-wrapper">
        <nav class="entry-breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link" rel="home">Home</a>
            <span><?php echo $category[0]->cat_name; ?></span>
    </div>
    <div id="quaternary" class="featured-page-area">
        <div class="featured-page-wrapper clear">
            <?php
            while (have_posts()) : the_post(); ?>
                <div class="featured-page">
                    <article id="post-117" class="post-117 page type-page status-publish has-post-thumbnail hentry">

                        <a class="post-thumbnail" href="<?php echo get_permalink() ?>">
                            <img width="314" height="228"
                                 src="<?php echo get_field('anhbia') ?>"
                                 class="attachment-edin-thumbnail-landscape wp-post-image" alt="keyboard-338507_1920">
                        </a>
                        <header class="entry-header">
                            <h1 class="entry-title">
                                <a href="<?php echo get_permalink() ?>"
                                   rel="bookmark"><?php echo $post->post_title ?></a>
                            </h1>
                        </header>
                        <div class="entry-summary">
                            <p><?php echo get_field('mota') ?></p>

                            <p>
                                <a class="more-link" href="<?php echo get_permalink() ?>" rel="bookmark">
                                    Read more
                                    <span class="screen-reader-text"><?php echo $post->post_title ?></span>
                                </a>
                            </p>
                        </div>
                        <!-- .entry-summary -->

                    </article>
                </div>
            <?php
            endwhile;
            ?>
        </div>

    </div>
    <!-- #quaternary -->


    <div id="quinary" class="front-page-widget-area" role="complementary">
        <div class="front-page-widget-wrapper clear">
            <div class="front-page-widget">
                <aside id="text-4" class="widget widget_text"><h2 class="widget-title">Front Page Widgets</h2>

                    <div class="textwidget"><p>This area of your home page is configured by going to Dashboard →
                            Appearance → Widgets and adding widgets in the Front Page widget areas.</p>
                    </div>
                </aside>
            </div>
            <!-- .front-page-widget -->

            <div class="front-page-widget">
                <aside id="text-2" class="widget widget_text"><h2 class="widget-title">Custom Page Templates</h2>

                    <div class="textwidget"><p>Goran has four custom page templates that are great for business and
                            corporate websites:</p>

                        <ul>
                            <li>
                                <a href="./Goran _ Goran is a modern responsive business and corporate theme that helps you to create a strong–yet beautiful–online presence for your business_files/Goran _ Goran is a modern responsive business and corporate theme that helps you to create a strong–yet beautiful–online presence for your business.html">Front
                                    Page Template</a></li>
                            <li><a href="https://gorandemo.wordpress.com/page-templates/full-width-page/">Full Width
                                    Page Template</a></li>
                            <li><a href="https://gorandemo.wordpress.com/page-templates/grid-page/">Grid Page
                                    Template</a></li>
                            <li><a href="https://gorandemo.wordpress.com/page-templates/alternate-sidebar-page/">Alternate
                                    Sidebar Page Template</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <!-- .front-page-widget -->

            <div class="front-page-widget">
                <aside id="recent-posts-2" class="widget widget_recent_entries"><h2 class="widget-title">Recent
                        News</h2>
                    <ul>
                        <li>
                            <a href="https://gorandemo.wordpress.com/2014/07/30/new-identity/">New identity</a>
                            <span class="post-date">July 30, 2014</span>
                        </li>
                        <li>
                            <a href="https://gorandemo.wordpress.com/2014/07/22/goran-is-taking-the-day-off/">Goran
                                is taking the day&nbsp;off</a>
                            <span class="post-date">July 22, 2014</span>
                        </li>
                        <li>
                            <a href="https://gorandemo.wordpress.com/2014/07/21/a-short-post/">A Short Post</a>
                            <span class="post-date">July 21, 2014</span>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- .front-page-widget -->
        </div>
        <!-- .front-page-widget-wrapper -->
    </div>
    <!-- #quinary -->


</div>
<!-- #content -->
<?php get_footer(); ?>
