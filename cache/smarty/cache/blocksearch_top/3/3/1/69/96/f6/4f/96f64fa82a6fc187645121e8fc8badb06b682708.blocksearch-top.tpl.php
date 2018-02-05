<?php /*%%SmartyHeaderCode:38595a78b5c68a73b8-29946833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f64fa82a6fc187645121e8fc8badb06b682708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1517859991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38595a78b5c68a73b8-29946833',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78c5ba00a5e7_30539575',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78c5ba00a5e7_30539575')) {function content_5a78c5ba00a5e7_30539575($_smarty_tpl) {?><script type="text/javascript">
$(document).ready( function(){
//search 
		$("#search_block_top").each( function(){
		var content = $(".groupe");
		$(".groupe-btn", this ).click( function(){
				content.toggleClass("show");
			}) ;
		} );
	 
});
</script>
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<a  class="groupe-btn dropdown" title="Search" href="#"><i class="fa fa-search"></i></a>
	<form id="searchbox" method="get" action="http://localhost/prestashop_pruebas/buscar" class="groupe" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Ir</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
