<?php get_header(); ?>

        <div class="container front-page">
            <div class="front-page-welcome">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif;  ?>

            </div>

        </div>


   	</div>

<?php
$clients_arguments = array(
	'post_type' => 'client',
	'posts_per_page' => -1
);
$clients = get_posts($clients_arguments);
if(!empty($clients)): ?>
	<div class="front-page__clients">
		<div class="container">
			<h2><?php _e('Clients'); ?></h2>
			<ul>
				<?php foreach($clients as $post):
					setup_postdata( $post ); ?>
						<li><?php echo the_post_thumbnail('medium'); ?></li>
					<?php 
					wp_reset_postdata();
				endforeach; ?>
			</ul>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>