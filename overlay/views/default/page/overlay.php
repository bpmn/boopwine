<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title']       The page title
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */


$body = elgg_view('page/elements/body', $vars);
echo $body; 
$js = elgg_get_loaded_js('head');?>

<script type="text/javascript">
	<?php echo elgg_view('js/initialize_elgg'); ?>
</script>

<?php
echo elgg_view('page/elements/foot'); 
?>
	
