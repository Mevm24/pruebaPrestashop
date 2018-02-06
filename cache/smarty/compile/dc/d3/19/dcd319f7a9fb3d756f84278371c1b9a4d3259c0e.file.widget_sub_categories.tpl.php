<?php /* Smarty version Smarty-3.1.19, created on 2018-02-06 08:40:11
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\leobootstrapmenu\views\widgets\widget_sub_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51635a79b03b9cfc15-93202005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd319f7a9fb3d756f84278371c1b9a4d3259c0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\leobootstrapmenu\\views\\widgets\\widget_sub_categories.tpl',
      1 => 1517862357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51635a79b03b9cfc15-93202005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subcategories' => 0,
    'widget_heading' => 0,
    'title' => 0,
    'subcategory' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a79b03ba3c105_51290574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79b03ba3c105_51290574')) {function content_5a79b03ba3c105_51290574($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
<div class="widget-subcategories">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<div class="menu-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
				<li class="clearfix">
					<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img">
						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 
					</a>
				</li>
			<?php } ?>

		</ul>
	</div>
</div>
<?php }?> <?php }} ?>
