(function($) {
	$(document).ready(function() {
        $('.jcarousel').jcarousel();
        $('.jcarousel').jcarouselAutoscroll({
            target: '+=1'
        });
	});    
})(jQuery);