/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

elgg.provide('elgg.degust');


elgg.degust.init = function() {
	// only apply this to acronym tags
	
        $( "#tabb" ).tabs();
}

elgg.register_hook_handler('init', 'system', elgg.degust.init);


//elgg.register_hook_handler('init', 'system', function() {
  //  $( "#tabb" ).tabs();
    
//});
