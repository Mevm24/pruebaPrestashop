<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 09:04:46
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\leocustomajax\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230265a7b077e54dd31-66050794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1550270c772ff57295454c38509a47f9e2c6d4d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\leocustomajax\\footer.tpl',
      1 => 1517862357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230265a7b077e54dd31-66050794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leo_customajax_pn' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_count' => 0,
    'leo_customajax_acolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7b077e586696_11704638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b077e586696_11704638')) {function content_5a7b077e586696_11704638($_smarty_tpl) {?><script type="text/javascript">
	var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_pn']->value;?>
<?php } else { ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_img']->value;?>
<?php } else { ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_tran']->value;?>
<?php } else { ?>0<?php }?>,
		productCdown: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_count']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_count']->value;?>
<?php } else { ?>0<?php }?>,
		productColor: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_acolor']->value;?>
<?php } else { ?>0<?php }?>,
	}
    $(document).ready(function(){	
		var leoCustomAjax = new $.LeoCustomAjax();
        leoCustomAjax.processAjax();
    });
</script><?php }} ?>
