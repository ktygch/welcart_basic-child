// JavaScript Document
$('head').append(
	'<style type="text/css">.loader, #wrapper { display: none; } .loader, #wrapper{ display: block; }</style>'
);

jQuery.event.add(window,'load',function() { // 全ての読み込み完了後に呼ばれる関数
	$('.loader').delay(600).fadeOut(1400).css('display','block');
	$('#wrapper').fadeIn(2800).css('display', 'block');
});