<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	
	<link rel="icon" href="<?php bloginfo('template_url'); ?>-child/image/favicon.ico">
	
	<?php /*if(is_front_page()): ?>
		<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<?php else: ?>
		<title><?php wp_title('');?> | <?php bloginfo('name'); ?></title>
	<?php endif;*/ ?>
	
	<?php $timestamp = time() ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/eric-meyer-reset.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>-child/css/bs/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/design.css?<?php echo $timestamp; ?>">
	
	<?php if(is_front_page()): ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/slider-pro.css">
	<?php endif; ?>
	<?php if(is_category(array(12,13,14,15,16,309,332, 29,30))): ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/slider-pro.css">
	<?php endif; ?>
	
	<?php wp_head(); ?>
   
    <?php /*amazon pay*/ ?>
	<?php /*if(welcart_basic_is_cart_page()): ?>
        <script type='text/javascript'>
            window.onAmazonLoginReady = function() {
                amazon.Login.setClientId('amzn1.application-oa2-client.1129ae77d7ca4bd48f66f7be9b443d2a');
            };
            window.onAmazonPaymentsReady = function() {
                showButton();
            };
            
            window.onAmazonLoginReady = function() {
                amazon.Login.setClientId('amzn1.application-oa2-client.1129ae77d7ca4bd48f66f7be9b443d2a');
            };
        </script>
        
        <script async="async" src='https://static-na.payments-amazon.com/OffAmazonPayments/us/sandbox/js/Widgets.js'></script>
    <?php endif;*/ ?>
	
</head>

