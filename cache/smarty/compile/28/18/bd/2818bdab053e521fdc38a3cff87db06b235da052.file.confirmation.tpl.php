<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 16:05:15
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\paypal\views\templates\hook\confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198725a78c70baaaf67-61107592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2818bdab053e521fdc38a3cff87db06b235da052' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\paypal\\views\\templates\\hook\\confirmation.tpl',
      1 => 1517863006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198725a78c70baaaf67-61107592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78c70bb71e53_42333966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78c70bb71e53_42333966')) {function content_5a78c70bb71e53_42333966($_smarty_tpl) {?>

<p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="paypal-bold"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'paypal'),$_smarty_tpl);?>

	<br /><br />
	<?php echo smartyTranslate(array('s'=>'You have chosen the PayPal method.','mod'=>'paypal'),$_smarty_tpl);?>

	<br /><br /><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent very soon.','mod'=>'paypal'),$_smarty_tpl);?>
</span>
	<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'paypal'),$_smarty_tpl);?>

	<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-ajax="false" target="_blank"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'paypal'),$_smarty_tpl);?>
</a>.
</p>
<?php }} ?>
