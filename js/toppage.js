// JavaScript Document
$(document).ready(function(){
	var winH = $(window).height();
	var slideH = winH-130;
	
	$( '#slider1' ).sliderPro({
		width: "100%",
		height: slideH,
		slideDistance: 0,
		slideAnimationDuration: 1000,//初期値700
		fade: true,
		fadeDuration: 2500,//初期値500
		autoplayDelay: 5000,//初期値5000
		touchSwipe: true,
		buttons: false
	});
});

$(function(){
	//トップスクロールダウン
	var scrollDown = $('.scrolldown');
	var winH = $(window).height();
	var scrollH = winH-90;
	scrollDown.click(function(){
		$('body,html').animate({
			scrollTop: scrollH
		}, 1000);
		return false;
	});
});

$(function(){
    var topicH = $('.topictopimg').width();
    $('.topictop').css({
       'height': topicH 
    });
    $('.topictopimg').css({
        'height': topicH
    });
});