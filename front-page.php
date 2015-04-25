<?php get_header(); ?>

        <div class="container front-page">
            <div class="front-page-welcome">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif;  ?>

            </div>

        </div>

<?php get_footer(); ?>