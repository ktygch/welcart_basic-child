<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>

<div id="latestTopic">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <?php /*OLIVIAデビューTOPIC記事 本番 4984 テスト 1357*/ ?>
        <?php if(!is_single('4984')): ?>
            <header class="entry-header">
                <h2 class="entry-title center"><?php the_title(); ?></h2>
            </header>
            <?php $thumbnail_id = get_post_thumbnail_id(); ?>
            <?php $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' ); ?>
            <?php list($src) = $eye_img; ?>
            <div class="main_pic">
                <div class="inner_img" style="background-image: url(<?php echo $src; ?>);"></div>
            </div>
        <?php endif; ?>
        
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
    
</div>