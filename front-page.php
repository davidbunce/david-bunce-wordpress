<?php get_header(); ?>

        <div class="container front-page">
            <div class="front-page-welcome">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif;  ?>

                <h2><?php _e('Latest projects', 'david-bunce-theme'); ?></h2>
                <ul class="past-clients">
                    <?php
                    $arguments = array(
                        'post_type' => 'portfolio_item',
                        'posts_per_page' => 3,
                        'suppress_filters' => false
                        );
                    $posts = get_posts($arguments);
                    if(!empty($posts)):
                        foreach($posts as $post):
                            setup_postdata( $post ); ?>
                                <li>
                                    <a href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute( ); ?>">
                                        <?php the_post_thumbnail('portfolio_item_small'); ?>
                                    </a>
                                </li>
                            <?php wp_reset_postdata($post);
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>

        </div>

<?php get_footer(); ?>