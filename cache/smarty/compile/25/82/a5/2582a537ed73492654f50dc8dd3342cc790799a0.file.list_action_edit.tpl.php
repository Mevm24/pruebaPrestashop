<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 14:32:48
         compiled from "C:\xampp\htdocs\prestashop_pruebas\admin455dhvxiw\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232325a78b160aba9c8-83357363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2582a537ed73492654f50dc8dd3342cc790799a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\admin455dhvxiw\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232325a78b160aba9c8-83357363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78b160ac5127_78394107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78b160ac5127_78394107')) {function content_5a78b160ac5127_78394107($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
