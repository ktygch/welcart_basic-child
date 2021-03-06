<?php get_header(); ?>
	<div class="sliderWrap">
		<div id="slider1" class="slider-pro">
			<div class="sp-slides">
                <?php /*特集記事
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2018/01/th_iphonex_2000_1000.jpg" alt="WINTER SALE 2018" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/iphone_x_vianel/">
                    </a>
                </div>
                */ ?>
                
			    <?php /*スライド1巡目*/ ?>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_Mid-Rise.jpg" alt="I LOVE UGLY" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/">
                    </a>
                </div>
				<div class="sp-slide">
				    <?php if(is_mobile()): ?>
                        <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/parra_2_sp.jpg" alt="by Parra" class="sp-image">
				    <?php else: ?>
                        <img src="https://po-co.jp/wp-content/uploads/2017/12/th_171016_poco_038.jpg" alt="by Parra" class="sp-image">
				    <?php endif; ?>
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/">
                    </a>
				</div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_camar_image5.jpg" alt="CAMAR" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/camar/">
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_170029_poco8124.jpg" alt="VIANEL NEW YORK" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">
                    </a>
                </div>
                <?php /*
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/applebum_2.jpg" alt="APPLEBUM" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/">
                    </a>
                </div>
                */ ?>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_171016_poco_301.jpg" alt="THE NEW ORDER MAGAZINE" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/">
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_171016_poco_269.jpg" alt="HER. MAGAZINE" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/">
                    </a>
                </div>
			    <?php /*スライド1巡目 end*/ ?>
                
                <?php /*スライド2巡目*/ ?>
				<div class="sp-slide">
					<img src="https://po-co.jp/wp-content/uploads/2017/12/th_Cropped-Web.png" alt="I LOVE UGLY" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/">
                    </a>
				</div>
				<div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_171016_poco_164.jpg" alt="by Parra" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/">
                    </a>
				</div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_camar_image4.jpg" alt="CAMAR" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/camar/">
                    </a>
                </div>
				<div class="sp-slide">
					<img src="https://po-co.jp/wp-content/uploads/2017/12/th_170029_poco8132.jpg" alt="VIANEL NEW YORK" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">
                    </a>
				</div>
                <?php /*
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/applebum_1.jpg" alt="APPLEBUM" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/">
                    </a>
                </div>
                */ ?>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_171016_poco_299.jpg" alt="THE NEW ORDER MAGAZINE" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/">
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/12/th_171016_poco_280.jpg" alt="HER. MAGAZINE" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/">
                    </a>
                </div>
                <?php /*スライド2巡目 end*/ ?>
			</div>
		</div>
		<?php /*
		<div class="scrolldown">CLICK</div>
        */ ?>
	</div><!-- .sliderWrap -->
    
	<div id="primary" class="site-content">
        <div id="recoTop">
            <?php /*'cat'=3は「お勧め商品」,テストサイトは14*/ ?>
            <?php if(is_mobile()): ?><?php /*モバイル28並べる*/ ?>
                <?php query_posts(array('cat'=>3, 'posts_per_page'=>28,  'orderby'=>'rand', 'order'=>'DESC')); ?>
            <?php else: ?><?php /*PC28並べる*/ ?>
                <?php query_posts(array('cat'=>3, 'posts_per_page'=>28,  'orderby'=>'rand', 'order'=>'DESC')); ?>
            <?php endif; ?>
            <?php if( have_posts() ) : ?>
                <ul class="flex_item">
                    <?php while( have_posts() ) : the_post(); usces_the_item(); ?>
                        <li id="post-<?php the_ID(); ?>" class="f_item">
                            <div class="itemimg">
                                <a href="<?php the_permalink(); ?>">
                                    <span style="background-image: url('<?php usces_the_itemImageURL(0); ?>')">
                                        <?php welcart_basic_campaign_message(); ?>
                                    </span>
                                    <span style="background-image: url('<?php usces_the_itemImageURL(1); ?>')">
                                        <?php welcart_basic_campaign_message(); ?>
                                    </span>
                                    <?php /*usces_the_itemImage( 0, 300, 300 );*/ ?>
                                </a>
                                <?php if( !usces_have_zaiko_anyone() ) : ?>
                                    <div class="itemsoldout">
                                        <p>
                                            <span><?php _e('SOLD OUT', 'usces' ); ?></span>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="itemdata">
                                <h3 class="itemname">
                                    <?php /* usces_the_itemName();*/ ?>
                                    <?php the_title(); ?>
                                </h3>
                                <div class="itemprice"><?php usces_crform( usces_the_firstPrice('return'), true, false ); usces_guid_tax(); ?></div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <div class="nothing">
                    <?php _e('NO PRODUCT FOUND'); ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            
		</div>

		<div id="content" role="main">
		</div><!-- #content -->
		
	</div><!-- #primary -->
	
<?php /*get_sidebar('home');*/ ?>
<?php get_footer(); ?>
