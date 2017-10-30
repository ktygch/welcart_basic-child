// JavaScript Document
(function(){
    if($(window).width() > 768){
        $(function(){
            var fix = $('.fixedbutton'), //固定したいコンテンツ
            side = $('#side'), //サイドバーのID
            main = $('#itempage'), //固定する要素を収める範囲
            sideTop = side.offset().top;
            fixTop = fix.offset().top,
            mainTop = main.offset().top,
            w = $(window);

            var adjust = function(){
                fixTop = fix.css('position') === 'static' ? sideTop + fix.position().top : fixTop;
                var fixHeight = fix.outerHeight(true),
                mainHeight = main.outerHeight(),
                winTop = w.scrollTop();
                if(winTop + fixHeight > mainTop + mainHeight){
                    fix.css({
                        position: 'absolute',
                        top: mainHeight - fixHeight
                    });
                }else if(winTop >= fixTop){
                    fix.css({
                    position: 'fixed',
                    top: 90
                    });
                }else{
                    fix.css('position', 'static');
                }
            }
            w.on('scroll', adjust);
        });
    };
})(jQuery);