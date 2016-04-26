$(document).ready(function() {

console.log("INTERDESIGNERS!");

var scrollTime = 1000;

function cellSize() {
	$(".content td .cell").css( "min-width" , $(document).width() );
};
cellSize();

function init() {
	$(function() {
		$("html, body, *").not(".lectures div").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 30);
			event.preventDefault();
		});
	});
	
	$('#nav > ul > li').click(function(){
		var url = $(this).attr('id') + '.html',
			liActive = $(this);
		
		$('body').addClass('loading');
		
		$(".content-container").load( url + " .content-container", function(){
			cellSize();
			$(liActive).siblings().removeClass('active');
			$(liActive).addClass('active');
			$('.content-container').scrollTo('0px' , 0);
			$('.mark').removeClass('active');
			$(liActive).find('.mark').first().addClass('active');
			$('body').removeClass('loading');
		});
	});
	
	$("#nav li li a").click(function(e){
		var target = $(this).attr('class');
		
		e.stopPropagation();
		
		$('.mark').removeClass('active');
		
		$(this).parent().find('.mark').addClass('active');
		$('.content-container').scrollTo('td.'+target , scrollTime);
	});
	
	$('#close').click(function(e){
		e.stopPropagation();
		
		$('#grid-bg').remove();
		$('body').load('index.html #enter');
	});
};

$(window).resize(function() {
	cellSize();
});

$('#enter a').click(function(e){
	e.stopPropagation();
	
	$('body').addClass('loading');
	$('body').load('home.html #grid-bg',function(){
		init();
		cellSize();
		$('#enter').hide();
		$('body').removeClass('loading');
	});
});

});