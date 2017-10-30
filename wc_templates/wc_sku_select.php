<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

$division = welcart_basic_get_item_division( $post->ID );
switch( $division ) :
case 'data':
	get_template_part( 'wc_templates/wc_item_single_data', get_post_format() );
	break;
case 'service':
	get_template_part( 'wc_templates/wc_item_single_service', get_post_format() );
	break;
default://shipped

get_header();
?>

<div id="primary" class="site-content">
	<div id="content" role="main" class="item_wrap">
        <?php if( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                <div class="storycontent container">
                    <?php usces_remove_filter(); ?>
                    <?php usces_the_item(); ?>
                    <?php usces_have_skus(); ?>
                    <div id="itempage" class="row">
                        <div id="image" class="col-xs-12 col-sm-7">
                            <div class="itemimg">
                                <a href="<?php usces_the_itemImageURL(0); ?>" <?php echo apply_filters( 'usces_itemimg_anchor_rel', NULL ); ?>><?php usces_the_itemImage( 0, 500, 500, $post ); ?></a>
                            </div>
                            
                            <?php if(!is_mobile()): ?>
                                <div class="subimg_pc">
                                    <?php
                                    $imageid = usces_get_itemSubImageNums();
                                    if( !empty( $imageid ) ):
                                    ?>
                                        <?php foreach( $imageid as $id ) : ?>
                                            <div class="itemsubimg">
                                                <a href="<?php usces_the_itemImageURL($id); ?>" <?php echo apply_filters( 'usces_itemimg_anchor_rel', NULL ); ?>><?php usces_the_itemImage( $id, 500, 500, $post ); ?></a>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div><!-- #image -->

                        <div id="side" class="col-xs-12 col-sm-5">
                            <div class="fixedbutton">
                                <div class="inner">
                                    <h2 class="item-name">
                                        <?php the_title(); ?>
                                        <?php /*usces_the_itemName();*/ ?>
                                    </h2>

                                    <form action="<?php echo USCES_CART_URL; ?>" method="post">

                                    <?php /*
                                    <?php do { ?>
                                    */ ?>
                                        <div id="skuform" class="skuform">
                                            <div class="field">

                                                <?php if( 'continue' == welcart_basic_get_item_chargingtype( $post->ID ) ) : ?>
                                                    <div class="frequency">
                                                        <span class="field_frequency"><?php dlseller_frequency_name($post->ID, 'amount'); ?></span>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="field_price">
                                                    <?php if( usces_the_itemCprice('return') > 0 ) : ?>
                                                        <span class="ss_cprice">
                                                            <?php usces_the_itemCpriceCr(); ?>
                                                        </span>
                                                    <?php endif; ?>
                                                    
                                                    <?php if(usces_item_discount('return') > 0): ?>
                                                        <?php welcart_basic_campaign_message(); ?>
                                                        <?php /*セール価格*/ ?>
                                                        <s>
                                                            <?php usces_the_itemPriceCr(); ?>
                                                        </s>
                                                        <span class="red">
                                                            <?php /*
                                                            ¥<?php usces_item_discount(); ?> OFF => 
                                                            */ ?>
                                                            <?php usces_crform(usces_the_itemPrice('return')-usces_item_discount( 'return' ), true, false); ?>
                                                        </span>
                                                    <?php else: ?>
                                                        <?php /*通常価格*/ ?>
                                                        <?php usces_the_itemPriceCr(); ?>
                                                    <?php endif; ?>
                                                    <?php usces_guid_tax(); ?>
                                                </div>
                                                
                                                <?php /*
                                                <div class="zaikostatus">
                                                    <div class="field">
                                                        <?php _e('stock status', 'usces'); ?> : <span class="ss_stockstatus"><?php usces_the_itemZaikoStatus(); ?></span>
                                                    </div>
                                                </div>
                                                */ ?>
                                            </div>
                                            <?php /*if( '' !== usces_the_itemSkuDisp('return') ) : ?>
                                                <div class="skuname">
                                                    <?php usces_the_itemSkuDisp(); ?>
                                                </div>
                                            <?php endif;*/ ?>

                                            <?php if( usces_is_options() ) : ?>
                                                <dl class="item-option">
                                                    <?php while( usces_have_options() ) : ?>
                                                        <dt><?php usces_the_itemOptName(); ?></dt>
                                                        <dd><?php usces_the_itemOption( usces_getItemOptName(), '' ); ?></dd>
                                                    <?php endwhile; ?>
                                                </dl>
                                            <?php endif; ?>
                                            
                                            <div class="amount">
                                                <div class="">
                                                    <?php wcex_sku_select_form(); ?>
                                                </div>
                                                <div class="quantity">
                                                    <?php _e('<span>QTY</span>', 'usces'); ?><?php usces_the_itemQuant(); ?><?php usces_the_itemSkuUnit(); ?>
                                                </div>
                                                <div class="wcss_loading"></div>
                                            </div>

                                            <?php /* SKUセレクトでは業務パック割引機能は利用できない
                                            <?php usces_the_itemGpExp(); ?>
                                            */ ?>
                                            
                                            <div class="itemsoldout">
                                                <span class="ss_stockstatus">
                                                    <?php echo apply_filters( 'usces_filters_single_sku_zaiko_message', __('SOLD OUT','welcart_basic') ); ?>
                                                </span>
                                            </div>
                                            
                                            <div class="c-box">
                                                <div class="cart-button"><?php usces_the_itemSkuButton( '' . __('ADD TO CART', 'usces' ), 0 ); ?></div>
                                            </div>

                                            <div class="error_message"><?php usces_singleitem_error_message( $post->ID, usces_the_itemSku('return') ); ?></div>
                                        </div><!-- .skuform -->
                                    <?php /*
                                    <?php } while ( usces_have_skus() ); ?>
                                    */ ?>

                                        <?php do_action( 'usces_action_single_item_inform' ); ?>
                                    </form>

                                    <?php /*
                                    <div class="itemcode">
                                        <?php usces_the_itemCode(); ?>
                                    </div>
                                    */ ?>

                                    <?php do_action( 'usces_action_single_item_outform' ); ?>
                                    
                                    <div class="center padding10">
                                        お気に入り登録
                                        <?php wpfp_link(); ?>
                                    </div>

                                    <div class="item-description">
                                        <div class="prod_summary">
                                            <div class="tab">
                                                <ul class="tab-menu">
                                                    <li class="selected"><a href="#" data-tabid="1">DESCRIPTION</a></li>
                                                    <li><a href="#" data-tabid="2">DETAIL</a></li>
                                                    <li><a href="#" data-tabid="3">SHIPPING</a></li>
                                                    <li><a href="#" data-tabid="4">RETURN</a></li>
                                                </ul>
                                                <div class="tab-contents">
                                                    <?php the_content(); ?>
                                                    <div data-contentid="3" class="kakusu">
                                                        <h4>配送料</h4>
                                                        <ul>
                                                            <li>本州、四国地方 756円</li>
                                                            <li>北海道、沖縄、その他離島エリア　1,080円</li>
                                                        </ul>
                                                        <div>
                                                           10,000円以上のご注文より送料無料とさせて頂きます。 
                                                        </div>
                                                        <h4>
                                                            代引手数料
                                                        </h4>
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
                                                    <div data-contentid="4" class="kakusu">
                                                        <h4>返品について</h4>
                                                        <div>
                                                            ご注文後の商品の返品・交換は受けつけておりません。但し、初期不良、発送商品間違いがあった場合に限り返品・交換をお受け致します。その際のご連絡は、商品到着後、7日以内にEメールにてお知らせください。上記期日を過ぎた際は、返品・交換をお受けする事ができませんのでご注意下さい。
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if( 'continue' == welcart_basic_get_item_chargingtype( $post->ID ) ) : ?>
                                        <!-- Charging Type Continue shipped -->
                                        <div class="field">
                                            <table class="dlseller">
                                                <tr>
                                                    <th><?php _e('First Withdrawal Date', 'dlseller'); ?></th>
                                                    <td><?php echo dlseller_first_charging( $post->ID ); ?></td>
                                                </tr>
                                                <?php if( 0 < (int)$usces_item['dlseller_interval'] ) : ?>
                                                    <tr>
                                                        <th><?php _e('Contract Period', 'dlseller'); ?></th>
                                                        <td><?php echo $usces_item['dlseller_interval']; ?><?php _e('month (Automatic Updates)', 'welcart_basic'); ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            </table>
                                        </div>
                                    <?php endif; ?>

                                    <?php if( $item_custom = usces_get_item_custom( $post->ID, 'list', 'return' ) ) : ?>
                                        <?php echo $item_custom; ?>
                                    <?php endif; ?>
                                    
                                    <?php get_template_part('social'); ?>
                                    
                                </div>
                            </div><!-- .fixedbutton -->
                        </div><!-- #side -->

                    </div><!-- #itempage -->
                    
                    <?php if(is_mobile()): ?>
                        <div id="itemsubSmart" class="row">
                            <div class="col-xs-12 col-sm-6">
                                <?php
                                $imageid = usces_get_itemSubImageNums();
                                if( !empty( $imageid ) ):
                                ?>
                                    <?php foreach( $imageid as $id ) : ?>
                                        <div class="itemsubimg">
                                            <a href="<?php usces_the_itemImageURL($id); ?>" <?php echo apply_filters( 'usces_itemimg_anchor_rel', NULL ); ?>><?php usces_the_itemImage( $id, 500, 500, $post ); ?></a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                   <?php endif; ?>
                    
                    <?php /*同ブランド一覧*/ ?>
                    <?php usces_assistance_item( $post->ID, __('YOU MAY ALSO LIKE', 'usces') ); ?>

				</div><!-- .storycontent -->

            </article>

        <?php else: ?>
            <p class="center">
                <?php _e('NO PRODUCT FOUND.'); ?>
            </p>
        <?php endif; ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php if(!is_mobile()): ?>
    <?php $timestamp = time() ?>
    <?php /* カートスクロール追尾 モバイルは排除 */ ?>
    <script src="<?php bloginfo('template_directory'); ?>-child/js/min/scrollfix.js?<?php echo $timestamp; ?>"></script>
<?php endif; ?>

<?php endswitch; ?>
