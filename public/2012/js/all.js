/*! Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.0.6
 * 
 * Requires: 1.2.2+
 */
(function(a){function d(b){var c=b||window.event,d=[].slice.call(arguments,1),e=0,f=!0,g=0,h=0;return b=a.event.fix(c),b.type="mousewheel",c.wheelDelta&&(e=c.wheelDelta/120),c.detail&&(e=-c.detail/3),h=e,c.axis!==undefined&&c.axis===c.HORIZONTAL_AXIS&&(h=0,g=-1*e),c.wheelDeltaY!==undefined&&(h=c.wheelDeltaY/120),c.wheelDeltaX!==undefined&&(g=-1*c.wheelDeltaX/120),d.unshift(b,e,g,h),(a.event.dispatch||a.event.handle).apply(this,d)}var b=["DOMMouseScroll","mousewheel"];if(a.event.fixHooks)for(var c=b.length;c;)a.event.fixHooks[b[--c]]=a.event.mouseHooks;a.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var a=b.length;a;)this.addEventListener(b[--a],d,!1);else this.onmousewheel=d},teardown:function(){if(this.removeEventListener)for(var a=b.length;a;)this.removeEventListener(b[--a],d,!1);else this.onmousewheel=null}},a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})})(jQuery)
/**
 * Copyright (c) 2007-2012 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * @author Ariel Flesler
 * @version 1.4.3
 */
;(function($){var h=$.scrollTo=function(a,b,c){$(window).scrollTo(a,b,c)};h.defaults={axis:'xy',duration:parseFloat($.fn.jquery)>=1.3?0:1,limit:true};h.window=function(a){return $(window)._scrollable()};$.fn._scrollable=function(){return this.map(function(){var a=this,isWin=!a.nodeName||$.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!isWin)return a;var b=(a.contentWindow||a).document||a.ownerDocument||a;return/webkit/i.test(navigator.userAgent)||b.compatMode=='BackCompat'?b.body:b.documentElement})};$.fn.scrollTo=function(e,f,g){if(typeof f=='object'){g=f;f=0}if(typeof g=='function')g={onAfter:g};if(e=='max')e=9e9;g=$.extend({},h.defaults,g);f=f||g.duration;g.queue=g.queue&&g.axis.length>1;if(g.queue)f/=2;g.offset=both(g.offset);g.over=both(g.over);return this._scrollable().each(function(){if(!e)return;var d=this,$elem=$(d),targ=e,toff,attr={},win=$elem.is('html,body');switch(typeof targ){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(targ)){targ=both(targ);break}targ=$(targ,this);if(!targ.length)return;case'object':if(targ.is||targ.style)toff=(targ=$(targ)).offset()}$.each(g.axis.split(''),function(i,a){var b=a=='x'?'Left':'Top',pos=b.toLowerCase(),key='scroll'+b,old=d[key],max=h.max(d,a);if(toff){attr[key]=toff[pos]+(win?0:old-$elem.offset()[pos]);if(g.margin){attr[key]-=parseInt(targ.css('margin'+b))||0;attr[key]-=parseInt(targ.css('border'+b+'Width'))||0}attr[key]+=g.offset[pos]||0;if(g.over[pos])attr[key]+=targ[a=='x'?'width':'height']()*g.over[pos]}else{var c=targ[pos];attr[key]=c.slice&&c.slice(-1)=='%'?parseFloat(c)/100*max:c}if(g.limit&&/^\d+$/.test(attr[key]))attr[key]=attr[key]<=0?0:Math.min(attr[key],max);if(!i&&g.queue){if(old!=attr[key])animate(g.onAfterFirst);delete attr[key]}});animate(g.onAfter);function animate(a){$elem.animate(attr,f,g.easing,a&&function(){a.call(this,e,g)})}}).end()};h.max=function(a,b){var c=b=='x'?'Width':'Height',scroll='scroll'+c;if(!$(a).is('html,body'))return a[scroll]-$(a)[c.toLowerCase()]();var d='client'+c,html=a.ownerDocument.documentElement,body=a.ownerDocument.body;return Math.max(html[scroll],body[scroll])-Math.min(html[d],body[d])};function both(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);

$(document).ready(function() {

console.log("INTERDESIGNERS!");

$('#teste').load( function(){
	$('#preframe').remove();
	$('iframe.carregando').removeClass('carregando');
});

var scrollTime = 1000;

function cellSize() {
	$(".content td .cell").css( "min-width" , $(document).width() );
};
cellSize();

function aplicaScroll() {
	$("html, body, .content-container").mousewheel(function(event, delta) {
		this.scrollLeft -= (delta * 30);
		event.preventDefault();
	});
}

function formResize() {
	$(".form").css( "height" , $(window).height() - $(".form").offset().top - 90);
	$(window).resize(function() {
		$(".form").css( "height" , $(window).height() - $(".form").offset().top - 90);
	});
};

function listResize() {
	$(".list").css( "height" , $(window).height() - $(".list").offset().top - 90);
	$(window).resize(function() {
		$(".list").css( "height" , $(window).height() - $(".list").offset().top - 90);
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
	setTimeout(function(){
		$('#aviso em').text('Falou!')
		$('#aviso').addClass('hide');
	},10000)
}

function init() {
	
	$('#nav > ul > li').click(function(e){
		var url = $(this).attr('id') + '.html',
			liActive = $(this);
			
		e.stopPropagation();
		
		$('body').addClass('loading');
		
		$(".content-container").load( url + " .content-container", function(){
			if (url === 'programacao.html') {
				$('.c-dias a').click(function(){
					var escolhido = $(this).attr('class');
					$(this).parent().siblings().removeClass('active');
					$(this).parent().addClass('active');
					$('.cronograma-container .atividades').addClass('hide');
					$('.cronograma-container .atividades.'+escolhido).removeClass('hide');
				});
				$(".cronograma-container").hover(
					function () {
						$("html, body, .content-container").unbind('mousewheel');
						$(".cronograma-container").mousewheel(function(event, delta) {
							this.scrollLeft -= (delta * 30);
							event.preventDefault();
						});
					}, 
					function () {
						$("html, body, .content-container").mousewheel(function(event, delta) {
							this.scrollLeft -= (delta * 30);
							event.preventDefault();
						});
						$(".cronograma-container").unbind('mousewheel');
					}
				);
				$('#pg-programacao ul li').click( function(){
					var $this = $(this);
					$this.addClass('opened');
					$this.siblings().removeClass('opened');
					
					setTimeout(function(){
						$this.closest('.list').scrollTo( $this, scrollTime);
					},500);
				});
				
				$(".list").hover(
					function () {
						$("html, body, .content-container").unbind('mousewheel');
					}, 
					function () {
						$("html, body, .content-container").mousewheel(function(event, delta) {
							this.scrollLeft -= (delta * 30);
							event.preventDefault();
						});
					}
				);
				
				listResize();
			}
			
			cellSize();
			aplicaScroll();
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
			$('#aviso').addClass('hide');
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