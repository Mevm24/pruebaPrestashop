<?php /* Smarty version Smarty-3.1.19, created on 2018-02-06 08:59:06
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\leoblog\views\templates\hook\categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126455a79b4aac3db45-17253300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2774b561eec651b9c2c060eb1f0919505c52319' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\leoblog\\views\\templates\\hook\\categories_menu.tpl',
      1 => 1517862357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126455a79b4aac3db45-17253300',
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
  'unifunc' => 'content_5a79b4aac73701_86687123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79b4aac73701_86687123')) {function content_5a79b4aac73701_86687123($_smarty_tpl) {?>    <!-- Block categories module -->
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
