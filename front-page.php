<?php get_header(); ?>

        <div class="container front-page">
            <div class="front-page-welcome">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif;  ?>

                <h2>Past clients</h2>
                <ul class="past-clients">
                    <li>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/live/baptist-history.jpg" /></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/live/the-rooftop.jpg" /></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/live/Scottish-Baptist-College.png" /></a>
                    </li>
                </ul>
            </div>

        </div>

<?php get_footer(); ?>