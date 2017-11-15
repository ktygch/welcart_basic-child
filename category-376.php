<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>
    <?php /* 本番 VIANEL OLIVIA PALERMO一覧 カテゴリーページ */ ?>
	<section id="primary" class="site-content">
		<div id="content" role="main" class="vianel_products">
            
            <?php if(!is_paged()): ?>
                <div class="brand_slide">
                    <div id="slider" class="slider-pro">
                        <div class="sp-slides">
                            <?php if(is_mobile()): ?>
                                <div class="sp-slide">
                                    <img src="https://po-co.jp/wp-content/uploads/2017/11/02-olivia-palermo-vianel-accessories.jpg" alt="" class="sp-image">
                                </div>
                            <?php else: ?>
                                <div class="sp-slide">
                                    <img src="https://po-co.jp/wp-content/uploads/2017/11/Olivia-01.jpg" alt="" class="sp-image">
                                </div>
                            <?php endif; ?>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170029_poco8185.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/11/th_170029_poco8397_2.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170029_poco8132.jpg" alt="" class="sp-image">
                            </div>
                            <?php if(is_mobile()): ?>
                                <div class="sp-slide">
                                    <img src="https://po-co.jp/wp-content/uploads/2017/11/01-olivia-palermo-vianel-accessories-collaboration.jpg" alt="" class="sp-image">
                                </div>
                            <?php else: ?>
                                <div class="sp-slide">
                                    <img src="https://po-co.jp/wp-content/uploads/2017/11/Olivia-03.jpg" alt="" class="sp-image">
                                </div>
                            <?php endif; ?>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170929_264.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170029_poco8199.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/08/Olivia-02_trim.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/11/th_170029_poco8390.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170029_poco8263.jpg" alt="" class="sp-image">
                            </div>
                            <?php if(is_mobile()): ?>
                                <div class="sp-slide">
                                    <img src="https://po-co.jp/wp-content/uploads/2017/11/03-olivia-palermo-vianel-accessories.jpg" alt="" class="sp-image">
                                </div>
                            <?php else: ?>
                                <div class="sp-slide">
                                    <img src="https://po-co.jp/wp-content/uploads/2017/09/Olivia-17_1024x1024.jpg" alt="" class="sp-image">
                                </div>
                            <?php endif; ?>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170029_poco8258.jpg" alt="" class="sp-image">
                            </div>
                            <div class="sp-slide">
                                <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170929_267.jpg" alt="" class="sp-image">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="cate_head">
                    <div class="container oliviaPalermo">
                        <div class="logoarea">
                            <h2 class="v">VIANEL NEW YORK</h2>
                            <span></span>
                            <h2 class="op">OLIVIA PALERMO</h2>
                        </div>
                    </div>
                </div>
                
            <?php else: ?>
                <h2 class="idx_archive">
                    <span><?php single_cat_title(); ?></span>
                </h2>
            <?php endif; ?>
            
            <?php if( usces_is_cat_of_item( get_query_var('cat') ) ): ?>
                <?php if (have_posts()) : ?>
                    <h3 class="v_idx"><span>IPHONE CASE</span></h3>
                    <div class="flex_item">
                        <?php query_posts(array('category__and'=>array(376, 303))); ?>
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
                        <?php wp_reset_query(); ?>
                    </div>
                    
                    <h3 class="v_idx"><span>IPHONE PLUS CASE</span></h3>
                    <div class="flex_item">
                        <?php query_posts(array('category__and'=>array(376, 304))); ?>
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
                        <?php wp_reset_query(); ?>
                    </div>
                    
                    <h3 class="v_idx"><span>V.BACKUP</span></h3>
                    <div class="flex_item">
                        <?php query_posts(array('category__and'=>array(376, 375))); ?>
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
                        <?php wp_reset_query(); ?>
                    </div>
                    
                    <h3 class="v_idx"><span>LEATHER TRAY</span></h3>
                    <div class="flex_item">
                        <?php query_posts(array('category__and'=>array(376, 333))); ?>
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
                        <?php wp_reset_query(); ?>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <div class="flex_item">
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
			
			<div class="container entry-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <img src="https://po-co.jp/wp-content/uploads/2017/08/19932173_116307232325342_6324626075376680960_n.jpg" alt="">
                            </div>
                            <div class="col-xs-12 col-sm-7">
                                <div class="padding20">
                                    <h3 class="center op
            _logo">OLIVIA PALERMO</h3>
                                    <div class="padding0_10">
                                        オリヴィア・パレルモ(Olivia Palermo) 1986年2月28日生まれ。アメリカ・コネチカット州出身。パリ・アメリカン大学在籍中から、その美しさとファッションセンスで世間の注目を集め、ファッション誌や週刊誌にたびたび登場し話題に。そして2009年、MTV のリアリティ番組「The City」への出演を機に全米で一躍その名を知られる存在となる。そのファッションセンスの高さから、ファッション・アイコンとして世界中の注目を浴びているニューヨーク社交界を代表する女優、モデル、ソーシャライツです。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>

		</div><!-- #content -->
		
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
