<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 15:55:27
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\paypal\views\templates\hook\column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205195a7b67bfba1a24-63690201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4f1cde805c9b2c9548d2797054d5d95a9c5fe5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\paypal\\views\\templates\\hook\\column.tpl',
      1 => 1518014964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205195a7b67bfba1a24-63690201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7b67bfbd84b3_42904294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b67bfbd84b3_42904294')) {function content_5a7b67bfbd84b3_42904294($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>
