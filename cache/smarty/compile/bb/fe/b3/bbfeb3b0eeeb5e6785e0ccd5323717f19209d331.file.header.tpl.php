<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 15:36:56
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\paypal\\views\templates\admin\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215285a78c068e06571-37306950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbfeb3b0eeeb5e6785e0ccd5323717f19209d331' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\paypal\\\\views\\templates\\admin\\header.tpl',
      1 => 1517863006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215285a78c068e06571-37306950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_PPP' => 0,
    'PayPal_PVZ' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78c068e3d302_43149134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78c068e3d302_43149134')) {function content_5a78c068e3d302_43149134($_smarty_tpl) {?>

<script type="text/javascript">
	var PayPal_WPS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_WPS']->value);?>
';
	var PayPal_HSS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_HSS']->value);?>
';
	var PayPal_ECS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_ECS']->value);?>
';
	var PayPal_PPP = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_PPP']->value);?>
';
	var PayPal_PVZ = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_PVZ']->value);?>
';
</script>

<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/views/js/back_office.js"></script><?php }} ?>
