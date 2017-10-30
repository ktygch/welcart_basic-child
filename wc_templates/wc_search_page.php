<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>
<?php /*<p>WCサーチページ</p>*/ ?>
<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php /*
		<header class="page-header">
			<span class="bg_header"></span>
			<h1 class="page-title">
				<?php the_title(); ?>
			</h1>
		</header><!-- .page-header -->
		*/ ?>
		<h1 class="page-title">
		    <span>
                <?php the_title(); ?>
		    </span>
		</h1>
		<?php if( have_posts() ) : have_posts(); the_post(); ?>
			<section class="post" id="<?php echo $post->post_name; ?>">

				<?php $uscpaged = ( isset($_REQUEST['paged']) ) ? $_REQUEST['paged'] : 1; ?>
				<script type="text/javascript">
					function usces_nextpage() {
						document.getElementById('usces_paged').value = <?php echo ($uscpaged + 1); ?>;
						document.searchindetail.submit();
					}
					function usces_prepage() {
						document.getElementById('usces_paged').value = <?php echo ($uscpaged - 1); ?>;
						document.searchindetail.submit();
					}
					function newsubmit() {
						document.getElementById('usces_paged').value = 1;
					}
				</script>

				<!--<div id="searchbox" class="search-li">-->

					<?php //******* part of result ************** ?>
					<?php
						usces_remove_filter();
						if( isset($_REQUEST['usces_search']) ) :
							$catresult = usces_search_categories(); 
							$search_query = array( 'category__and' => $catresult, 'posts_per_page' => 10, 'paged' => $uscpaged );
							$search_query = apply_filters( 'usces_filter_search_query', $search_query ) ;
							$my_query = new WP_Query( $search_query );
					?>
							<div class="container">
								<div class="title">
									<?php _e('SEARCH RESULT', 'usces'); ?>&nbsp;&nbsp;<?php echo number_format($my_query->found_posts); ?><?php _e('cases', 'usces'); ?>
								</div>
							</div>

						<?php if( $my_query->have_posts() ) : ?>

							<?php $search_result = apply_filters( 'usces_filter_search_result', NULL, $my_query ); ?>
							<?php if( !empty($search_result) ) : ?>
								<?php echo $search_result; ?>
							<?php else : ?>
								<div class="flex_item">
									<?php while( $my_query->have_posts() ) : $my_query->the_post(); usces_the_item(); ?>
										<div class="f_item itemimg">
											<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'welcart_basic' ), the_title_attribute( 'echo=0' ) ); ?>">
												<span style="background-image: url('<?php
							usces_the_itemImageURL(0); ?>')"></span>
                                                <div class="item_info">
                                                    <h3 class="itemname"><?php usces_the_itemName(); ?></h3>
                                                    <div class="itemprice"><?php usces_crform( usces_the_firstPrice('return'), true, false ); usces_guid_tax(); ?></div>
                                                </div>
											</a>
											<?php /*
											<div class="loopimg">
												<a href="<?php the_permalink(); ?>"><?php usces_the_itemImage( 0, 300, 300, $post ); ?></a>
											</div>
											
											<div class="item_info">
												<h3 class="item_name"><?php the_excerpt(); ?></h3>
											</div>
											*/ ?>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>

							<div class="navigation cf">
								<?php if( $uscpaged > 1 ) : ?>
									<a style="float:left; cursor:pointer;" onclick="usces_prepage();"><?php _e('&lt; Previous article', 'usces'); ?></a>
								<?php endif; ?>
								<?php if( $uscpaged < $my_query->max_num_pages ) : ?>
									<a style="float:right; cursor:pointer;" onclick="usces_nextpage();"><?php _e('Next article &gt;', 'usces'); ?></a>
								<?php endif; ?>
							</div>

						<?php else : ?>
							<div class="searchitems center">
								<p class="nothing"><?php _e('NO PRODUCT FOUND', 'usces'); ?></p>
							</div>
						<?php endif; ?>

					<?php endif; wp_reset_query(); ?>
					
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<form name="searchindetail" action="<?php echo welcart_basic_get_cart_url(); ?>page=search_item" method="post" class="fukugou">

									<div class="field">
										<label class="outlabel"><?php _e('CATEGORIES: AND Search', 'usces'); ?></label>
										<?php echo usces_categories_checkbox('return'); ?>
									</div>

									<div class="send">
										<input name="usces_search_button" class="usces_search_button" type="submit" value="<?php _e('Search', 'usces'); ?>" onclick="newsubmit()" />
										<input name="paged" id="usces_paged" type="hidden" value="<?php echo $uscpaged; ?>" />
										<input name="usces_search" type="hidden" />
									</div>
									<?php do_action( 'usces_action_search_item_inform' ); ?>
								</form>
							</div>
						</div>
					</div>
				<!--</div> #searchbox -->

			</section><!-- .post -->
		<?php endif; ?>
			
	</div><!-- #content -->
</div><!-- #primary -->

<?php /*
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="text" name="s" placeholder="キーワード...">

				<div>カテゴリ</div>
					<?php wp_dropdown_categories( 'show_option_all=全てのカテゴリ' ); ?>


				<div>タグ</div>
					<select name="and-or" id="select-and-or">
						<option value="OR">[OR] 以下のどれかのタグを含む</option>
						<option value="AND">[AND] チェックした全てのタグを含む</option>
					</select>

				<div>
					<?php
					$tags = get_terms( 'post_tag' );
					$checkboxes = '';
					foreach($tags as $tag) :
						$checkboxes .='<input type="checkbox" name="tag[]" value="'.$tag -> slug.'" id="tag-'.$tag->term_id.'" /><label for="tag-'.$tag->term_id.'">'.$tag->name.'</label>'.'&nbsp;';
					endforeach;
					print $checkboxes;
					?>
				</div>

				<p><input type="submit" value="検索"></p>
			</form>
		</div>
	</div>
</div>
*/ ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
