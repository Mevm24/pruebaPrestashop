<?php /* Smarty version Smarty-3.1.19, created on 2018-02-06 08:40:14
         compiled from "C:\xampp\htdocs\prestashop_pruebas\themes\leo_exist\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166315a79b03e9f2842-21162627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f64fa82a6fc187645121e8fc8badb06b682708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1517862360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166315a79b03e9f2842-21162627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a79b03ea19305_38093783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79b03ea19305_38093783')) {function content_5a79b03ea19305_38093783($_smarty_tpl) {?>
<script type="text/javascript">
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
	<a  class="groupe-btn dropdown" title="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" href="#"><i class="fa fa-search"></i></a>
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" class="groupe" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Go','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
