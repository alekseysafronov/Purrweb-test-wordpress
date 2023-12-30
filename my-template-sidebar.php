<?php
/*
Template Name: Страница с сайдбаром
Template Post Type: post, page
*/

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" style="background-color: wheat">

            <?php
            while (have_posts()) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile; ?>

        </main>
        <div class="sidebar" style="background-color: antiquewhite"><?php get_sidebar(); ?></div>
    </div>


<?php get_footer(); ?>