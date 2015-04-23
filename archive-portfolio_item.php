<?php get_header(); ?>

        <div class="container standard-container">
            <div class="post-content">
                <h1>Portfolio</h1>

                <?php
                if(ICL_LANGUAGE_CODE == 'en'):
                    icit_spot('Portfolio Top');
                endif; ?>


                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="portfolio-loop">
                        <header>
                            <h2><a href="<?php the_permalink(); ?>" ?><?php the_title(); ?></a></h2>
                        </header>
                        <div class="row clearfix">
                            <div class="portfolio-thumbnail-small">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( ); ?>">
                                    <?php the_post_thumbnail('medium' ); ?>
                                </a>
                            </div>

                            <div class="portfolio-sidebar-small">

                                <div class="portfolio-sidebar-small-item">
                                    <?php $client_name =  get_field('client_name'); ?>
                                    <strong><?php _e('Client:'); ?></strong> <a href="<?php the_permalink(); ?>"><?php echo $client_name; ?></a>
                                </div>

                                <div class="portfolio-sidebar-small-item">
                                    <?php $project_type =  get_field('project_type'); ?>
                                    <strong><?php _e('Project Type:'); ?></strong> <?php echo $project_type; ?>
                                </div>

                                <div class="portfolio-sidebar-small-item">
                                    <?php $date =  get_field('date'); ?>
                                    <strong><?php _e('Date:'); ?></strong> <?php echo $date; ?>
                                </div>

                                <a href="<?php the_permalink(); ?>"><?php _e('View project details'); ?></a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; endif;  ?>

            </div>

        </div>

<?php get_footer(); ?>