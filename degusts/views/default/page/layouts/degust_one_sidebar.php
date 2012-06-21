<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is displayed in the sidebar
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['class']   Additional class to apply to layout
 * @uses $vars['nav']     HTML of the page nav (override) (default: breadcrumbs)
 */

$class = 'elgg-layout degust-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

// navigation defaults to breadcrumbs
$nav = elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));

?>

<div class="<?php echo $class; ?>">
	<div class="degust-sidebar">
		<?php
			echo elgg_view('page/elements/degust_sidebar', $vars);
		?>
            
</div>

	<div class="degust-main ">
          
           	<?php
			//echo $nav;
			
			if (isset($vars['title'])) {
				echo elgg_view_title($vars['title']);
			}
			
			if (isset($vars['content'])) {
				echo $vars['content'];
			}
		?>
	</div>
</div>


