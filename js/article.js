$(window).on('scroll',function(){
    //アイキャッチ　パララックス
    var scrollpx = $(this).scrollTop();
    var bg_scroll  = -scrollpx*0.4;
    $('.inner_img').css({'top':bg_scroll});
    
    //記事末　パララックス
    var setArea = $('.btm_parallax'),
        showHeight = 15;

    $('.inner_parallax').css({
        top: 0
    });

    $(window).on('load scroll resize', function(){
        
        $(function(){
            var offsetTop = setArea.offset().top;
            
            var winH = $(window).height();
            
            var total =  scrollpx + winH;
            
            var btmScroll = offsetTop - total;
                        
            var btmParallax = btmScroll*0.2;

            if($(window).scrollTop() > (offsetTop + showHeight) - $(window).height()){
                $('.inner_parallax').css({
                    top: btmParallax
                });
            }
        });

    });
    
});

//col-4
$(function(){
    var itemH = $('.itemsubimg').width();
	$('.itemsubimg').css('height', itemH);
	$('.itemsubimg a').css('height', itemH);
    $('.itemsubimg a span').css('height', itemH);
    
    var masterH = $('.masterH').height();
    
    var childH = masterH / 2;
    $('.childH').css({
        height: childH
    });
    $('.childH a').css({
        height: childH
    });
    $('.childH a span').css({
        height: childH
    });
    
});

var timer = false;
$(window).resize(function() {
    if (timer !== false) {
        clearTimeout(timer);
    }
    timer = setTimeout(function() {
        console.log('resized');
		
		var itemH = $('.itemsubimg').width();
		$('.itemsubimg').css('height', itemH);
        $('.itemsubimg a').css('height', itemH);
		$('.itemsubimg a span').css('height', itemH);
        
        var masterH = $('.masterH').height();
        
        var childH = masterH / 2;
        $('.childH').css({
            height: childH
        });
        $('.childH a').css({
            height: childH
        });
        $('.childH a span').css({
            height: childH
        });
        
    }, 200);
});

//スマホでのパララックスbg cover=>containへ
$(function(){
    $('#post-3711').children('.main_pic').children('.inner_img').addClass('smart_bg_contain');
});
