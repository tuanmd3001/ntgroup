<!DOCTYPE html>
<!-- saved from url=(0032)https://gorandemo.wordpress.com/ -->
<?php
while (have_posts()) : the_post(); ?>
<?php get_header(); ?>

<!-- #masthead -->

<div id="content" class="site-content">
    <div class="hero with-featured-image" style="padding-top: 312px;">

        <div class="hero-wrapper"><h1 class="page-title"><?php echo $post->post_title; ?></h1></div>
    </div>
    <!-- .hero -->

    <div class="breadcrumbs-wrapper">
        <nav class="entry-breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link" rel="home">Home</a>
            <span><?php echo $post->post_title; ?></span>
    </div>
    <div id="quaternary" class="featured-page-area">
        <div class="featured-page-wrapper clear">



                <div class="content-wrapper clear">

                    <div id="primary" class="content-area" >
                        <main id="main" class="site-main" role="main">


                            <article id="post-143" class="post-143 page type-page status-publish has-post-thumbnail hentry">
                                <div class="entry-content">
                                    <?php echo $post->post_content ?>
                                </div>
                                <p>&nbsp;</p>

                                <!-- .entry-content -->

                            </article>
                            <!-- #post-## -->


                        </main>
                        <!-- #main -->
                    </div>
                </div>
        </div>

    </div>
    <!-- #quaternary -->



</div>
<!-- #content -->
<?php
endwhile;
?>
<?php get_footer(); ?>
