<?php /*%%SmartyHeaderCode:17085a78b606c309f7-20190684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4cd83e164c0d37b1d93c9556d3ce1cba52ec8f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1517859990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17085a78b606c309f7-20190684',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78c5babba260_11618126',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78c5babba260_11618126')) {function content_5a78c5babba260_11618126($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer noborder">
	<h4 class="title_block">
					<a href="http://localhost/prestashop_pruebas/fabricantes" title="Fabricantes">
						Fabricantes
					</a>
			</h4>
	<div class="block_content">
								<ul class="list-block list-group bullet">
														<li class="last_item">
						<a 
						href="http://localhost/prestashop_pruebas/1_fashion-manufacturer" title="Más acerca de Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/prestashop_pruebas/modules/paypal/express_checkout/payment.php" method="get">
					
						<select class="form-control" name="manufacturer_list">
							<option value="0">Todas las marcas</option>
													<option value="http://localhost/prestashop_pruebas/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
