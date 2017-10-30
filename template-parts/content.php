<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>

<div id="latestTopic">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <header class="entry-header">
            <h2 class="entry-title center"><?php the_title(); ?></h2>
        </header>
        
        <?php $thumbnail_id = get_post_thumbnail_id(); ?>
        <?php $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' ); ?>
        <?php list($src) = $eye_img; ?>
        <div class="main_pic">
            <div class="inner_img" style="background-image: url(<?php echo $src; ?>);"></div>
        </div>
        
        <div class="entry-content">
            <?php the_content(__('(more...)')); ?>
        </div><!-- .entry-content -->
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <?php if(is_single() ): ?>
                        <?php if(!usces_is_item()): ?>
                            <div class="entry-meta">
                                <span class="date">
                                    <time><?php the_date(); ?></time>
                                </span>
                                <span class="cat">
                                    <?php /*_e("Filed under:");*/ ?>
                                    <?php the_category(',') ?>
                                </span>
                                <span class="tag">
                                    <?php the_tags(__('')); ?>
                                </span>
                                <?php /*
                                <span class="author">
                                    <?php the_author() ?><?php edit_post_link(__('Edit This')); ?>
                                </span>
                                */ ?>
                            </div>
                        <?php endif; ?>
                        <?php get_template_part('social'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </article>
    
    <?php /*　カテゴリーを指定できない　要調査
    <div class="flex_item">
        <?php query_posts(array('category_name'=>'accessories')); ?>
            <?php if(have_posts()) : ?>
                <?php while( have_posts() ) : the_post(); usces_the_item(); ?>
                    <div id="post-<?php the_ID(); ?>" class="f_item itemimg">
                        <a href="<?php the_permalink(); ?>">
                            <span style="background-image: url('<?php
                    usces_the_itemImageURL(0); ?>')"></span>
                            <div class="item_info">
                                <h3 class="itemname">
                                    <?php usces_the_itemName(); ?>
                                </h3>
                                <div class="itemprice">
                                    <?php usces_crform( usces_the_firstPrice('return'), true, false ); ?><?php usces_guid_tax(); ?>
                                </div>
                            </div>
                        </a>
                        <?php if( !usces_have_zaiko_anyone() ) : ?>
                            <div class="itemsoldout">
                                <span><?php _e('SOLD OUT', 'usces' ); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="col-xs-12 center">
                    <?php _e('NO PRODUCT FOUND'); ?>
                </p>
            <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    
    <div class="center padding20">
        <a href="<?php usces_get_category_link_by_slug('accessories'); ?>" class="btn btn-primary btn-md">VIEW ALL</a>
    </div>
    */ ?>
    
</div>
