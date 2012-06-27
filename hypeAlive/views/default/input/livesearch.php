<?php
/**
 * Displays an autocomplete text input.
 *
 * @package Elgg
 * @subpackage Core
 *
 * @todo This currently only works for ONE AUTOCOMPLETE TEXT FIELD on a page.
 *
 * @uses $vars['value']       Current value for the text input
 * @uses $vars['match_on']    Array | str What to match on. all|array(groups|users|friends|subtype)
 * @uses $vars['match_owner'] Bool.  Match only entities that are owned by logged in user.
 * @uses $vars['class']       Additional CSS class
 */

if (isset($vars['class'])) {
    $vars['class'] = "elgg-input-autocomplete {$vars['class']}";
} else {
    $vars['class'] = "elgg-input-autocomplete";
}

$defaults = array(
    'value' => '',
    'disabled' => false,
);

$vars = array_merge($defaults, $vars);

$ac_url_params = http_build_query(array(
    'match_on' => $vars['match_on'],
    'match_owner' => $vars['match_owner'],
        ));

unset($vars['match_on']);
unset($vars['match_owner']);

//elgg_load_js('elgg.autocomplete');
elgg_load_js('hj.livesearch.autocomplete');
?>
<input type="text" <?php echo elgg_format_attributes($vars); ?> />