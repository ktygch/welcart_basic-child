<?php get_header(); ?>
	<div class="sliderWrap">
		<div id="slider1" class="slider-pro">
			<div class="sp-slides">
                <?php /*特集記事*/ ?>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170929_264.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/olivia_palermo/">
                        <?php /*<span>VIANEL NEW YORK</span>*/ ?>
                    </a>
                </div>
                
			    <?php /*スライド1巡目*/ ?>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/11/ilu001.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/">
                        <?php /*<span>I LOVE UGLY</span>*/ ?>
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/th_170029_poco8321.jpg" class="sp-image" alt="">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">
                        <?php /*<span>VIANEL NEW YORK</span>*/ ?>
                    </a>
                </div>
				<div class="sp-slide">
				    <?php if(is_mobile()): ?>
                        <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/parra_2_sp.jpg" alt="" class="sp-image">
				    <?php else: ?>
                        <img src="https://po-co.jp/wp-content/uploads/2017/10/th_171016_poco_113.jpg" alt="" class="sp-image">
				    <?php endif; ?>
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/">
                        <?php /*<span>BY PARRA</span>*/ ?>
                    </a>
				</div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/07/camar_image2.jpg" class="sp-image" alt="">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/camar/">
                        <?php /*<span>CAMAR</span>*/ ?>
                    </a>
                </div>
                
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/applebum_1.jpg" class="sp-image" alt="">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/">
                        <?php /*<span>APPLEBUM</span>*/ ?>
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/th_171016_poco_248.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/">
                        <?php /*<span>THE NEW ORDER MAGAZINE</span>*/ ?>
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/th_171016_poco_215.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/">
                        <?php /*<span>HER. MAGAZINE</span>*/ ?>
                    </a>
                </div>
			    <?php /*スライド1巡目 end*/ ?>
                
                <?php /*スライド2巡目*/ ?>
				<div class="sp-slide">
					<img src="https://po-co.jp/wp-content/uploads/2017/09/th_IMG_9573.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/">
                        <?php /*<span>I LOVE UGLY</span>*/ ?>
                    </a>
				</div>
				<div class="sp-slide">
					<img src="<?php bloginfo('template_directory'); ?>-child/image/slide/vianel_2.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">
                        <?php /*<span>VIANEL NEW YORK</span>*/ ?>
                    </a>
				</div>
				<div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/th_171016_poco_093.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/">
                        <?php /*<span>BY PARRA</span>*/ ?>
                    </a>
				</div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/07/camar_image.jpg" class="sp-image" alt="">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/camar/">
                        <?php /*<span>CAMAR</span>*/ ?>
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/applebum_2.jpg" class="sp-image" alt="">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/">
                        <?php /*<span>APPLEBUM</span>*/ ?>
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="<?php bloginfo('template_directory'); ?>-child/image/slide/tno019.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/">
                        <?php /*<span>THE NEW ORDER MAGAZINE</span>*/ ?>
                    </a>
                </div>
                <div class="sp-slide">
                    <img src="https://po-co.jp/wp-content/uploads/2017/10/th_171016_poco_278.jpg" alt="" class="sp-image">
                    <a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/">
                        <?php /*<span>HER. MAGAZINE</span>*/ ?>
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
            <?php /*
            <div class="container">
                <div class="row">
                    <div class="alert alert-info padding10" style="margin-top: 40px;">
                        <h2 class="padding5 center">夏季休業のお知らせ</h2>
                        <p class="padding10">
                            2017年8月11日(金)～2017年8月16日(水)は業務をお休みさせていただきます。休業期間中のご注文商品の発送やお問い合わせ等は8月17日(木)より順次対応させていただきます。また、この間のご注文はお受け致しますが、受注確認メールの送信も17日以降になりますのでご了承ください。
                        </p>
                    </div>
                </div>
            </div>
            */ ?>
		</div><!-- #content -->
		
	</div><!-- #primary -->
	
<?php /*get_sidebar('home');*/ ?>
<?php get_footer(); ?>
