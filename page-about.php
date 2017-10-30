<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
                <div id="about">
                    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                       
                        <header class="entry-header">
                            <h2 class="entry-title center">
                                <span>
                                    <?php the_title(); ?>
                                </span>
                            </h2>
                        </header>
                        
                        <?php /*
                        <?php $thumbnail_id = get_post_thumbnail_id(); ?>
                        <?php $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' ); ?>
                        <?php list($src) = $eye_img; ?>
                        <div class="main_pic" style="background-image: url(<?php echo $src; ?>);">*/ ?>
                            <?php /*アイキャッチ画像
                            <?php the_post_thumbnail(); ?>
                            */ ?>
                        <?php /*
                        </div>
                        */ ?>

                        <div class="container padding0">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                    <div class="entry-content">
                                        <?php the_content(__('(more...)')); ?>
                                    </div><!-- .entry-content -->
                                    <?php if(is_single() ): ?>
                                        <?php if(!usces_is_item()): ?>
                                            <div class="entry-meta">
                                                <span class="date">
                                                    <time><?php the_date(); ?></time>
                                                </span>
                                                <span class="cat">
                                                    <?php /*_e("Filed under:");*/ ?>
                                                    <?php the_category(',') ?>
                                                </span>
                                                <span class="tag">
                                                    <?php the_tags(__('')); ?>
                                                </span>
                                                <?php /*
                                                <span class="author">
                                                    <?php the_author() ?><?php edit_post_link(__('Edit This')); ?>
                                                </span>
                                                */ ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php get_template_part('social'); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
				<?php posts_nav_link(' &#8212; ', __('&lt; Newer Posts'), __('Older Posts &gt;')); ?>
				
			<?php endwhile; else: ?>
				
				<p><?php _e('no posts matched your criteria.'); ?></p>
				
			<?php endif; ?>
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php /*get_sidebar('other');*/ ?>
<?php get_footer(); ?>