<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 09:04:38
         compiled from "C:\xampp\htdocs\prestashop_pruebas\admin455dhvxiw\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3575a7b0776ed8e26-83051633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ced3f24ecc8ceaefa3ee1234ddb4175d1ac9174a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\admin455dhvxiw\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3575a7b0776ed8e26-83051633',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7b0776edb454_30218075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b0776edb454_30218075')) {function content_5a7b0776edb454_30218075($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
