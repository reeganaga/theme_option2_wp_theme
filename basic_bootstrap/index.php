<?php get_header(); ?>
<div class="container">
	<div class="col-md-8">
		<?php if (have_posts()): while(have_posts()) : the_post(); ?>
			<!-- display title post -->
			<h2><a href="<?php the_permalink(); ?>" title="Permentn link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<!-- display author  -->
			<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
			<div class="text-justify">
				<?php the_content(); ?>
				<p class="postmetadata"><?php _e('Posted in'); ?> <?php the_category(', '); ?></p>
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