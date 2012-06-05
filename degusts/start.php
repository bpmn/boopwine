<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

elgg_register_event_handler('init', 'system', 'degust_init');

// Ensure this runs after other plugins
elgg_register_event_handler('init', 'system', 'degust_fields_setup', 10000);

function degust_init(){
    
    	elgg_register_library('degust', elgg_get_plugins_path() . 'degusts/lib/degust.php');

	// register wine entities for search
	elgg_register_entity_type('object','degust');
        add_subtype('object', 'degust', 'ElggDegust');
        
        // Register a page handler, so we can have nice URLs
	elgg_register_page_handler('degust', 'degust_page_handler');

        //extend some views
	elgg_extend_view('css/elgg', 'degusts/css');
        
	//elgg_register_js('elgg.degust', 'js/degusts/degust.js', 'footer');
        $url = 'mod/degusts/views/default/js/degusts/degust.js';
	elgg_register_js('elgg.degust', $url, 'footer');
	elgg_load_js('elgg.degust');
        //elgg_extend_view('js/elgg', 'degusts/js');
};

/**
 * This function loads a set of default fields into the profile, then triggers
 * a hook letting other plugins to edit add and delete fields.
 *
 * Note: This is a system:init event triggered function and is run at a super
 * low priority to guarantee that it is called after all other plugins have
 * initialized.
 */
function degust_fields_setup() {

	$profile_defaults = array(
		
            
 // MetaData
 // Visuel
             'visuel'=>array(  
                    'couleur_intensity'=>'coloradio',             
                    'couleur'=>'coloradio',
                    'reflet'=>'coloradio',
                    'mousse'=>'coloradio',
                    'nez_bulle'=>'coloradio'),
             
 //Olfactif
             'olfactif'=>array(
                    'nez_intensity'=>'coloradio',
                    'nez'=>'noseboxes',    // résultat des checkboxes sous forme de tableau
                    'arome'=>'text'),        // description texte des arôme
                    //'complexity'=>'text'),   // en fonction du nombres de checkbox cochées.
 //Gustatif
             'gustatif'=> array(
                    'rondeur'=>'paletradio',
                    'palet_bulle'=>'paletradio',
                    'acidity'=>'paletradio',
                    'dosage'=>'paletradio',
                    'alcool'=>'paletradio',
                    'tanin'=>'paletradio',
                    'moelleux'=>'paletradio',
                    'retro'=>'text',
                    'longueur'=>'paletradio'),
 
 //Commentaire final
              'comment'=>array(
                    'evolution'=>'paletradio',
                    'comment'=>'longtext',   //commentaire finale
                    'accord'=>'text',        //proposition accord mets vins
                    'note'=>'notedropdown' )      //note sur 20.        
            
	);

	$profile_defaults = elgg_trigger_plugin_hook('profile:fields', 'object', NULL, $profile_defaults);

	elgg_set_config('degust', $profile_defaults);

	
}

/**
 * Degust page handler
 *
 * URLs take the form of
 *  All wine:           degust/all
 *  User's owned wine:  degust/owner/<username>
 *  User's member wine: degust/member/<username>
 *  wine profile:        degust/profile/<guid>/<title>
 *  New wine:            degust/add/<guid>
 *  Edit wine:           degust/edit/<guid>
 *  wine invitations:    degust/invitations/<username>
 *  Invite to wine:      degust/invite/<guid>
 *  Membership requests:  degust/requests/<guid>
 *  wine activity:       degust/activity/<guid>
 *  wine members:        degust/members/<guid>
 *
 * @param array $page Array of url segments for routing
 * @return bool
 */
function degust_page_handler($page) {

	elgg_load_library('degust');

	elgg_push_breadcrumb(elgg_echo('degust'), "degust/all");

	switch ($page[0]) {
	
		case 'add':
                        set_input('entity_guid',$page[1]);
			degust_handle_edit_page('add');
			break;
		case 'edit':
                        set_input('entity_guid',$page[1]);
			degust_handle_edit_page('edit');
			break;
		case 'profile':
			degust_handle_profile_page($page[1]);
			break;

		default:
			return false;
	}
	return true;
}

?>
