<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 15:53:56
         compiled from "C:\xampp\htdocs\prestashop_pruebas\themes\leo_exist\layout\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110635a7b6764020178-14018060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddc4ee8b9049b3f6e0c180c382a489af60068c1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\layout\\default\\header.tpl',
      1 => 1517862359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110635a7b6764020178-14018060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
    'cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7b6764039753_00227595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b6764039753_00227595')) {function content_5a7b6764039753_00227595($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
<!-- Left -->
<section id="left_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
" role="navigation">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

</section>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)) {?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable((12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value), null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12, null, 0);?><?php }?>
<!-- Center -->
<section id="center_column" class="col-md-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
">
<?php }} ?>
