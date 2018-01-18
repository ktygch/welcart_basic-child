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
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/menu_pc.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/menu_sp.css">
	
	<?php if(is_front_page()): ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/slider-pro.css">
	<?php endif; ?>
	<?php if(is_category(array(12,13,14,15,16,309,332,376, 29,30))): ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/slider-pro.css">
	<?php endif; ?>
	
    <?php /*OLIVIAデビューTOPIC記事 本番 4984 テスト 1357*/ ?>
	<?php if(is_single('4984')): ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>-child/css/slider-pro.css">
	<?php endif; ?>
	
	<?php wp_head(); ?>
   
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="drawer drawer--top drawer--navbarTopGutter">
		<header id="masthead" role="banner">
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
            
            <div class="menu_wrap">
                <div class="inner">
                    <div class="logoarea">
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                    </div>

                    <?php /*PCナビゲーション ul.menu*/ ?>
                    <ul class="menu">
                        <li class="menu__multi">
                            <a href="#">BRANDS</a>
                            <ul class="menu__second-level brands">
                                <!-- 第2階層 -->
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/">I LOVE UGLY</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">VIANEL NEW YORK</a>
                                    <ul class="menu__third-level">
                                        <!-- 第3階層 -->
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">ALL</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/iphone_x_vianel/">IPHONE X CASES</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/olivia_palermo/">OLIVIA PALERMO</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/camo/">CAMO COLLECTION</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/brand/vianel/standard/">IPHONE CASES</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/">BY PARRA</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/brand/camar/">CAMAR</a>
                                </li>
                                <?php /*
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/">APPLEBUM</a>
                                </li>
                                */ ?>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/">THE NEW ORDER MAGAZINE</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/">HER. MAGAZINE</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__multi">
                            <a href="<?php bloginfo('url'); ?>/category/item/latest/">LATEST</a>
                        </li>
                        <li class="menu__multi">
                            <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/">TOPS</a>
                            <ul class="menu__second-level genre">
                                <!-- 第2階層 -->
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/">ALL</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/t-shirts/">T-SHIRTS</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/shirts/">SHIRTS</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/sweat/">SWEAT</a>
                                </li>
                                <?php /*
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/hoodie/">HOODIE</a>
                                </li>
                                */ ?>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/outerwear/">OUTERWEAR</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__multi">
                            <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/">BOTTOMS</a>
                            <?php /*
                            <ul class="menu__second-level genre">
                                <!-- 第2階層 -->
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/long/">LONG</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/denim/">DENIM</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/short/">SHORT</a>
                                </li>
                            </ul>
                            */ ?>
                        </li>
                        <li class="menu__multi">
                            <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/accessories/">ACCESSORIES</a>
                            <ul class="menu__second-level genre">
                                <!-- 第2階層 -->
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/accessories/">ALL</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone_x/">IPHONE X CASE</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone/">IPHONE CASE</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone_plus/">IPHONE PLUS CASE</a>
                                </li>
                            </ul>
                        </li>
                        <?php /*
                        <li class="menu__multi">
                            <a href="">HOMEWARES</a>
                        </li>
                        */ ?>
                        <li class="menu__multi">
                            <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/books/">BOOKS</a>
                        </li>
                    </ul>
                    <?php /*PCナビゲーション ul.menu END*/ ?>
                    
                    <div class="header_social">
                        <ul>
                            <li><a href="https://www.facebook.com/PO-COjp-1208605745854667/" target="_blank">Facebook</a></li>
                            <li><a href="https://www.instagram.com/pocostore/" target="_blank">instagram</a></li>
                            <li><a href="https://twitter.com/POCO_STORE" target="_blank">Twitter</a></li>
                        </ul>
                    </div>
                    
                    <div id="smartMenu">
                        <span></span>
                    </div>
                   
                    <div class="switch">
                        <a href="#">
                            <span class="loupe">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
                   
            <?php /*SPナビゲーション*/ ?>
            <div class="accordion">
                <div class="panel-group" id="parent">
                    <div class="panel">
                        <a data-toggle="collapse" data-parent="#parent" href="#brandsPanel">
                            BRANDS
                        </a>
                        
                        <div id="brandsPanel" class="panel-collapse collapse">
                            <div class="panel-group">
                                <a href="<?php bloginfo('url'); ?>/category/item/brand/iloveugly/">I LOVE UGLY</a>
                            </div>
                            <div id="menu_vianel" class="panel-group">
                                <a data-toggle="collapse" href="#vianelPanel">
                                    VIANEL NEW YORK
                                </a>
                                <div id="vianelPanel" class="panel-collapse collapse">
                                    <ul>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/">ALL</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/iphone_x_vianel/">IPHONE X CASES</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/olivia_palermo/">OLIVIA PALERMO</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/camo/">CAMO COLLECTION</a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/category/item/brand/vianel/standard/">IPHONE CASES</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-group">
                                <a href="<?php bloginfo('url'); ?>/category/item/brand/byparra/">BY PARRA</a>
                            </div>
                            <div class="panel-group">
                                <a href="<?php bloginfo('url'); ?>/category/item/brand/camar/">CAMAR</a>
                            </div>
                            <?php /*
                            <div class="panel-group">
                                <a href="<?php bloginfo('url'); ?>/category/item/brand/applebum/">APPLEBUM</a>
                            </div>
                            */ ?>
                            <div class="panel-group">
                                <a href="<?php bloginfo('url'); ?>/category/item/brand/thenewordermagazine/">THE NEW ORDER MAGAZINE</a>
                            </div>
                            <div class="panel-group">
                                <a href="<?php bloginfo('url'); ?>/category/item/brand/hermagazine/">HER. MAGAZINE</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel">
                        <a href="<?php bloginfo('url'); ?>/category/item/latest/">
                            LATEST
                        </a>
                    </div>
                    
                    <div class="panel">
                        <a data-toggle="collapse" data-parent="#parent" href="#topsPanel">
                            TOPS
                        </a>
                        <div id="topsPanel" class="panel-collapse collapse">
                            <ul>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/">ALL</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/t-shirts/">T-SHIRTS</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/shirts/">SHIRTS</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/sweat/">SWEAT</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/tops/outerwear/">OUTERWEAR</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="panel">
                        <a href="<?php bloginfo('url'); ?>/category/item/itemgenre/bottoms/">
                            BOTTOMS
                        </a>
                    </div>
                    
                    <div class="panel">
                        <a data-toggle="collapse" data-parent="#parent" href="#accePanel">
                            ACCESSORIES
                        </a>
                        <div id="accePanel" class="panel-collapse collapse">
                            <ul>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/accessories/">ALL</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone_x/">IPHONE X CASE</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone/">IPHONE CASE</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/item/accessories/iphone_plus/">IPHONE PLUS CASE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php /*
                    <div class="panel">
                        <a href="<?php bloginfo('url'); ?>/category/item/homeware/">
                            HOMEWARE
                        </a>
                    </div>
                    */ ?>
                    <div class="panel">
                        <a href="<?php bloginfo('url'); ?>/category/item/books/">
                            BOOKS
                        </a>
                    </div>
                </div>
            </div>
            <?php /*SPナビゲーション END*/ ?>
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