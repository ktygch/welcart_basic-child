<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php posts_nav_link(' &#8212; ', __('&lt; Newer Posts'), __('Older Posts &gt;')); ?>
				
			<?php endwhile; else: ?>
				
				<p><?php _e('no posts matched your criteria.'); ?></p>
				
			<?php endif; ?>
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php /*get_sidebar('other');*/ ?>
<?php get_footer(); ?>