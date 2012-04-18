// JavaScript Document
//Script disabled or enabled
$(document).ready(function(){
    $('.no-script').hide();
    $('.script').show();
});
$('document').ready(function(){
	//Color box
	$(".screenshot").colorbox();
	//Hover Fading
	$('.screenshot,.social').children('li').hover(function(){
		$(this).stop(true, true).animate({opacity: 0.6}, {duration: 300});
	},function(){
		$(this).stop(true, true).animate({opacity: 1}, {duration: 300});
	});
	
	$('.input-active').focus(function(){
		var value = $.trim($(this).val()),
		title = $(this).attr('title');
		if(value == title){
			$(this).val('');
		}
	});$('.input-active').blur(function(){
		var value = $.trim($(this).val()),
		title = $(this).attr('title');
		if(value == ''){
			$(this).val(title);
		}
	});
});
