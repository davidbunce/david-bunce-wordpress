<?php get_header(); ?>

        <div class="container standard-container">
            <div class="post-content">
                <h1>Blog</h1>
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="post-loop">
                        
                        <header>
                            <h2><a href="<?php the_permalink(); ?>" ?><?php the_title(); ?></a></h2>
                            <p class="post-details"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
                        </header>
                        <?php if(has_post_thumbnail( $post_id )): ?>
                            <a href="<?php the_permalink(); ?>" ?>
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                        <?php endif; ?>
                        <?php the_excerpt(); ?>
                        <p>
                        	<a href="<?php the_permalink(); ?>" ?>Read more</a>
                        </p>
                    </article>
                <?php endwhile; endif;  ?>

            </div>

        </div>

<?php get_footer(); ?>