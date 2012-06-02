<?php 
/**
 * Wine entity view
 * 
 * @package ElggWine
 */

$wine = $vars['entity'];

$icon = elgg_view_entity_icon($wine, 'small');

$metadata = elgg_view_menu('entity', array(
	'entity' => $wine,
	'handler' => 'wine',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

if (elgg_in_context('owner_block') || elgg_in_context('widgets')) {
	$metadata = '';
}


if ($vars['full_view']) {
	echo elgg_view("wines/profile/profile_block", $vars);
} else {
	// brief view

	$params = array(
		'entity' => $wine,
		'metadata' => $metadata,
		'subtitle' => $wine->briefdescription,
	);
	$params = $params + $vars;
	$list_body = elgg_view('group/elements/summary', $params);

	echo elgg_view_image_block($icon, $list_body, $vars);
}
