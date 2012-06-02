<?php

/*
 * wine vintages selection
 *
 */


$year=date('Y');
$years=array();
while ($year>1920) {
    
    $years[]=$year--;
   
}
echo elgg_view('input/dropdown', array(
                            'name' => "year",
                            //'value' => $vars['entity']->$shortname,          
                            'options_values' => $years
                            ));


// Morceau de code nécessaire pour le JavaScript Overlay.
?>




<!-- overlayed element -->
<div class="apple_overlay" id="overlay">
<!-- the external content is loaded inside this tag -->
<a class="close"></a>
<div class="contentWrap"></div>
</div> 


            

