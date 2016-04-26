$(document).ready(function() {

console.log("INTERDESIGNERS!");

var scrollTime = 1000;

function cellSize() {
	$(".content td .cell").css( "min-width" , $(document).width() );
};
cellSize();

function aplicaScroll() {
	console.log('scroll aplicado!')
	$("html, body, .content-container").mousewheel(function(event, delta) {
		this.scrollLeft -= (delta * 30);
		event.preventDefault();
	});
}

function formResize() {
	$(".form").css( "height" , $(window).height() - $(".form").offset().top - 150);
	$(window).resize(function() {
		$(".form").css( "height" , $(window).height() - $(".form").offset().top - 90);
	});
};

function entra(e){
	e.stopPropagation();
	
	$('body').addClass('loading');
	$('.index-container').load('home.html #grid-bg',function(){
		cellSize();
		$('#enter').hide();
		$('body').removeClass('loading');
		init();
		aplicaScroll();
	});
}

function removeOla() {
	$('.home-lettering').remove();
	$('body').unbind('click', removeOla); 
}

function init() {
	console.log('init!');
	
	$('#nav > ul > li').click(function(e){
		var url = $(this).attr('id') + '.html',
			liActive = $(this);
			
		e.stopPropagation();
		
		$('body').addClass('loading');
		
		$(".content-container").load( url + " .content-container", function(){
			cellSize();
			aplicaScroll();
			
			if (url === 'inscricoes.html') {
				$('form[name=formapoio]').submit(function () {
					submitapoio();
					return false;
				});
				$('form[name=formoficina]').submit(function () {
					submitOficina();
					return false;
				});
				formResize();
			}
			$(liActive).siblings().removeClass('active');
			$(liActive).addClass('active');
			$('.content-container').scrollTo('1px' , 0);
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
		
		$('.index-container').load('index.html #enter', function(){
			$('#enter a').click( function(event) {
				entra(event);
			});
		});
	});
};

$('body, html, *').bind('click', removeOla);

$(window).resize(function() {
	cellSize();
});

$('#enter a').click( function(event) {
	entra(event);
});

});