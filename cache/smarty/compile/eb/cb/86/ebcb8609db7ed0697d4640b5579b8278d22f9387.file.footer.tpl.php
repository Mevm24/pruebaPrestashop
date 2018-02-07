<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 09:04:47
         compiled from "C:\xampp\htdocs\prestashop_pruebas\themes\leo_exist\layout\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143875a7b077f416642-99571651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebcb8609db7ed0697d4640b5579b8278d22f9387' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\layout\\default\\footer.tpl',
      1 => 1517862359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143875a7b077f416642-99571651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7b077f4248f0_12458180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b077f4248f0_12458180')) {function content_5a7b077f4248f0_12458180($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="no-border clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
