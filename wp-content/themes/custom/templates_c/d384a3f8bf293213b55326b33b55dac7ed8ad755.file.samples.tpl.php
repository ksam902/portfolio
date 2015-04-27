<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 15:23:46
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/portfolio/wp-content/themes/custom/templates/home/samples.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1365089707553e514b1e0334-99614061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd384a3f8bf293213b55326b33b55dac7ed8ad755' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/portfolio/wp-content/themes/custom/templates/home/samples.tpl',
      1 => 1430148208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1365089707553e514b1e0334-99614061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553e514b1eae70_17526301',
  'variables' => 
  array (
    'posts' => 0,
    'sample' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e514b1eae70_17526301')) {function content_553e514b1eae70_17526301($_smarty_tpl) {?><!-- SAMPLES -->
<div class="container">
    <div class="center">
        <h2>Portfolio Samples</h2>
    </div>
    <div class="row">
        <?php  $_smarty_tpl->tpl_vars['sample'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sample']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value['samples']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sample']->key => $_smarty_tpl->tpl_vars['sample']->value) {
$_smarty_tpl->tpl_vars['sample']->_loop = true;
?>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <a href="#">
                     <img src="<?php echo $_smarty_tpl->tpl_vars['sample']->value['image']['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sample']->value['image']['alt'];?>
" class="thumbnail img-responsive">
                </a>
            </div>
        <?php } ?>
      </div>
      <div class="center">
        <hr>
    </div>
</div>

<!-- END SAMPLE --><?php }} ?>
