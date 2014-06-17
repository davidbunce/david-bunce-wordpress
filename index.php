<?php get_header(); ?>

        <div class="container standard-container">
            <div class="post-content">
                <h1>Blog</h1>
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="post-loop">
                        <header>
                            <h2><a href="<?php the_permalink(); ?>" ?><?php the_title(); ?></a></h2>
                            <p class="post-details"><?php the_time('d m y '); ?></p>
                        </header>
                        <?php the_excerpt(); ?>
                        <p>
                        	<a href="<?php the_permalink(); ?>" ?>Read more</a>
                        </p>
                    </article>
                <?php endwhile; endif;  ?>

            </div>

        </div>

<?php get_footer(); ?>