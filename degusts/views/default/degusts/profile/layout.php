<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



$degust_profile_fields = elgg_get_config('degust');

/*initialisation des options pour les couleurs en fonction du type de vins (blanc, rouge etc..)*/

$container=get_entity($vars['entity']->container_guid);
require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/fiche/{$container->kind}.php");



foreach ($degust_profile_fields as $section => $elts) {
    
     echo elgg_echo("degust:{$section}").'</br>';
  
     foreach($elts as $shortname=>$valtype){
         eval('$options=$options_'.$shortname.';');
         if(isset($options) || $valtype=='text' || $valtype=='longtext' || $shortname=='note'){ 
            echo '<label>';
            echo elgg_echo("degust:{$shortname}").'</br>';
            echo '</label>';
  
            $variables=array(
                        'value'=>$var['entity']->$shortname,
                        );
         
         
            echo elgg_view("output/{$valtype}",$variables).'</br>';
            }
         
        
    }
}
?>


<div class="elgg-foot">
<?php





if (isset($vars['entity'])) {
	$delete_url = 'action/wine/delete?guid=' . $vars['entity']->getGUID();
	echo elgg_view('output/confirmlink', array(
		'text' => elgg_echo('wine:delete'),
		'href' => $delete_url,
		'confirm' => elgg_echo('wine:deletewarning'),
		'class' => 'elgg-button elgg-button-delete float-alt',
	));
}
?>
</div>






