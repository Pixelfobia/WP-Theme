<?php
/**
 * The main template file
 * 
 * @package WPTheme
 */

 get_header();
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	
<?php if ($post && preg_match( '/vc_', $post->post_content )) : ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
<?php else : ?>
	<section class="section">
		<div class=""container>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php endwhile; ?>
<?php else : ?>
	<section class="section">
		<div class=""container>
			<div class="entry-content">
				<?php _e('Sorry, no posts matched your criteria.', 'wptheme'); ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
 get_footer(); ?>