<body <?php body_class(); ?>>
    <?php /*
    <?php if(is_front_page()): ?>
        <div class="loader">
            <p>PLUS CONTEMPORARY</p>
        </div>
    <?php else: ?>
        <div class="loader">
        </div>
	<?php endif; ?>
    */ ?>
	<div id="wrapper">
		<header id="masthead" class="" role="banner">
            <?php if(! welcart_basic_is_cart_page()): ?>
            <?php endif; ?><?php /*アイコン虫眼鏡へ変更時、分岐外す*/ ?>
                <div id="hiddenNav" class="container-fluid">
                    <div class="row headtop">
						<div class="col-xs-12 col-sm-10 col-sm-offset-2 col-md-5 col-md-offset-3 header_form"><?php /*検索*/ ?>
							<form method="get" action="<?php bloginfo( 'url' ); ?>">
								<input name="s" id="s" type="text" />
								<?php wp_dropdown_categories('depth=0&orderby=id&hide_empty=1&show_option_all=CATEGORY&exclude=13,14,15,16,20,28,44'); ?>
								<input id="submit" type="submit" value="&#xf002" />
							</form>
						</div>
						<?php /*
						<div class="col-xs-12 col-md-3">
							<div class="snav cf">
								<div class="search-box">
									<i class="fa fa-search"></i>
									<?php get_search_form(); ?>
								</div>
							</div><!-- .snav -->
						</div>
						*/ ?>
						<div class="col-xs-12 col-md-4 head_btns">
							<?php if(usces_is_membersystem_state()): ?>
								<div class="membership">
									<ul class="cf">
										<?php if( usces_is_login() ): ?>
											<li class="username">
												<?php printf(__('Hello, %s', 'usces'), usces_the_member_name('return')); ?>
											</li>
											<?php /*
											<li>
												<?php usces_loginout(); ?>
											</li>
                                            */ ?>
											<li>
												<a href="<?php echo USCES_MEMBER_URL; ?>"><?php _e('MY PAGE', 'welcart_basic') ?>
												</a>
											</li>
										<?php else: ?>
										    <?php /*
											<li>
												<?php _e('GUEST', 'usces');  ?>
											</li>
                                            */ ?>
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
								</div>
							<?php endif; ?>
							<div class="incart-btn">
								<a href="<?php echo USCES_CART_URL; ?>">
									<i class="fa fa-shopping-cart">
                                        <?php /*
                                        <?php _e('CART', 'usces') ?>
                                        */ ?>
                                    </i>
								</a>
							</div>
						</div>
                    </div>
                </div>

			<div id="mainNav">
				<div class="logoarea">
					<?php /*
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					*/ ?>
					*/ ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
				</div>
				<div class="menutxt">
					<?php /*if(! welcart_basic_is_cart_page()): ?>
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<label for="panel"><span></span></label>
							<input type="checkbox" id="panel" class="on-off" />
							<?php 
								$page_c	=	get_page_by_path('usces-cart');
								$page_m	=	get_page_by_path('usces-member');
								$pages	=	"{$page_c->ID},{$page_m->ID}";
								wp_nav_menu( array( 'theme_location' => 'header', 'container_class' => 'nav-menu-open' , 'exclude' => $pages ,  'menu_class' => 'header-nav-container cf' ) );
							?>
						</nav><!-- #site-navigation -->
					<?php endif;*/ ?>
					<div id="mddNav">
						<ul>
							<li>
								<a href="#" id="brands">BRANDS</a>
								<div class="mddWrap">
									<div class="mddInner">
										<ul>
											<li><a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/">I LOVE UGLY</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">VIANEL</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/">BY PARRA</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/brand/camar/">CAMAR</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/">APPLEBUM</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/">THE NEW ORDER MAGAZINE</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/">HER. MAGAZINE</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li>
							    <?php /*
								<a href="<?php bloginfo('url'); ?>/category/item/itemnew/">LATEST</a>
                                */ ?>
								<a href="<?php bloginfo('url'); ?>/category/item/latest/">LATEST</a>
							</li>
							<li>
							    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/">TOPS</a>
							    <ul class="child">
							        <li>
							            <a href="<?php bloginfo('url'); ?>/category/item/tops/t-shirts/">T-SHIRTS</a>
							        </li>
							        <li>
							            <a href="<?php bloginfo('url'); ?>/category/item/tops/shirts/">SHIRTS</a>
							        </li>
							        <li>
							            <a href="<?php bloginfo('url'); ?>/category/item/tops/sweat/">SWEAT</a>
							        </li>
							        <li>
							            <a href="<?php bloginfo('url'); ?>/category/item/outerwear/">OUTERWEAR</a>
							        </li>
							    </ul>
							</li>
							<li>
							    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/">BOTTOMS</a>
							    <?php /*
								<a href="#">BOTTOMS</a>
								<div class="mddWrap">
									<div class="mddInner">
										<ul>
											<li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/">VIEW ALL</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/?cat=30">I LOVE UGLY</a></li>
										</ul>
									</div>
								</div>
                                */ ?>
							</li>
							<li>
							    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/accessories/">ACCESSORIES</a>
							    <ul class="child">
							        <li>
							            <a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone/">IPHONE CASE</a>
							        </li>
							        <li>
							            <a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone_plus/">IPHONE PLUS CASE</a>
							        </li>
							    </ul>
							</li>
							<?php /*
							<li>
							    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/homeware/">HOMEWARE</a>
							</li>
                            */ ?>
							<li>
							    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/books/">BOOKS</a>
							    <?php /*
								<a href="#">BOOKS</a>
								<div class="mddWrap">
									<div class="mddInner">
										<ul>
											<li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/books/">VIEW ALL</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/books/?cat=36">THE NEW ORDER MAGAZINE</a></li>
											<li><a href="<?php bloginfo('url'); ?>/category/item/itemgenre/books/?cat=39">her. magazine</a></li>
										</ul>
									</div>
								</div>
                                */ ?>
							</li>
						</ul>
					</div>
                    <?php /*
                    <div class="right">
                        <a href="<?php bloginfo('url'); ?>/favorite/">お気に入り商品</a>
                    </div>
                    */ ?>
				</div>
				
				<div id="smartMenu">
					<span></span>
				</div>
				
				<div class="switch">
                    <?php /*
                    <?php if(!is_page(get_option('usces_cart_number'))): ?>
                    */ ?>
                        <?php /*カートページでは無い場合*/ ?>
                        <?php /*
                        <a href="#">
                            <?php if(! defined( 'WCEX_WIDGET_CART' ) ): ?>
                                <span class="total-quant"><?php usces_totalquantity_in_cart(); ?></span>
                            <?php endif; ?>
                        </a>
                    <?php else: ?>
                        <p>
                            <?php if(! defined( 'WCEX_WIDGET_CART' ) ): ?>
                                <span class="total-quant"><?php usces_totalquantity_in_cart(); ?></span>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
                    */ ?>
                    <a href="#">
                        <span class="loupe">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                    </a>
				</div>
				
			</div>
			
			<ul class="accordion">
                <li class="i">
			        <span>BRANDS</span>
			        <div class="content">
			            <ul>
			                <li>
			                    <a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/">I LOVE UGLY</a>
			                </li>
			                <li>
			                    <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">VIANEL</a>
			                </li>
			                <li>
			                    <a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/">BY PARRA</a>
			                </li>
			                <li>
			                    <a href="<?php bloginfo('url'); ?>/category/item/brand/camar/">CAMAR</a>
			                </li>
			                <li>
			                    <a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/">APPLEBUM</a>
			                </li>
			                <li>
			                    <a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/">THE NEW ORDER MAGAZINE</a>
			                </li>
			                <li>
			                    <a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/">HER. MAGAZINE</a>
			                </li>
			            </ul>
			        </div>
			    </li>
                <li class="i">
                    <a href="<?php bloginfo('url'); ?>/category/item/latest/">LATEST</a>
                </li>
                <li class="i">
			        <span>TOPS</span>
			        <div class="content">
			            <ul>
                            <li><a href="<?php bloginfo('url'); ?>/category/item/tops/">VIEW ALL</a></li>
			                <li><a href="<?php bloginfo('url'); ?>/category/item/tops/t-shirts/">T-SHIRTS</a></li>
			                <li><a href="<?php bloginfo('url'); ?>/category/item/tops/shirts/">SHIRTS</a></li>
			                <li><a href="<?php bloginfo('url'); ?>/category/item/tops/sweat/">SWEAT</a></li>
			                <li><a href="<?php bloginfo('url'); ?>/category/item/tops/outerwear/">OUTERWEAR</a></li>
			            </ul>
			        </div>
			    </li>
                <li class="i">
			        <a href="<?php bloginfo('url'); ?>/category/item/bottoms/">BOTTOMS</a>
			    </li>
                <li class="i">
                    <span>ACCESSORIES</span>
                    <div class="content">
                        <ul>
                            <li><a href="<?php bloginfo('url'); ?>/category/item/accessories/">VIEW ALL</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone/">IPHONE CASE</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone_plus/">IPHONE PLUS CASE</a></li>
                        </ul>
                    </div>
                </li>
                <?php /*
                <li class="i">
                    <a href="<?php bloginfo('url'); ?>/category/item/homeware/">HOMEWARE</a>
                </li>
                */ ?>
                <li class="i">
                    <a href="<?php bloginfo('url'); ?>/category/item/books/">BOOKS</a>
                </li>
			</ul>
		</header><!-- #masthead -->
		
		<div id="main" class="wrapper <?php /*echo $class;*/ ?>">
			<?php if( ( is_front_page() || is_home() ) && get_header_image() ): ?>
				<div class="main-image">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo('name'); ?>">
				</div><!-- main-image -->
			<?php endif; ?>

			<?php 
				if( is_front_page() || is_home() || welcart_basic_is_cart_page() || welcart_basic_is_member_page() ) {
					$class = 'one-column';	
				}else {
					$class = 'two-column right-set';
				};
			?>

			<?php /*breadcrmbs*/ ?>
			<?php /*
			<?php if(!is_front_page()): ?>
				<div class="breadcrumbs">
					<div class="inner">
						<?php if(function_exists('bcn_display')){
							bcn_display();
						}?>
					</div>
				</div>
			<?php endif; ?>
            */ ?>