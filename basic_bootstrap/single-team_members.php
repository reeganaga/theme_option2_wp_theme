<?php get_header(); ?>
<div class="container">
	<div class="col-md-8">
		<?php if (have_posts()): while(have_posts()) : the_post(); ?>
			<!-- display title post -->
			<h2><a href="<?php the_permalink(); ?>" title="Permentn link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<!-- display author  -->

				<?php
				// var_dump(get_post_meta(get_the_ID()));  
				$img_id = get_post_meta(get_the_ID(),'teamManagerImage',true);
				$image =  wp_get_attachment_image_src($img_id); ?>
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-4 col-md-offset-4">
						<img src="<?php echo $image[0]; ?>" class="img-responsive img-circle">
					</div>
				</div>
				<ul class="list-group">
				  <li class="list-group-item">Position : <b><?php echo get_post_meta(get_the_ID(),'teamManagerPosition',true) ?></b></li>
				  <li class="list-group-item">Email : <b><?php echo get_post_meta(get_the_ID(),'teamManagerEmail',true) ?></b></li>
				  <li class="list-group-item">Website : <b><?php echo get_post_meta(get_the_ID(),'teamManagerWebsite',true); ?></b></li>
				</ul>
			<?php $position = get_post_meta(get_the_ID(),'teamManagerPosition',true); ; ?>

			<div class="text-justify">
				<?php the_content(); ?>
				<!-- <p class="postmetadata"><?php _e('Posted in'); ?> <?php the_category(', '); ?></p> -->
			</div>
		<?php endwhile; else : ?>	
			<p><?php _e('Sorry, no post marched your criteria.'); ?></p>
		<?php endif; ?>

	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>