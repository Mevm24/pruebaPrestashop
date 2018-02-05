<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 14:52:35
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\leoblog\views\templates\hook\categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253475a78b6033f0792-70534367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2774b561eec651b9c2c060eb1f0919505c52319' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\leoblog\\views\\templates\\hook\\categories_menu.tpl',
      1 => 1517859997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253475a78b6033f0792-70534367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'currentCategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78b60342af67_54781346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78b60342af67_54781346')) {function content_5a78b60342af67_54781346($_smarty_tpl) {?>    <!-- Block categories module -->
    <?php if ($_smarty_tpl->tpl_vars['tree']->value) {?>
    <div id="categories_blog_menu" class="block blog-menu">
      <h4 class="title_block"><?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->title, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Blog Categories','mod'=>'leoblog'),$_smarty_tpl);?>
<?php }?></h4>
        <div class="block_content">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </div>
    </div>
    <?php }?>
    <!-- /Block categories module -->
<?php }} ?>
