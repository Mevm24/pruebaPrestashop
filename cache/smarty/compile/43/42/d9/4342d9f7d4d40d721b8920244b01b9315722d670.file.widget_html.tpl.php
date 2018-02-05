<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 14:54:49
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101035a78b6891d3fe5-39809012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4342d9f7d4d40d721b8920244b01b9315722d670' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1517859998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101035a78b6891d3fe5-39809012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78b6891de575_85602064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78b6891de575_85602064')) {function content_5a78b6891de575_85602064($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
