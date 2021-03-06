<?php get_header(); ?>

        <div class="container standard-container">
            <article class="post-content">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <header>
                    	<h1><?php the_title(); ?></h1>
                    </header>
                    <?php the_content(); ?>


                <?php if (!have_comments() && !comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) :
                    // Do nothing
                else :
                    comments_template();
                endif; ?>
                <?php endwhile; endif;  ?>

            </article>

        </div>

<?php get_footer(); ?>