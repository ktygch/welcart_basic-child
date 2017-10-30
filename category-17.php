<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>
    <?php /* 本番 topics一覧ページ */ ?>
	<section id="primary" class="site-content">
		<div id="content" role="main">
		    <?php /*
			<header class="page-header">
            */ ?>
				<?php
					/*
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					*/
				?>
				<?php /*
				<span class="bg_header"></span>
				<h1 class="page-title">
					<?php single_cat_title(); ?>
				</h1>
			</header><!-- .page-header -->
            */ ?>
            <h2 class="idx_archive">
                <span><?php single_cat_title(); ?></span>
            </h2>
            <?php if( usces_is_cat_of_item( get_query_var( 'cat') ) ): ?>
                <div class="flex_item">
					<?php if (have_posts()) : ?> 

						<?php while (have_posts()) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php /*post_class();*/ ?> class="f_item itemimg">

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
                                        <div class="itemprice">
                                            <?php usces_crform( usces_the_firstPrice('return'), true, false ); usces_guid_tax(); ?>
                                        </div>
                                    </div>
								</a>
								<?php if(! usces_have_zaiko_anyone() ) : ?>
									<div class="itemsoldout">
                                        <span><?php _e('SOLD OUT', 'usces' ); ?></span>
                                    </div>
								<?php endif; ?>

							</div>
						<?php endwhile; ?>

					<?php endif; ?>
                </div><!-- .flex_item -->
            <?php else : ?>
                <div class="flex_topic">
					<?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <div class="f_topic">
                                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'welcart_basic' ), the_title_attribute( 'echo=0' ) ); ?>">
                                    <article id="post-<?php the_ID(); ?>" <?php /* post_class(); */ ?> class="each_topic">
                                        <?php
                                            $image_id = get_post_thumbnail_id();
                                            $image_url = wp_get_attachment_image_src($image_id, true);
                                        ?>
                                        <span class="img itemimg" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
                                        <h2 class="post-title">
                                            <span><?php the_title(); ?></span>
                                        </h2>
                                        <div>
                                            <?php the_excerpt() ?>
                                        </div>
                                        <?php /*
                                        <p>
                                            <time datetime="<?php the_time('c'); ?>"><?php the_time(__('Y/m/d')) ?></time>
                                        </p>
                                        */ ?>
                                    </article>
                                </a>
                            </div>
                        <?php endwhile; ?>

					<?php endif; ?>
                </div>
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
