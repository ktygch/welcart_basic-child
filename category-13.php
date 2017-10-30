<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>
    <?php /* 本番 by parra一覧 カテゴリーページ */ ?>
	<section id="primary" class="site-content">
		<div id="content" role="main">
           
            <?php if(!is_paged()): ?>
                <div class="brand_slide">
                    <div id="slider" class="slider-pro">
                        <div class="sp-slides">
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_171016_poco_024.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_171016_poco_033.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/parra018.jpg" alt="" class="sp-image">
                            </div>
                            <?php if(!is_mobile()): ?>
                                <?php /* PCのみ表示される */ ?>
                                <div class="sp-slide">
                                    <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/parra010.jpg" alt="" class="sp-image">
                                </div>
                            <?php endif; ?>
                            <div class="sp-slide">
                                <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/parra011.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_171016_poco_060.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/parra016.jpg" alt="" class="sp-image">
                            </div>
                            <?php if(!is_mobile()): ?>
                                <?php /* PCのみ表示される */ ?>
                                <div class="sp-slide">
                                    <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/parra013.jpg" alt="" class="sp-image">
                                </div>
                            <?php endif; ?>
                            <?php if(is_mobile()): ?>
                                <?php /* mobi,tabletのみ表示される */ ?> 
                                <div class="sp-slide">
                                    <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/parra009.jpg" alt="" class="sp-image">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="cate_head">
                    <p class="cate_head_logo"><span></span></p>
                    <div class="brand_disc">
                        <h2>BY PARRA</h2>
                        THE NETHERLANDS<br>
                        Established 2001<br>
                        <a href="#" data-toggle="modal" data-target="#brandBio">Brand Profile</a>
                    </div>
                </div>
                <div class="modal3 modal fade" id="brandBio">
                    <div class="modal-dialog">
                        <div class="modal-content" id="bioWrap">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                                <p class="f14 bold">BY PARRA</p>
                                by Parra(バイ パラ)はオランダ・アムステルダムを拠点とするアーティストParra(パラ)によって2001年に設立されたアパレルブランド。<br>
                                ファッションのみならず、ファインアート、ミュージックと幅広く活動するParraの特徴的なアートワークを製品へと落とし込んだ、独創的なプロダクトを提案しています。
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
