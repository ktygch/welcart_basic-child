<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>
    <?php /*
    <p>archiveページ</p>
    */ ?>
	<section id="primary" class="site-content">
		<div id="content" role="main">
            <h2 class="idx_archive">
                <span>ARCHIVE</span>
            </h2>
            <?php /*
            <header class="page-header">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->
            */ ?>

            <?php if (have_posts()) : ?>
                <ul class="flex_topic archive">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="f_topic">
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'welcart_basic' ), the_title_attribute( 'echo=0' ) ); ?>">
                                <article id="post-<?php the_ID(); ?>" <? /*php post_class();*/ ?> class="each_topic">
                                    <?php /*
                                    <div>
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                    */ ?>
                                    <?php
                                    $image_id = get_post_thumbnail_id();
                                    $image_url = wp_get_attachment_image_src($image_id, true);
                                    ?>
                                    <?php /*
                                    <img src="<?php echo $image_url[0]; ?>" class="thumb">            
                                    */ ?>
                                    <span class="itemimg" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
                                    <h2 class="post-title">
                                        <span><?php the_title(); ?></span>
                                    </h2>
                                    <?php /*
                                    <div>
                                        <?php the_excerpt() ?>
                                    </div>
                                    */ ?>
                                    <?php /*
                                    <div>
                                        <?php the_content() ?>
                                    </div>
                                    */ ?>
                                    <?php /*
                                    <p>
                                        <time datetime="<?php the_time('c'); ?>"><?php the_time(__('Y/m/d')) ?></time>
                                    </p>
                                    */ ?>
                                </article>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <div class="pagination_wrapper">
                <?php
                $args = array (
                    'type' => 'list',
                    'prev_text' => __( ' &laquo; ', 'welcart_basic' ),
                    'next_text' => __( ' &raquo; ', 'welcart_basic' ),
                );
                echo paginate_links( $args );
                ?>
            </div><!-- .pagenation-wrapper -->
            
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
