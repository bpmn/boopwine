<?php
/**
 * Elgg sidebar contents
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */

echo elgg_view_menu('extras', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

// groups and other users get owner block
$owner = elgg_get_page_owner_entity();

if ($owner instanceof ElggGroup)
	 echo elgg_view_entity_icon($owner,'large');


?>



     <ul id="tabb">
		<li><a href="#">Visuel</a></li>
		<li><a href="#">Olfactif</a></li>
		<li><a href="#">Gustatif</a></li>
	</ul>
     <div class="panes">
        <div id="tabbs-1">
		<p>Proin elit arcu, rutrum commodo, .</p>
	</div>
	<div id="tabbs-2">
		<p>Morbi tincidunt, dui sit </p>
	</div>
	<div id="tabbs-3">
		<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
		<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
	</div>
     </div>

            
	




<?php
    
    //echo elgg_view('page/elements/owner_block', $vars);

//echo elgg_view_menu('page', array('sort_by' => 'name'));

// optional 'sidebar' parameter
//if (isset($vars['sidebar'])) {
	//echo $vars['sidebar'];
//}?>


