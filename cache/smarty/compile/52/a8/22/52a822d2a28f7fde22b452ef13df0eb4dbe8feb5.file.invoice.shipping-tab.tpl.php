<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 16:05:09
         compiled from "C:\xampp\htdocs\prestashop_pruebas\pdf\\invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169485a78c705e5f4e9-63996690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52a822d2a28f7fde22b452ef13df0eb4dbe8feb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\pdf\\\\invoice.shipping-tab.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169485a78c705e5f4e9-63996690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78c705e64c04_60787527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78c705e64c04_60787527')) {function content_5a78c705e64c04_60787527($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
