<?php
/**
 * Extend the main elgg.js script for tooltips initialization
 */
?>

elgg.provide('elgg.overlay');

elgg.overlay.init = function() {
	
      

    
     
 
    // if the function argument is given to overlay,
    // it is assumed to be the onBeforeLoad event listener
    $("a.elgg-overlay").overlay({
 
         mask: {
            color: '#ebecff',
           // loadSpeed: 200,
            opacity: 0.9
        },
        effect: 'apple',
        top:'2%',
 
        onBeforeLoad: function() {
 
            // grab wrapper element inside content
            var wrap = this.getOverlay().find(".contentWrap");
 
            // load the page specified in the trigger
            wrap.load(this.getTrigger().attr("href"));
            $( "#tabb" ).tabs("div.panes > div");
        }
 
    });
//});
}

elgg.register_hook_handler('init', 'system', elgg.overlay.init);
