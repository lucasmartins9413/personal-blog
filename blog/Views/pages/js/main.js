$(document).ready(function() {
	"use strict";

	var $header = $(".header-default"),
	$clone = $header.before($header.clone().addClass("clone"));
	$(window).on("scroll",function(){
		var fromtTop = $(window).scrollTop();
		$('body').toggleClass("down",(fromTop > 300));
	});
});

$(function(){
	"use strict";

	$('.sidebar').stickySidebar({
		topSpacing : 60,
		bottomSpacing : 30,
		containerSelector : '.main-content',
	});

	$("submenu").before('<i class="icon-arrow-down switch"></i>');
	$(".vertical-menu li i.switch").on('click',function(){
		var $submenu = $(this).next(".submenu");
		$submenu.slideToggle(300);
		$submenu.parent()toggleClass("openmenu")
	})

	$("button.burger-menu").on('click', function(){
		$(".canvas-menu").toggleClass("open");
		$(".main-overlay").toggleClass("active");
	});

	$(".canvas-menu btn-close, .main-content").on('click', function(){
		$(".canvas-menu").removeClass("open");
		$(".main-overlay").removeClass("active");
	});



});