/*
$(function(){//トップ新商品の高さ揃え
    var recoH = $('.recoTop').width();
    $('.recoTop').css('height', recoH);
});
*/

$(function(){
    var itemH = $('.itemimg').width();
	$('.itemimg').css('height', itemH);
	$('.itemimg a').css('height', itemH);
    $('.itemimg a span').css('height', itemH);
    
    var itemH2 = $('.itemimg2').width();
	$('.itemimg2').css('height', itemH2);
	$('.itemimg2 a').css('height', itemH2);
    $('.itemimg2 a span').css('height', itemH2);
    
	$('.each_topic').css('height', itemH);
    $('.soldout').css({
        width: itemH,
        height: itemH
    });
    
	var listbH = $('.listbox').width();
	$('.listbox').css('height', listbH);
	$('.listbox a').css('height', listbH);
	$('.listbox a span').css('height', listbH);
    
	var listbH = $('.thumimg').width();
	$('.thumimg').css('height', listbH);
    
});

var timer = false;
$(window).resize(function() {
    if (timer !== false) {
        clearTimeout(timer);
    }
    timer = setTimeout(function() {
        console.log('resized');
		
        /*
        var recoH = $('.recoTop').width();
        $('.recoTop').css('height', recoH);
        */
		
		var itemH = $('.itemimg').width();
		$('.itemimg').css('height', itemH);
        $('.itemimg a').css('height', itemH);
		$('.itemimg a span').css('height', itemH);
        
		var itemH2 = $('.itemimg2').width();
		$('.itemimg2').css('height', itemH2);
        $('.itemimg2 a').css('height', itemH2);
		$('.itemimg2 a span').css('height', itemH2);
        
        $('.each_topic').css('height', itemH);
        $('.soldout').css({
            width: itemH,
            height: itemH
        });
		
		var listbH = $('.listbox').width();
		$('.listbox').css('height', listbH);
		$('.listbox a').css('height', listbH);
		$('.listbox a span').css('height', listbH);
        
        var listbH = $('.thumimg').width();
        $('.thumimg').css('height', listbH);
        
    }, 200);
});

//PCメニュー　max-width: 991px
$(function(){
    var $this = $('.mddWrap');
    $this.css({
        display: 'none',
        height: '0',
        opacity: '0'
    });
    
    $('#brands').on('click',function(e){
        e.preventDefault();
        e.stopPropagation();
        if($this.hasClass('dwn')){
            $this.css({
                display: 'none',
                height: '0',
                opacity: '0'
            }).removeClass('dwn');
            $('html').off('click', dwnItems);
        } else {
            $this.animate({
                height: '50px',
                opacity: '1',
            }, 500., 'swing').addClass('dwn').css({
                display: 'block'
            });
            $('html').on('click', dwnItems);
        }
        
        function dwnItems(){
            $this.removeClass('dwn');
			$this.hide();
        }
        
    });
    
});

//スマホメニュー
$(function(){
    $('#smartMenu').on('click', function(event){
        event.preventDefault();
        event.stopPropagation();
        var $this = $(this);
        if($this.hasClass('open')){
            $this.removeClass('open');
            $('.accordion').hide();
            //$('html').off('click', closeItems);
        }else{
            $this.addClass('open');
            $('.accordion').css({
                display: 'block'
            });
            $('.accordion li.i')
            .css( { 
                display: 'none',
                opacity: 0
             } )
            .each( function( i ){
                $(this).delay( 80 * i )
                .css( {
                    display: 'block'
                } )
                .animate( {
                    opacity: 1
                }, 300 );
            });
            //$('html').on('click', closeItems);
        }
        function closeItems(){
            $this.removeClass('open');
			$('.accordion').hide();
        }
    });
    
    $('.accordion').on('click', 'li', function(e){
        //e.preventDefault();
        e.stopPropagation();
        var $this = $(this);
        $this
            .toggleClass('expanded')
            .children('.content')
            .slideToggle('fast')
            .end()
            .siblings()
            .removeClass('expanded')
            .children('.content')
            .slideUp('fast');
    });
    
    $('#topsbtn').on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        var $this = $(this);
        if($this.hasClass('down')){
            $this.removeClass('down');
            $('ul.dwnlist.tops').hide();
        } else {
            $this.addClass('down');
            $('ul.dwnlist.tops').css({
                display: 'block'
            });
            $('ul.dwnlist.tops li')
            .css({
                display: 'none',
                opacity: 0
            })
            .each(function(i){
                $(this).delay(80 * i)
                .css({
                    display: 'block'
                })
                .animate({
                    opacity: 1
                }, 300);
            })
        }
    });
    
    $('#brandsbtn').on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        var $this = $(this);
        if($this.hasClass('down')){
            $this.removeClass('down');
            $('ul.dwnlist.brands').hide();
        } else {
            $this.addClass('down');
            $('ul.dwnlist.brands').css({
                display: 'block'
            });
            $('ul.dwnlist.brands li')
            .css({
                display: 'none',
                opacity: 0
            })
            .each(function(i){
                $(this).delay(80 * i)
                .css({
                    display: 'block'
                })
                .animate({
                    opacity: 1
                }, 300);
            })
        }
    });
});

