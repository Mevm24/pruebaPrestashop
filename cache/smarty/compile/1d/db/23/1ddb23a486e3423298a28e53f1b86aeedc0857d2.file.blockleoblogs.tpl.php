<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 09:04:44
         compiled from "C:\xampp\htdocs\prestashop_pruebas\themes\leo_exist\modules\blockleoblogs\blockleoblogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88455a7b077c244a70-77162951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ddb23a486e3423298a28e53f1b86aeedc0857d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\blockleoblogs\\blockleoblogs.tpl',
      1 => 1517862360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88455a7b077c244a70-77162951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogs' => 0,
    'tabname' => 0,
    'itemsperpage' => 0,
    'mblogs' => 0,
    'columnspage' => 0,
    'scolumn' => 0,
    'blog' => 0,
    'config' => 0,
    'view_all_link' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7b077c375716_14668249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b077c375716_14668249')) {function content_5a7b077c375716_14668249($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\prestashop_pruebas\\tools\\smarty\\plugins\\modifier.date_format.php';
?>

<!-- MODULE Block blockleoblogstabs -->
<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("blockleoblogs", null, 0);?>
<div id="blockleoblogstabs" class="block blogs_block exclusive blockleoblogs container-padding">
	<h3 class="title_block"><?php echo smartyTranslate(array('s'=>'Latest Blogs','mod'=>'blockleoblogs'),$_smarty_tpl);?>
</h3>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['blogs']->value)) {?>
			<?php if (!empty($_smarty_tpl->tpl_vars['blogs']->value)) {?>
		<div class="carousel slide" id="<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
">
			<?php if (count($_smarty_tpl->tpl_vars['blogs']->value)>$_smarty_tpl->tpl_vars['itemsperpage']->value) {?>		
				<a class="carousel-control left" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
" data-slide="next">&rsaquo;</a>
			<?php }?>
	<div class="carousel-inner">
	<?php $_smarty_tpl->tpl_vars['mblogs'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['blogs']->value,$_smarty_tpl->tpl_vars['itemsperpage']->value), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['blogs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mblogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blogs']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['blogs']->key => $_smarty_tpl->tpl_vars['blogs']->value) {
$_smarty_tpl->tpl_vars['blogs']->_loop = true;
 $_smarty_tpl->tpl_vars['blogs']->index++;
 $_smarty_tpl->tpl_vars['blogs']->first = $_smarty_tpl->tpl_vars['blogs']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['first'] = $_smarty_tpl->tpl_vars['blogs']->first;
?>
		<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['first']) {?>active<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
 $_smarty_tpl->tpl_vars['blog']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->index++;
 $_smarty_tpl->tpl_vars['blog']->first = $_smarty_tpl->tpl_vars['blog']->index === 0;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blogs']['first'] = $_smarty_tpl->tpl_vars['blog']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blogs']['last'] = $_smarty_tpl->tpl_vars['blog']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
				  <div class="row">
				<?php }?>
				<div class="col-sp-12 col-xs-6 col-sm-6 col-md-<?php echo $_smarty_tpl->tpl_vars['scolumn']->value;?>
 col-lg-<?php echo $_smarty_tpl->tpl_vars['scolumn']->value;?>
 blog_block ajax_block_blog <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blogs']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['blogs']['last']) {?>last_item<?php }?>">
					<div class="blog_container clearfix">
						<?php if ($_smarty_tpl->tpl_vars['blog']->value['image']&&$_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_img',1)) {?>
							<div class="blog-image">
								<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['preview_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
" class="img-responsive" />
								</a>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_cre',1)) {?>
							<div class="blog-created">
								<div class="create-date">
									<span class="day"><?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e");?>
</span>
									<span class="month"><?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%b");?>
</span>
								</div>
							</div>
						<?php }?>
						<div class="blog-info">
							<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_title',1)) {?>
								<h4><a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['blog']->value['title'],70,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
							<?php }?>					
							<div class="blog-meta">								 
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_cat',1)) {?>
								<span class="blog-cat"> <span class="icon-list"><?php echo smartyTranslate(array('s'=>'In','module'=>'blockleoblogs'),$_smarty_tpl);?>
</span> 
									<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['category_link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['category_title'];?>
</a>
								</span>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_cout',1)) {?> 
								<span class="blog-ctncomment">
									<span class="icon-comment"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'blockleoblogs'),$_smarty_tpl);?>
:</span> <?php echo $_smarty_tpl->tpl_vars['blog']->value['comment_count'];?>

								</span>
								<?php }?>  
								
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_aut',1)) {?> 
								<span class="blog-author">
									<span class="icon-author"> <?php echo smartyTranslate(array('s'=>'Author','mod'=>'blockleoblogs'),$_smarty_tpl);?>
:</span> <?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>

								</span>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_hits',1)) {?> 
								<span class="blog-hits">
									<span class="icon-hits"> <?php echo smartyTranslate(array('s'=>'Hits','mod'=>'blockleoblogs'),$_smarty_tpl);?>
:</span> <?php echo $_smarty_tpl->tpl_vars['blog']->value['hits'];?>

								</span>	
								<?php }?>
							</div>	
							
							<div>
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_des',1)) {?> 
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),150,'...');?>

								<?php }?>  
						 
							</div>
							
							<div class="blog-viewmore">
								<a  class="button btn btn-outline" href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'blockleoblogs'),$_smarty_tpl);?>
</a>
							</div>
						</div>
					</div>
				</div>
				
				<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['blogs']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
				</div>
				<?php }?>
					
				<?php } ?>
		</div>		
	<?php } ?>
	</div>
</div>
<?php }?>
		<?php }?>
	</div>
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_show',1)) {?>
		<div class="clearfix"><a class="pull-right" href="<?php echo $_smarty_tpl->tpl_vars['view_all_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'View All','mod'=>'blockleoblogs'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View All','mod'=>'blockleoblogs'),$_smarty_tpl);?>
</a></div>
		<?php }?>	
</div>
<!-- /MODULE Block blockleoblogstabs -->
<script type="text/javascript">

$(document).ready(function() {
    $('#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
});

</script>
 <?php }} ?>
