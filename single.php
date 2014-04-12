<?php get_header(); ?>

        <div class="container standard-container">
            <article class="post-content">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <header>
                    	<h1><?php the_title(); ?></h1>
                    </header>
                    <?php the_content(); ?>

                <?php endwhile; endif;  ?>

            </article>

        </div>

<?php get_footer(); ?>