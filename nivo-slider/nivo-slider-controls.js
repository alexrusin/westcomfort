(function($) {
	$(window).load(function() {
		$('#slider').nivoSlider({
			effect: 'random',          // Specify sets like: 'fold,fade,sliceDown' 
			slices: 15,                       // For slice animations 
			boxCols: 8,                       // For box animations 
			boxRows: 4,                       // For box animations 
			animSpeed: 500,                   // Slide transition speed 
			pauseTime: 3000,
			controlNavThumbs: true				// Use thumbnails for Control Nav 
			//startSlide: 0,                    // Set starting Slide (0 index) 
			//directionNav: true,               // Next & Prev navigation 
//			controlNav: true,                 // 1,2,3... navigation     
//			pauseOnHover: true,               // Stop animation while hovering 
//			manualAdvance: false,             // Force manual transitions 
//			prevText: 'Prev',                 // Prev directionNav text 
//			nextText: 'Next',                 // Next directionNav text 
//			randomStart: false,               // Start on a random slide 
//			beforeChange: function(){},       // Triggers before a slide transition 
//			afterChange: function(){},        // Triggers after a slide transition 
//			slideshowEnd: function(){},       // Triggers after all slides have been shown 
//			lastSlide: function(){},          // Triggers when last slide is shown 
//			afterLoad: function(){}           // Triggers when slider has loaded 
		});
	});
} )( jQuery );