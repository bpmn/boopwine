/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */





elgg.provide('elgg.overlay');

elgg.overlay.init = function() {
    
 
     $(function() {
	$("a[rel*=overlay]").nyroModal();
	});

   
}

elgg.register_hook_handler('init', 'system', elgg.overlay.init);

