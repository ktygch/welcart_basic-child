<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>
<?php /*<p>サーチページ</p>*/ ?>
	<section id="primary" class="site-content">
		<div id="content" role="main">
			<?php /*
			<header class="page-header">
				<span class="bg_header"></span>
				<h1 class="page-title">
					<?php printf( __( 'Search Results for: %s', 'welcart_basic' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
				</h1>
			</header><!-- .page-header -->
			*/ ?>
			<h2 class="page-title center">
				<span>
                    <?php printf( __( 'SEARCH RESULT %s', 'welcart_basic' ), '"' . esc_html( get_search_query() ) . '"' ); ?>
				</span>
			</h2>

			<?php if (have_posts()) : ?>
				<div class="flex_item">
					<?php while (have_posts()) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php /* post_class(); */ ?> class="f_item itemimg">

							<a href="<?php the_permalink() ?>">
                                <span style="background-image: url('<?php usces_the_itemImageURL(0); ?>')">
                                    <?php welcart_basic_campaign_message(); ?>
                                </span>
                                <span style="background-image: url('<?php usces_the_itemImageURL(1); ?>')">
                                    <?php welcart_basic_campaign_message(); ?>
                                </span>
								<?php /*usces_the_itemImage( 0, 300, 300 );*/
								?>
                                <div class="item_info">
                                    <h3 class="itemname">
                                        <?php /*usces_the_itemName();*/ ?>
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="itemprice"><?php usces_crform( usces_the_firstPrice('return'), true, false ); usces_guid_tax(); ?></div>
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
				<div class="pagination_wrapper">
					<?php
					$args = array (
						'type' => 'list',
						'prev_text' => __( ' &lt; ', 'welcart_basic' ),
						'next_text' => __( ' &gt; ', 'welcart_basic' ),
					);
					echo paginate_links($args);
					?>
				</div><!-- .pagination_wrapper -->
			<?php else: ?>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<p class="nothing"><?php echo __('NO PRODUCT FOUND', 'usces'); ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>