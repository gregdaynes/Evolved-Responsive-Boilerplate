<?php // No direct access.
defined('_JEXEC') or die;

/**
 * Example
 * /
function modChrome_navBarMenu($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<?php if ($module->showtitle) : ?>
			<h3><?php echo $module->title; ?></h3>
		<?php endif; ?>
		<?php echo $module->content; ?>
	<?php endif;
}
/**/

function modChrome_navBarMenu($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<ul class="nav <?php echo $module->content; ?>
		
		
	<?php endif;
}

function modChrome_stackedPills($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<?php if ($module->showtitle) : ?>
			<h3><?php echo $module->title; ?></h3>
		<?php endif; ?>
		<ul class="nav nav-pills nav-stacked <?php echo $module->content; ?>
		
	<?php endif;
}