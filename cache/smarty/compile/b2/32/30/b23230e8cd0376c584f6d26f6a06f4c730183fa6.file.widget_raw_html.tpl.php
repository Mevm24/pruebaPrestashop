<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 14:54:50
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\leomanagewidgets\views\widgets\widget_raw_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162325a78b68a92f691-40653467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b23230e8cd0376c584f6d26f6a06f4c730183fa6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\leomanagewidgets\\views\\widgets\\widget_raw_html.tpl',
      1 => 1517859998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162325a78b68a92f691-40653467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'raw_html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78b68a93b7f4_92753489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78b68a93b7f4_92753489')) {function content_5a78b68a93b7f4_92753489($_smarty_tpl) {?> <?php if (isset($_smarty_tpl->tpl_vars['raw_html']->value)) {?>
<div class="widget-raw-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['raw_html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
