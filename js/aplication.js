$(document).ready(function(){	
		$('a[rel*=lightbox]').lightBox();
		
		$("#slider").easySlider({
			auto: true, 
			continuous: true,
			numeric: true, 
			speed: 	1400,
			pause:	3000,
		});
		
		
		$('ul.subSvatbi').hide();
		$("ul#navi li.svatbi").hover(function(){
			$('ul.subSvatbi').stop(true, true).slideToggle('slow', function() {
			
			});
		});
		
		$('ul.subKrashteneta').hide();
		$("ul#navi li.krashteneta").hover(function(){
			$('ul.subKrashteneta').stop(true, true).slideToggle('slow', function() {
			
			});
		});
});	

Cufon.replace('#contentMain h2', { textShadow: '#aaaaaa 1px 1px', fontFamily: 'navi' });
Cufon.replace('ul#navi li a.cReplace', {hover: true, fontFamily: 'navi'});
