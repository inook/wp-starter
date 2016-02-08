// SMOOTHSTATE
// —————————————————————

	var content = $('#main').smoothState({
        
        // SETTINGS
        // ———————

        blacklist: '.no-smoothState',
        prefetch: true,
        cacheLength: 2,
        scroll: false,

        // START
        // ———————
        onStart: {
          duration: 600, // Duration of our animation
          render: function (url, $container) {
          
          	$('#main').addClass('hide');
          
          }
        },

        // READY
        // —————————
        onReady: {
	      duration: 400,
	      render: function ($container, $newContent) {

	        $(window).scrollTop(0);
	        
	        // Inject the new content
        	$container.html($newContent);

        	// Hide loader
        	$('#main').removeClass('hide');

	      }
	    },

	    // AFTER
        // —————————
	    onAfter: function($container, $newContent) {
	    	
	    	// Init js
	    	//$.readyFn.execute();

	    	init();

	    	// Analytics
	 		//if (window.ga) {
	   		//console.log('analytics');
			// 	window.ga('send', 'pageview', window.location.pathname || url);
			// }

		}


      }).data('smoothState');


// END SMOOTHSTATE
// —————————————————————

$( document ).ready(function() {
    init();
});

function init() {
	console.log('ready');
}

	
	








