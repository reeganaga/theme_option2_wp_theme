<?php get_header(); ?>
<div class="container">
	<?php if (of_get_option('activate__sidebar')==1) {
		$style_content = 'col-md-8';
	}else{
		$style_content = 'col-md-6 col-md-offset-3';
		} ?>
	<div class="<?php echo $style_content; ?>">
		<?php query_posts('showposts='.of_get_option('limit_post')); if (have_posts()): while(have_posts()) : the_post(); ?>
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
	<?php if (of_get_option('activate__sidebar')==1): ?>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	<?php endif ?>
</div>
<?php get_footer(); ?>