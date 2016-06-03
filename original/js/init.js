(function($){skel.breakpoints({xlarge:'(max-width: 1680px)',large:'(max-width: 1280px)',medium:'(max-width: 980px)',small:'(max-width: 736px)',xsmall:'(max-width: 480px)'});$(function(){var $window=$(window),$body=$('body'),$wrapper=$('#page-wrapper'),$banner=$('#banner'),$header=$('#header');$body.addClass('is-loading');$window.on('load',function(){window.setTimeout(function(){$body.removeClass('is-loading');},100);});if(skel.vars.isMobile)$body.addClass('is-mobile');else
skel.on('-medium !medium',function(){$body.removeClass('is-mobile');}).on('+medium',function(){$body.addClass('is-mobile');});$('.scrolly').scrolly({speed:500,offset:$header.outerHeight()});var $menu=$('#menu'),$menuClose=$('<a class="close">').appendTo($menu),$menuToggle=$('.menuToggle');$menu.appendTo($body);$menuClose.on('click touchend',function(event){event.preventDefault();event.stopPropagation();$body.removeClass('is-menu-visible');});$menuToggle.on('click touchend',function(event){event.preventDefault();event.stopPropagation();$body.toggleClass('is-menu-visible');});$wrapper.on('click touchend',function(event){if($body.hasClass('is-menu-visible')){event.preventDefault();event.stopPropagation();$body.removeClass('is-menu-visible');}});if(skel.vars.IEVersion<9)$header.removeClass('alt');if($banner.length>0&&$header.hasClass('alt')){$window.on('resize',function(){$window.trigger('scroll');});$banner.scrollex({bottom:$header.outerHeight()+1,terminate:function(){$header.removeClass('alt');},enter:function(){$header.addClass('alt');},leave:function(){$header.removeClass('alt');}});}});})(jQuery);