<?php /* Smarty version Smarty-3.1.19, created on 2018-02-06 08:59:07
         compiled from "C:\xampp\htdocs\prestashop_pruebas\themes\leo_exist\modules\blockviewed\blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314315a79b4abd290b3-47649530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d4a27f5129c7a961b23ae353bc7cbcd23602203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\blockviewed\\blockviewed.tpl',
      1 => 1517862360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314315a79b4abd290b3-47649530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a79b4abd66dd0_05185255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79b4abd66dd0_05185255')) {function content_5a79b4abd66dd0_05185255($_smarty_tpl) {?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar-obj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['productsViewedObj']->value,'mod'=>'blockspecials'), 0);?>
 
	</div>
</div>
<?php }} ?>
