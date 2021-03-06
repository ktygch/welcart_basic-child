<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>
    <?php /* 本番 APPLEBUM一覧 カテゴリーページ */ ?>
	<section id="primary" class="site-content">
		<div id="content" role="main">
           
            <?php if(!is_paged()): ?>
                <div class="brand_slide">
                    <div id="slider" class="slider-pro">
                        <div class="sp-slides">
                            <div class="sp-slide">
                                <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/applebum_2.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/applebum_1.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/applebum_3.jpg" alt="" class="sp-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cate_head">
                    <p class="cate_head_logo"><span></span></p>
                    <div class="brand_disc">
                        <h2>APPLEBUM</h2>
                        JAPAN<br>
                        Established 2005<br>
                        <a href="#" data-toggle="modal" data-target="#brandBio">Brand Profile</a>
                    </div>
                </div>
                <div class="modal3 modal fade" id="brandBio">
                    <div class="modal-dialog">
                        <div class="modal-content" id="bioWrap">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                                <p class="f14 bold">APPLEBUM</p>
                                「APPLEBUM（アップルバム）」は、2005年のブランド立ち上げ以来、黒人音楽やスポーツといった文化から感化されたアイデアを斬新な発想でプロダクトへ落とし込み、日本国内だけでなくN.Y.やPARIS、LONDONなど世界各地で高い評価を受けている、大人が着こなせる上品なウエア作りに定評があるブランドです。
                            </div>
                            <div class="modal-footer">
                                <button class="close" data-dismiss="modal">
                                    <span class="close_btn" aria-hidden="true"></span>
                                    <span class="sr-only">閉じる</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <h2 class="idx_archive">
                    <span><?php single_cat_title(); ?></span>
                </h2>
            <?php endif; ?>
            
			<div class="flex_item">
				<?php if( usces_is_cat_of_item( get_query_var( 'cat') ) ): ?>

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
			</div>

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
