<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 09:04:42
         compiled from "C:\xampp\htdocs\prestashop_pruebas\themes\leo_exist\modules\leobootstrapmenu\views\widgets\widget_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246725a7b077aafa576-70963996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd7e2b85eef453ce15a8b14ff13233669cd215d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\leobootstrapmenu\\views\\widgets\\widget_products.tpl',
      1 => 1517862362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246725a7b077aafa576-70963996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'widget_heading' => 0,
    'limit' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbLines' => 0,
    'liHeight' => 0,
    'totModulo' => 0,
    'product' => 0,
    'link' => 0,
    'homeSize' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7b077ab9bfc6_17941958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b077ab9bfc6_17941958')) {function content_5a7b077ab9bfc6_17941958($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\prestashop_pruebas\\tools\\smarty\\plugins\\function.math.php';
?> <?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
<div class="widget-products">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		
		<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
		<div class="product-block">
			<?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(140, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable($_smarty_tpl->tpl_vars['limit']->value, null, 0);?>
			<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

			<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->tpl_vars['nbLines']->value),'liHeight'=>$_smarty_tpl->tpl_vars['liHeight']->value,'assign'=>'ulHeight'),$_smarty_tpl);?>

			 

			<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['limit']->value), null, 0);?>
			 

 
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
			 
  
			 <div class="product-container clearfix" itemscope itemtype="http://schema.org/Product">	
					<div class="image ">
							<a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
								<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
						</a>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
								<span class="new-box">
									<span class="new-label product-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
								</span>
							<?php }?>
					</div>
					<div class="product-meta">
							<h5 itemprop="name" class="name">
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?>
								<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
									<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</h5>
							<p class="product-desc" itemprop="description">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),60,'...');?>

							</p>	
							<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
								<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
									<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
										<span itemprop="price" class="price product-price">
											<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
										</span>
										<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']) {?>
											<span class="old-price product-price">
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

											</span>
											<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
												<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
											<?php }?>
										<?php }?>
									<?php }?>
				</div>
							<?php }?>
						</div>
				</div>					
			<?php } ?>
						
		 
		</div>
 
		<?php }?>


	</div>
</div>
<?php }?><?php }} ?>
