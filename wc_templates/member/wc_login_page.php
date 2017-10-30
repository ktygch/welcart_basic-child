<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header();
?>
<div id="primary" class="site-content">
	<div id="content" class="member-page" role="main">
		<div class="container">
            <?php if( have_posts() ) : usces_remove_filter(); ?>
                <article class="post" id="wc_<?php usces_page_name(); ?>">

                    <h1 class="member_page_title">
                        <span>
                            <?php _e('LOGIN', 'usces'); ?> 
                        </span>
                    </h1>

                    <div id="memberpages">
                        <div class="whitebox">

                            <div class="header_explanation">
                                <?php do_action( 'usces_action_login_page_header' ); ?>
                            </div><!-- .header_explanation -->

                            <div class="error_message"><?php usces_error_message(); ?></div>

                            <div class="loginbox">
                                <form name="loginform" id="loginform" action="<?php echo apply_filters( 'usces_filter_login_form_action', USCES_MEMBER_URL ); ?>" method="post">
                                    <p>
                                        <label><?php _e('MAIL', 'usces'); ?><br />
                                        <input type="text" name="loginmail" id="loginmail" class="loginmail" value="<?php esc_attr_e(usces_remembername('return')); ?>" size="20" /></label>
                                    </p>
                                    <p>
                                        <label><?php _e('PASS', 'usces'); ?><br />
                                        <input type="password" name="loginpass" id="loginpass" class="loginpass" size="20" /></label>
                                    </p>
                                    <p class="forgetmenot center">
                                        <label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e('memorize login information', 'usces'); ?></label>
                                    </p>
                                    <p class="submit center">
                                        <?php usces_login_button(); ?>
                                    </p>
                                    <?php do_action( 'usces_action_login_page_inform' ); ?>
                                </form>

                                <p id="nav" class="right">
                                    <a href="<?php usces_url('lostmemberpassword'); ?>" title="<?php _e('&gt;パスワードをお忘れの場合', 'usces'); ?>"><?php _e('&gt;パスワードをお忘れの場合', 'usces'); ?></a>
                                </p>

                                <div class="new-entry">
                                    <h2>
                                        <span>
                                            <?php _e('BECOME A MEMBER' , 'welcart_basic'); ?>
                                        </span>
                                    </h2>
                                    <p id="nav">
                                        <a href="<?php usces_url('newmember') . apply_filters( 'usces_filter_newmember_urlquery', NULL ); ?>" title="<?php _e('New enrollment for membership.', 'usces'); ?>"><?php _e('New enrollment for membership.', 'usces'); ?></a>
                                    </p>
                                </div><!-- new-entry -->

                            </div><!-- .loginbox -->

                            <div class="footer_explanation">
                                <?php do_action( 'usces_action_login_page_footer' ); ?>
                            </div><!-- .footer_explanation -->

                        </div><!-- .whitebox -->
                    </div><!-- #memberpages -->

                    <script type="text/javascript">
                        <?php if( usces_is_login() ) : ?>
                                setTimeout( function(){ try{
                                d = document.getElementById('loginpass');
                                d.value = '';
                                d.focus();
                                } catch(e){}
                                }, 200);
                        <?php else : ?>
                                try{document.getElementById('loginmail').focus();}catch(e){}
                        <?php endif; ?>
                    </script>

                </article><!-- .post -->

            <?php else: ?>
                <p class="center nothing"><?php _e('no posts matched your criteria.'); ?></p>
            <?php endif; ?>
		</div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
