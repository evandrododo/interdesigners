/*
 * jQuery Reveal Plugin 1.0
 * www.ZURB.com
 * Copyright 2010, ZURB
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
*/
(function(a){a("a[data-reveal-id]").m("click",function(b){b.preventDefault();b=a(this).h("data-reveal-id");a("#"+b).d(a(this).data())});a.j.d=function(b){b=a.extend({},{f:"fadeAndPop",g:300,a:!0,c:"close-reveal-modal"},b);this.i(function(){var c=a(this);c.b("top");c.height();var d=a(".reveal-modal-bg");0==d.length&&(d=a('<div class="reveal-modal-bg" />').k(c));c.e("reveal:open");a("."+b.c);b.a&&d.b({cursor:"pointer"});a("body").l(function(a){27===a.which&&c.e("reveal:close")})})}})(jQuery);