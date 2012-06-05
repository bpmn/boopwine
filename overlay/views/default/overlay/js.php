<?php
/**
 * Extend the main elgg.js script for tooltips initialization
 */
?>

elgg.provide('elgg.overlay');

elgg.overlay.init = function() {
	      
    $("a[rel*=overlay]").nyroModal();
       
   
}



elgg.register_hook_handler('init', 'system', elgg.overlay.init);
