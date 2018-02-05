<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 14:54:47
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\leobootstrapmenu\views\widgets\widget_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31075a78b687b3c8a6-84144967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f8fc804aa60e6aa46ba7968c999237f6f566e9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\leobootstrapmenu\\views\\widgets\\widget_video.tpl',
      1 => 1517859997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31075a78b687b3c8a6-84144967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video_code' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78b687b47224_35868812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78b687b47224_35868812')) {function content_5a78b687b47224_35868812($_smarty_tpl) {?> <?php if (isset($_smarty_tpl->tpl_vars['video_code']->value)) {?>
<div class="widget-video">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['video_code']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