/*
//.each_fmenu フッターメニュー
$(function(){
    $('.openFmenu').on('click', function(){
        $('.hiddenFmenu').slideToggle(400);
    })
})
*/

//パンくずリスト
$(function(){
    $(window).load(function(){
        $('.breadcrumbs .inner').find("br,small").remove();
    });
});

//footer ロゴ　フェード
/*
$(window).on("scroll", function() {
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    if((scrollHeight - scrollPosition) / scrollHeight === 0){
        $('.footer_txt_logo').animate({
            'opacity': 100
        }, 2500);
        
        $('#sns ul li')
        .each(function(i){
            $(this).delay(150 * i)
            .animate({
                'opacity': 1
            }, 300);
        });
        
        $('header').animate({
            'top': '-90px',
            'opacity': 0
        }, 300);
        
    }else{
        
        $('header').css({
            'top': 0,
            'opacity': 1
        });
        
    }
});
*/

//各ブランド一覧ページ
$(function(){
	var winH = $(window).height();
    $('#brandBio .modal-dialog').css({
        'height': winH
    });
    /*
    var modalH = $('#bioWrap').height();
    $('#bioWrap').css({
        'margin-top': (modalH/2)
    });
    */
});

//商品詳細　タブ切替
$(function(){
    $('.tab-menu').on('click', 'li > a', function(event){
        event.preventDefault();
        var $this = $(this);
        
        $this.parent().siblings()
        .removeClass('selected')
        .end()
        .addClass('selected');
        
        var tabId = $this.data('tabid');
        $this.closest('.tab').find('.tab-contents').children()
        .each(function(){
            var $content = $(this);
            if($content.data('contentid') == tabId){
                $content.removeClass('kakusu');
            }else{
                $content.addClass('kakusu');
            }
        });
        
    });
});

//商品詳細 アコーディオン
$(function(){
    $('.openDetail').on('click', function(){
        $('.hiddenDetail').slideToggle(400);
    });
});

//フッター　ブランドリスト　#brandSelect
/*
var setArea = $('.scrEvent'),//li.each_brandから.scrEventトリ17/11/27メルマガ登録フォーム設置に伴い
    showHeight = 50;

setArea.css({
    display: 'block',
    opacity: 0
});

$(window).on('load scroll resize', function(){
    
    setArea.each(function(){
        var setThis = $(this),
            areaTop = setThis.offset().top;
        
        if($(window).scrollTop() > (areaTop + showHeight) - $(window).height()){
            setThis.stop().animate({
                opacity: '1',
                margin: '0 0 10px'
            }, 200);
        }
    });
    
});
*/

//メルマガ登録フォーム
var setArea = $('#primary'),
    showHeight = 300;

$('#mail_regist').css({
    display: 'block',
    opacity: '0'
});

$(window).on('load scroll resize', function(){
    setArea.each(function(){
        var setThis = $(this),
            areaTop = setThis.offset().top;
        
        if($(window).scrollTop() > (areaTop + showHeight)-$(window).height()){
            $('#mail_regist').stop()
                .animate({opacity: '1'}, 200);
        }else{
            $('#mail_regist').stop().animate({opacity: '0'}, 200);
        }
    });
});

$(function(){
    $(".regist_close").click(function(){
        $("#mail_regist").fadeOut('fast');
        $.cookie("unnecessary",$('body').addClass('unnecessary'),{expries: 10, path: '/'});
    });
});

$(function(){
    if($.cookie("unnecessary")){
        $('#newsLetter').css({display:'none'});
    }
});