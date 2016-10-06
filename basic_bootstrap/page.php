<?php get_header(); ?>
<div class="container">
	<div class="col-md-3">
		<h2>Sidebar left</h2>
		<div class="panel panel-default">
			<?php if ( is_active_sidebar( 'home_left_1' ) ) : ?>
				<div class="panel-body">
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'home_left_1' ); ?>
					</div><!-- #primary-sidebar -->
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="col-md-6">
		<?php if (have_posts()): the_post() ?>
			<h2><?php the_title(); ?></h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endif ?>
	</div>
	<div class="col-md-3">
		<h2>Sidebar Right</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'home_right_1' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>