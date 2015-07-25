<?php get_header(); ?>
    <div id="content" class="site-content">
        <?php
        while (have_posts()) : the_post(); ?>

            <div class="hero with-featured-image" style="padding-top: 312px;">

                <div class="hero-wrapper"><h1 class="page-title"><?php echo $post->post_title ?></h1></div>
            </div>
            <!-- .hero -->


            <div class="breadcrumbs-wrapper">
                <nav class="entry-breadcrumbs">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link" rel="home">Home</a>
                    <?php $category = get_the_category(); ?>
                    <a href="<?php echo get_category_link($category[0]->term_id) ?>"><?php echo $category[0]->cat_name; ?></a>
                    <span class="current-page"><?php echo $post->post_title ?></span></nav>
            </div>
            <!-- .breadcrumbs-wrapper -->


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
            <!-- #primary -->


<!--            --><?php //get_sidebar()?>
            <!-- #secondary -->
            <!-- .content-wrapper -->
        <?php endwhile; ?>
    </div>
    <!-- #content -->
<?php get_footer(); ?>