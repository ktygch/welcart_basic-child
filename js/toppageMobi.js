// JavaScript Document
$(document).ready(function(){
	var winH = $(window).height();
	var slideH = winH-70;
	
	$( '#slider1' ).sliderPro({
		width: "100%",
		height: slideH,
		slideDistance: 0,
		slideAnimationDuration: 500,//初期値700
		fade: true,
		fadeDuration: 2500,//初期値500
		autoplayDelay: 10000,//初期値5000
		touchSwipe: true,
		buttons: false
	});
    
});

$(function(){
	//トップスクロールダウン
	var scrollDown = $('.scrolldown');
	var winH = $(window).height();
	var scrollH = winH-25;
	scrollDown.click(function(){
		$('body,html').animate({
			scrollTop: scrollH
		}, 1000);
		return false;
	});
})

$(function(){
    var topicH = $('.topictopimg').width();
    $('.topictop').css({
       'height': topicH 
    });
    $('.topictopimg').css({
        'height': topicH
    });
});

$(document).ready(function() {
	var userFeed = new Instafeed({
		get: 'user', //ユーザーから取得
		userId: '4142717357', //ユーザーID(数字のみのもの)
		sortBy:'random', //新→古
		links: true , //画像リンク取得
		limit: 4, //取得する画像数を設定
		resolution: 'standard_resolution', //画像サイズを設定
		template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}" target="_blank"></a></li>',
		accessToken: '4142717357.233bde8.f2c4875b7c92416d94d3c0d8d5d984c6' //アクセストークン
	});
	userFeed.run();
});