<?php
$url_encode=urlencode(get_permalink());
$title_encode=urlencode(get_the_title());
?>
<div class="sharebtns">
    <ul>
        <?php if(wp_is_mobile()) {  //以下スマホの場合 ?>
            <?php /*
            <!--ツイートボタン-->
            <li class="twitter"> 
            <a href="http://twitter.com/share?text=<?php echo $title_encode ?>&url=<?php echo $url_encode ?>&via=【●ツイッターアカウント名（＠なし）●】&tw_p=tweetbutton&related="【●ツイッターアカウント名（＠なし）●】"><i class="fa fa-twitter"></i>Twitter&nbsp;<?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></a>
            </li>
            */ ?>
            <!--Facebookボタン-->      
            <li>
                <a class="facebook share" href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>">
                    Facebook&nbsp;
                    <?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?>
                </a>
            </li>
            <li>
                <a class="facebook like" href="http://www.facebook.com/plugins/like.php?href=<?php echo the_permalink(); ?>" onclick="javascript:window.open('http://www.facebook.com/plugins/like.php?href=<?php echo the_permalink(); ?>' ,null ,'width=450 ,height=250'); return false;" rel="nofollow">
                    いいね！
                </a>
            </li>
            <li>
                <a class="twitter" href="http://twitter.com/share?text=<?php wp_title(); ?> | <?php bloginfo('name'); ?>&url=<?php echo the_permalink(); ?>&hashtags=po_co_jp" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow">
                    tweet
                </a>
            </li>
            <?php /*
            <!--Google+1ボタン-->
            <li class="googleplus">
            <a href="https://plus.google.com/share?url=<?php echo $url_encode;?>" ><i class="fa fa-google-plus"></i>Google+&nbsp;<?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':scc_get_share_gplus(); ?></a>
            </li>
            */ ?>
            <?php /*
            <!--はてブボタン-->  
            <li class="hatebu">       
            <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>"><i class="fa fa-hatena"></i>はてブ&nbsp; <?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></a>
            </li>
            */ ?>
            <!--LINEボタン-->   
            <li>
                <a class="line" href="http://line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>">
                    LINE
                </a>
            </li>     
            <!--ポケットボタン-->      
            <li>
                <a class="pocket" href="http://getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>">
                    Pocket&nbsp;
                    <?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'':scc_get_share_pocket(); ?>
                </a>
            </li>
            <?php /*
            <!--RSSボタン-->
            <li>
                <a class="rss" href="<?php echo home_url(); ?>/?feed=rss2">
                    <i class="fa fa-rss"></i>
                    RSS
                </a>
            </li>
            */ ?>
            <?php /*
            <!--feedlyボタン-->
            <li class="feedly">
            <a href="http://feedly.com/index.html#subscription%2Ffeed%2Fhttp%3A%2F%2F【●ドメイン名（例：shufulife.com)●】%2Ffeed%2F"  target="blank"><i class="fa fa-rss"></i>feedly&nbsp; <?php if(function_exists('scc_get_follow_feedly')) echo (scc_get_follow_feedly()==0)?'':scc_get_follow_feedly(); ?></a></li>
            */ ?>
        <?php } else { //以下PCの場合?> 
            <?php /*
            <!--ツイートボタン-->
            <li class="twitter"> 
            <a href="http://twitter.com/share?text=<?php echo $title_encode ?>&url=<?php echo $url_encode ?>&via=【●ツイッターアカウント名（＠なし）●】&tw_p=tweetbutton&related="【●ツイッターアカウント名（＠なし）●】" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><i class="fa fa-twitter"></i>Twitter&nbsp;<?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></a>
            </li>
            */ ?>
            <!--Facebookボタン-->
            <li>       
                <a class="facebook share" href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=1000');return false;">
                    Facebook&nbsp;
                    <?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?>
                </a>
            </li>
            <li>
                <a class="facebook like" href="http://www.facebook.com/plugins/like.php?href=<?php echo the_permalink(); ?>" onclick="javascript:window.open('http://www.facebook.com/plugins/like.php?href=<?php echo the_permalink(); ?>' ,null ,'width=450 ,height=250'); return false;" rel="nofollow">
                    いいね！
                </a>
                
            </li>
            <li>
                <a class="twitter" href="http://twitter.com/share?text=<?php wp_title(); ?> | <?php bloginfo('name'); ?>&url=<?php echo the_permalink(); ?>&hashtags=po-co" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow">
                    tweet
                </a>
            </li>
            <?php /*
            <!--Google+1ボタン-->
            <li class="googleplus">
            <a href="https://plus.google.com/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;"><i class="fa fa-google-plus"></i>Google+&nbsp;<?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':scc_get_share_gplus(); ?></a>
            </li>
            */ ?>
            <?php /*
            <!--はてブボタン-->  
            <li class="hatebu"> 
            <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" ><i class="fa fa-hatena"></i>はてブ&nbsp; <?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></a>
            </li>
            */ ?>
            <?php /*
            <!--LINEボタン-->      
            <li class="line">
            <a href="http://line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>" target="blank">LINE</a>
            </li>
            */ ?>
            <!--ポケットボタン-->      
            <li>
                <a class="pocket icon-pocket" href="http://getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>" target="blank">
                    Pocket&nbsp;
                    <?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'':scc_get_share_pocket(); ?>
                </a>
            </li>
            <?php /*
            <!--RSSボタン-->
            <li>
                <a class="rss" href="<?php echo home_url(); ?>/?feed=rss2" target="blank">
                    <i class="fa fa-rss"></i>
                    RSS
                </a>
            </li>
            */ ?>
            <?php /*
            <!--feedlyボタン-->
            <li class="feedly">
            <a href="http://feedly.com/index.html#subscription%2Ffeed%2Fhttp%3A%2F%2F【●ドメイン名（例：shufulife.com)●】%2Ffeed%2F"  target="blank"><i class="fa fa-rss"></i>feedly&nbsp; <?php if(function_exists('scc_get_follow_feedly')) echo (scc_get_follow_feedly()==0)?'':scc_get_follow_feedly(); ?></a></li>
            */ ?>
        <?php } ?>
    </ul>
</div>


