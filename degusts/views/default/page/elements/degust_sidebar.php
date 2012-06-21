<?php
/**
 * Elgg sidebar contents
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */


// groups and other users get owner block
$owner = elgg_get_page_owner_entity();
if ($owner instanceof ElggObject)
    $owner=get_entity($owner->getContainerGUID());

echo '<div class="degust-side-head">';

	 echo elgg_view_entity_icon($owner,'medium');
         echo "$owner->name <br/>";
         echo "$owner->cuvee <br/>";
         
         if ($owner->vintage=='v'){
            $annee=get_input('annee');
            echo $annee;
         }else {
            echo elgg_echo('wine:nv');
         }
         
     
echo '</div>';

// optional 'sidebar' parameter
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}

?>


            
	




<?php
    
    //echo elgg_view('page/elements/owner_block', $vars);

//echo elgg_view_menu('page', array('sort_by' => 'name'));

// optional 'sidebar' parameter
//if (isset($vars['sidebar'])) {
	//echo $vars['sidebar'];
//}?>


