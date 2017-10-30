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
                            <?php _e('The new password acquisition', 'usces'); ?>
                        </span>
                    </h1>

                    <div id="memberpages">
                        <div class="whitebox">

                            <div class="header_explanation">
                                <?php do_action( 'usces_action_newpass_page_header' ); ?>
                            </div><!-- .header_explanation -->

                            <div class="error_message"><?php usces_error_message(); ?></div>

                            <div class="loginbox">
                                <form name="loginform" id="loginform" action="<?php usces_url('member'); ?>" method="post" onKeyDown="if(event.keyCode == 13){return false;}">
                                    <p>
                                        <label><?php _e('MAIL', 'usces'); ?><br />
                                        <input type="text" name="loginmail" id="loginmail" class="loginmail" value="" size="20" /></label>
                                    </p>
                                    <div class="submit center">
                                        <input type="submit" name="lostpassword" id="member_login" value="<?php _e('Obtain new password', 'usces'); ?>" />
                                        <p class="center">
                                            <?php _e('※ メールの内容にしたがってパスワードを変更してください。', 'usces'); ?>
                                        </p>
                                    </div>
                                    <?php do_action( 'usces_action_newpass_page_inform' ); ?>
                                </form>


                                <?php if( !usces_is_login() ) : ?>
                                <p id="nav" class="right">
                                    <a href="<?php usces_url('login'); ?>" title="<?php _e('Log-in', 'usces'); ?>"><?php _e('Log-in', 'usces'); ?></a>
                                </p>
                                <?php endif; ?>
                            </div><!-- .loginbox -->

                            <div class="footer_explanation">
                                <?php do_action( 'usces_action_newpass_page_footer' ); ?>
                            </div><!-- .footer_explanation -->

                        </div><!-- .whitebox -->
                    </div><!-- #memberpages -->

                    <script type="text/javascript">
                        try{document.getElementById('loginmail').focus();}catch(e){}
                    </script>

                </article><!-- .post -->

            <?php else: ?>
                <p><?php _e('no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
