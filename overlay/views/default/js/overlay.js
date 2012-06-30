/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */




elgg.provide('elgg.overlay');

elgg.overlay.init = function() {
    
 
     $(function() {
	$(".elgg-overlay").nyroModal({
            
    callbacks: {
        
        initElts: function() {
            $(".elgg-page-topbar").css({"z-index":" 0"});
            $(".elgg-menu-site").css({"z-index":" 0"});         
        },
        
        afterClose: function() {
            $(".elgg-page-topbar").css({"z-index":" 9000"});
            $(".elgg-menu-site").css({"z-index":" 1"});
        }
    }
}
    


);
	});
    
    
    
  //   $(function() {
//	$(".elgg-overlay").nyroModal();
//	});
   
}

elgg.register_hook_handler('init', 'system', elgg.overlay.init);

