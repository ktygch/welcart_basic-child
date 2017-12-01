            <?php $options=get_option('usces'); if('Promotionsale'==$options['display_mode']):
            ?>
                <?php /*SALEキャンペーン中に表示される*/ ?>
                <div class="center top_sale_banner">
                    <a href="<?php bloginfo('url'); ?>/category/item/sale/">
                        <div class="inner">
                        </div>
                    </a>
                </div>
            <?php endif; ?>
              
            <div id="brandSelect">
                <h2><span>BRANDS</span></h2>
                <ul>
                    <li class="each_brand">
                        <a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/" class="ilu">
                            <h3><span>I LOVE UGLY</span></h3>
                            <span class="brandimg">
                            </span>
                        </a>
                    </li>
                    <li class="each_brand">
                        <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/" class="vianel">
                            <h3><span>VIANEL</span></h3>
                            <span class="brandimg">
                            </span>
                        </a>
                    </li>
                    <li class="each_brand">
                        <a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/" class="parra">
                            <h3><span>BY PARRA</span></h3>
                            <span class="brandimg">
                            </span>
                        </a>
                    </li>
                    <li class="each_brand">
                        <a href="<?php bloginfo('url'); ?>/category/item/brand/camar/" class="camar">
                            <h3><span>CAMAR</span></h3>
                            <span class="brandimg">
                            </span>
                        </a>
                    </li>
                    <li class="each_brand">
                        <a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/" class="applebum">
                            <h3><span>APPLEBUM</span></h3>
                            <span class="brandimg">
                            </span>
                        </a>
                    </li>
                    <li class="each_brand">
                        <a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/" class="tno">
                            <h3><span>THE NEW ORDER MAGAZINE</span></h3>
                            <span class="brandimg">
                            </span>
                        </a>
                    </li>
                    <li class="each_brand">
                        <a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/" class="her">
                            <h3><span>HER. MAGAZINE</span></h3>
                            <span class="brandimg">
                            </span>
                        </a>
                    </li>
                </ul>
		    </div>
            
            <div id="btmSelect">
                <div class="inner">
                    <h2><span>CATEGORY</span></h2>
                    <ul>
                        <?php /*
                        <li><a href="<?php bloginfo('url'); ?>/category/item/itemnew/">LATEST</a></li>
                        */ ?>
                        <li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/">TOPS</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/">BOTTOMS</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/accessories/">ACCESSORIES</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/homeware/">HOMEWARE</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/books/">BOOKS</a></li>
                        <?php if(!is_front_page()): ?>
                            <li><a href="<?php bloginfo('url'); ?>/category/topics/">TOPICS</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
		    </div>
		    
            <?php if(is_front_page()): ?>
                <div id="topicTop">
                    <h2 class="center">
                        <a href="<?php bloginfo('url'); ?>/category/topics/">
                            <span>TOPICS</span>
                        </a>
                    </h2>
                    <div class="container-fluid">
                        <?php /*トップページ 特集記事サムネ ３つ*/ ?>
                        <?php query_posts(array('category_name'=>'topics', 'posts_per_page'=>3, 'orderby'=>'date', 'order'=>'DESC')); ?>
                            <div class="row">
                                <?php if(have_posts()): ?>
                                    <?php while(have_posts()) : the_post(); ?>
                                        <div class="col-xs-12 col-sm-4 each_info padding0_5">
                                            <a class="topictop" href="<?php the_permalink(); ?>">
                                                <?php
                                                    $image_id = get_post_thumbnail_id();
                                                    $image_url = wp_get_attachment_image_src($image_id, true);
                                                ?>
                                                <span class="topictopimg" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
                                                <h3 class="center">
                                                    <span><?php the_title(); ?></span>
                                                </h3>
                                                <?php /*　記事本文
                                                <div>
                                                    <?php echo mb_substr(get_the_excerpt(), 0, 150); ?>
                                                </div>
                                                */ ?>
                                            </a>
                                            <?php /*get_template_part('social');*/ ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <div class="col-xs-12">
                                        <p class="nothing">NO INFORMATION</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>

                <div id="instaTop">
                    <h2 class="center"><span>INSTAGRAM</span></h2>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="insta_wrap">
                                <ul id="instafeed" class="insta">
                                </ul>
                                <?php /* アカウントへ遷移するアイコン　離脱回避のためコメントアウト
                                <div class="instabtn">
                                    <a href="https://www.instagram.com/po_co_jp/" target="_blank">instagram</a>
                                </div>
                                */ ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
		    
		    <div id="beforeFooter">
                <div class="inner">
                    <ul class="parent row">
                        <li class="each_fmenu col-xs-12 col-sm-4 col-sm-push-4">
                            <h2><span>CUSTOMERS</span></h2>
                            <ul>
                                <li>
                                    <div class="openFmenu">
                                        <a href="#" data-toggle="modal" data-target="#shipping">SHIPPING</a>
                                    </div>
                                    <div class="hiddenFmenu">
                                    </div>
                                </li>
                                <li>
                                    <div class="openFmenu">
                                        <a href="#" data-toggle="modal" data-target="#payment">PAYMENT</a>
                                    </div>
                                    <div class="hiddenFmenu">
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="each_fmenu col-xs-12 col-sm-4 col-sm-push-4">
                            <h2><span>MEMBERS</span></h2>
                            <ul>                            
                                <?php if( usces_is_login() ): ?>
                                    <li>
                                        <?php printf(__('Hello, %s', 'usces'), usces_the_member_name('return')); ?>
                                    </li>
                                    <li>
                                        <a href="<?php echo USCES_MEMBER_URL; ?>">
                                            <?php _e('MY PAGE', 'welcart_basic') ?>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <?php /*usces_loginout();*/ ?>
                                        <a href="<?php bloginfo('url'); ?>/usces-member/?page=login">
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                            LOGIN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo USCES_NEWMEMBER_URL; ?>">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            <?php _e('JOIN','usces') ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <li class="each_fmenu col-xs-12 col-sm-4 col-sm-pull-8">
                            <h2><span>COMPANY</span></h2>
                            <ul>
                                <?php /*
                                <li><a href="<?php bloginfo('url'); ?>/about/">ABOUT</a></li>
                                */ ?>
                                <li><a href="<?php bloginfo('url'); ?>/privacy/">PRIVACY POLICY</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/specified/">特定商取引法に基づく表記</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/contact/">CONTACT</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
		    </div>
		    
		</div><!-- #main -->
		
		
		<footer id="colophon" role="contentinfo">
            <div class="inner">
                <div id="sns">
                    <ul>
                        <li><a href="https://www.facebook.com/PO-COjp-1208605745854667/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/po_co_jp/" target="_blank">instagram</a></li>
                        <li><a href="https://twitter.com/POCO_STORE" target="_blank">Twitter</a></li>
                    </ul>
                </div>
                <p class="copyright"><?php usces_copyright(); ?></p>
            </div>
		</footer><!-- #colophon -->
        
        <?php if(!is_page(get_option('usces_cart_number'))): ?>
            <?php /*カートページでは無い場合 メルマガ登録フォーム出現*/ ?>
            <div id="newsLetter">
                <?php get_sidebar('home'); ?>
            </div>
        <?php endif; ?>
    
		<div id="toTop" class="wrap fixed">
			<a href="#masthead">↑</a>
		</div>
       
        <?php /*トップのみ、セール時表示テンプレート*/ ?>
        <?php if(is_front_page()): ?>
            <?php $options=get_option('usces'); if('Promotionsale'==$options['display_mode']):
            ?>
                <?php /*SALEキャンペーン中に表示される*/ ?>
                <?php get_template_part('sale'); ?>
            <?php endif; ?>
        <?php endif; ?>
		
	</div><!-- #wrapper -->
	
	<div class="modal1 modal fade" id="shipping">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            </div>
	            <div class="modal-body">
	                <h3><span>SHIPPING</span></h3>
	                <p>配送料について</p>
	                <div class="section">
	                    <h4>10,000円以上のお買い物で配送料無料</h4>
	                    本州、四国地方 756円<br>
	                    北海道、沖縄、その他離島エリア　1,080円
	                </div>
	                <div class="section">
	                    <h4>返品での配送料につきまして</h4>
	                    初期不良、発送商品間違いの場合に限り<br>
	                    着払いにて対応いたします。
	                    不良品未使用品に限り良品と交換致します。
	                </div>
	                <div class="section f10 margin0">
	                    ※ 配送希望日時のご指定は承っておりません
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button class="close" data-dismiss="modal">
                        <span class="close_btn" aria-hidden="true"></span>
	                </button>
	            </div>
	        </div>
	    </div>
	</div>
	
	<div class="modal2 modal fade" id="payment">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            </div>
	            <div class="modal-body">
	                <h3><span>PAYMENT</span></h3>
	                <p>お支払について</p>
	                <div class="section">
	                    <h4>銀行振込</h4>
	                    商品はご入金確認後の発送となります。<br>
	                    ご注文確認メール送付日より5日以内にお振込ください。
                    </div>
                    <div class="section">
	                    <h4>代金引換</h4>
	                    代金引換でのお支払いの場合は<br>
                        送料に加え、代引手数料が加算されます。<br>
                        <table>
                            <tr>
                                <th>商品合計金額</th>
                                <th>手数料(消費税込み)</th>
                            </tr>
                            <tr>
                                <td>10,000円まで</td>
                                <td>324円</td>
                            </tr>
                            <tr>
                                <td>30,000円まで</td>
                                <td>432円</td>
                            </tr>
                            <tr>
                                <td>100,000円まで</td>
                                <td>648円</td>
                            </tr>
                            <tr>
                                <td>300,000円まで</td>
                                <td>1,080円</td>
                            </tr>
                        </table>
	                </div>
	                <div class="section">
	                    <h4>クレジットカード決済</h4>
	                    VISA、MasterCard、JCB、AMEX、Diners Club<br>
	                    上記のカードがご利用可能です。
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button class="close" data-dismiss="modal">
                        <span class="close_btn" aria-hidden="true"></span>
	                </button>
	            </div>
	        </div>
	    </div>
	</div>
	
    <?php $timestamp = time() ?>
    
	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <?php /* ローダー外す。20170914
    <script src="<?php bloginfo('template_directory'); ?>-child/js/min/loader.js"></script>
    */ ?>
	<script src="<?php bloginfo('template_directory'); ?>-child/js/min/default.min.js?<?php echo $timestamp; ?>"></script>
	<script src="<?php bloginfo('template_directory'); ?>-child/js/bs/bootstrap.min.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>-child/js/min/jquery.cookie.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>-child/js/min/jquery.sliderPro.min.js"></script>
	<?php if(is_front_page()): ?>
        <?php /*　insta feed */ ?>
        <script src="<?php bloginfo('template_directory'); ?>-child/js/min/instafeed.js?<?php echo $timestamp; ?>"></script>
        <?php if(is_mobile()): ?>
            <script src="<?php bloginfo('template_directory'); ?>-child/js/min/toppageMobi.min.js?<?php echo $timestamp; ?>"></script>
        <?php else: ?>
            <script src="<?php bloginfo('template_directory'); ?>-child/js/min/toppage.min.js?<?php echo $timestamp; ?>"></script>
        <?php endif; ?>
	<?php endif; ?>
	
    <script>
        //ヘッダー 隠しメニュー　アコーディオン
        $(function(){
            $('.switch').on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                //$('#hiddenNav').slideToggle(400);

                var $this = $('#hiddenNav')

                if($this.hasClass('open')){
                    $this.removeClass('open').slideUp(400);
                    $('.switch').removeClass('open');
                    //$('html').off('click', closeItems);
                } else {
                    $this.addClass('open').slideDown(400);
                    $('.switch').addClass('open');
                    //$('html').on('click', closeItems);
                }
                /*
                function closeItems(){
                    $this.removeClass('open').slideUp(400);
                    $('.switch').removeClass('open');
                }
                */
            })
        });
    </script>
	
	<?php if(is_category(array(12,13,14,15,16,309,332,376, 29,30)) && !is_paged()): ?>
        <script>
            $(document).ready(function(){
                //各ブランドトップ　スライド　１頁目のみ読み込み
                $( '#slider' ).sliderPro({
                    width: "100%",
                    height: 500,
                    slideDistance: 0,
                    slideAnimationDuration: 500,//初期値700
                    fade: true,
                    fadeDuration: 2500,//初期値500
                    autoplayDelay: 5000,//初期値5000
                    touchSwipe: true,
                    buttons: false
                });
            });
        </script>
	<?php endif; ?>
	
    <?php /*OLIVIAデビューTOPIC記事 本番 4984 テスト 1357*/ ?>
    <?php if(is_single('4984')): ?>
        <script>
            $(document).ready(function(){
                //各ブランドトップ　スライド　１頁目のみ読み込み
                $( '#slider' ).sliderPro({
                    width: "100%",
                    height: 500,
                    slideDistance: 0,
                    slideAnimationDuration: 500,//初期値700
                    fade: true,
                    fadeDuration: 2500,//初期値500
                    autoplayDelay: 5000,//初期値5000
                    touchSwipe: true,
                    buttons: false
                });
            });
        </script>
    <?php endif; ?>
	
	<?php /*↓本番カテIDは17,テストは20*/ ?>
    <?php if(in_category('17')): ?>
        <script src="<?php bloginfo('template_directory'); ?>-child/js/min/article.js"></script>
    <?php endif; ?>
    
    <?php /*トップのみ、セール時表示バナー挙動スクリプト*/ ?>
	<?php if(is_front_page()): ?>
        <?php $options=get_option('usces'); if('Promotionsale'==$options['display_mode']):
        ?>
            <?php /*SALEキャンペーン中に表示される*/ ?>
            <script>
                $(".modalSaleBanner p").click(function () {
                    $(this).parent().fadeOut(200);
                });
            </script>
        <?php endif; ?>
    <?php endif; ?>
    
</body>
</html>
