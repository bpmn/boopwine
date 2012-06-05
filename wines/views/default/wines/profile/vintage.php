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


?>





            

