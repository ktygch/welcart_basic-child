<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>
    <?php /*<p class="f10">共用カテゴリーページ</p>*/ ?>
	<section id="primary" class="site-content">
		<div id="content" role="main">
		    <?php /*
			<header class="page-header">
				<span class="bg_header"></span>
				<h1 class="page-title">
					<?php single_cat_title(); ?>
				</h1>
			</header><!-- .page-header -->
			*/ ?>
			<h2 class="page-title center">
				<span>
                    <?php single_cat_title(); ?>
				</span>
			</h2>
            
            <?php if( usces_is_cat_of_item( get_query_var( 'cat') ) ): ?>
                <?php if (have_posts()) : ?>
                    
                    <div class="flex_item">
                        <?php while (have_posts()) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php /*post_class();*/ ?> class="f_item itemimg">

                                <a href="<?php the_permalink() ?>">
                                    <span style="background-image: url('<?php
                            usces_the_itemImageURL(0); ?>')">
                                        <?php welcart_basic_campaign_message(); ?>
                                    </span>
                                    <span style="background-image: url('<?php
                            usces_the_itemImageURL(1); ?>')">
                                        <?php welcart_basic_campaign_message(); ?>
                                    </span>
                                    <div class="item_info">
                                        <h3 class="itemname">
                                            <?php /*usces_the_itemName();*/ ?>
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="itemprice">
                                            <?php usces_crform( usces_the_firstPrice('return'), true, false ); usces_guid_tax(); ?>
                                        </div>
                                    </div>
                                </a>
                                <?php if(! usces_have_zaiko_anyone() ) : ?>
                                    <div class="soldout">
                                        <p>
                                            <span><?php _e('SOLD OUT', 'usces' ); ?></span>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="nothing">
                        <?php _e('NO PRODUCT FOUND'); ?>
                    </div>
                <?php endif; ?>

            <?php else : ?>

                <?php if (have_posts()) : ?>
                    <div class="post-li">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <p><time datetime="<?php the_time('c'); ?>"><?php the_time(__('Y/m/d')) ?></time></p>
                                <div class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'welcart_basic' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></div>
                                <?php the_excerpt() ?>
                            </article>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            <?php endif; ?>

			<div class="pagination_wrapper">
				<?php
				$args = array (
					'type' => 'list',
					'prev_text' => __( ' &lt; ', 'welcart_basic' ),
					'next_text' => __( ' &gt; ', 'welcart_basic' ),
				);
				echo paginate_links( $args );
				?>
			</div><!-- .pagenation-wrapper -->

		</div><!-- #content -->
		
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
