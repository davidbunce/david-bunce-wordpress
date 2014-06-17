<?php get_header(); ?>

        <div class="container standard-container">
            <article class="portfolio-content">
                <?php if(have_posts()) : while (have_posts()) : the_post();
                    $client_url = get_field('client_website');
                    $site_url = get_field('finished_website'); ?>
                    <header>
                    	<h1><?php the_title(); ?></h1>
                    </header>
                    <div class="portfolio-screenshot">
                        <a href="<?php echo $site_url; ?>"><?php the_post_thumbnail( ); ?></a>
                    </div>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>

            </article>

            <aside class="portfolio-sidebar portfolio-sidebar-small">

                <div class="portfolio-sidebar-item">
                    <?php $client_name =  get_field('client_name'); ?>
                    <strong>Client:</strong> <a href="<?php echo $client_url; ?>"><?php echo $client_name; ?></a>
                </div>

                <div class="portfolio-sidebar-item">
                    <?php $project_type =  get_field('project_type'); ?>
                    <strong>Project Type:</strong> <?php echo $project_type; ?>
                </div>

                <div class="portfolio-sidebar-item">
                    <?php $date =  get_field('date'); ?>
                    <strong>Date:</strong> <?php echo $date; ?>
                </div>
            </aside>

        </div>

<?php get_footer(); ?>