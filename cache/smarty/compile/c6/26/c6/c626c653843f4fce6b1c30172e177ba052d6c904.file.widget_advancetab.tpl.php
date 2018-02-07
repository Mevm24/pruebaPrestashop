<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 15:53:54
         compiled from "C:\xampp\htdocs\prestashop_pruebas\themes\leo_exist\modules\leomanagewidgets\views\widgets\widget_advancetab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229185a7b6762b51071-47211792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c626c653843f4fce6b1c30172e177ba052d6c904' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\leomanagewidgets\\views\\widgets\\widget_advancetab.tpl',
      1 => 1517862362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229185a7b6762b51071-47211792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myTab' => 0,
    'widget_heading' => 0,
    'tabs' => 0,
    'tab' => 0,
    'path' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7b6762b8cdf9_89549523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b6762b8cdf9_89549523')) {function content_5a7b6762b8cdf9_89549523($_smarty_tpl) {?>


<div id="<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
" class="block products_block tab-product-home nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="widget-heading title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tabs']->value) {?>	
		<ul  class="nav nav-tabs">
			<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
				<li><a href="#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
" data-toggle="tab">
					<?php if ($_smarty_tpl->tpl_vars['tab']->value['icon']&&$_smarty_tpl->tpl_vars['tab']->value['icon']!='none') {?>
						<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tab']->value['icon'];?>
" /><?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>

					<?php }?>	
				</a></li>
			<?php } ?>	
		</ul>
	<?php }?>
	<div class="block_content">	
		<?php if ($_smarty_tpl->tpl_vars['tabs']->value) {?>
			<div id="product_tab_content"><div class="product_tab_content tab-content">
				<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
					<div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['tab']->value['products'], null, 0);?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['myTab']->value)."-".((string)$_smarty_tpl->tpl_vars['tab']->value['id_tab']), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	              </div>
				<?php } ?>	
			</div></div>
		<?php }?>	
        
		
	</div>
</div>

<script>
$(document).ready(function() {
    $('#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
 .carousel').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
 
	$("#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
 .nav-tabs li", this).first().addClass("active");
	$("#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
 .tab-content .tab-pane", this).first().addClass("active");
 
});
</script>
 <?php }} ?>
