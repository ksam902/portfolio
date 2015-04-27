<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 15:10:02
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/portfolio/wp-content/themes/custom/templates/home/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125287667754ff7aea8a2221-84197303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '151b3b0105cb4d4dc0d26b1e3f4d1473e73ebe11' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/portfolio/wp-content/themes/custom/templates/home/content.tpl',
      1 => 1430147395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125287667754ff7aea8a2221-84197303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ff7aea8a3ab5_42620581',
  'variables' => 
  array (
    'posts' => 0,
    'sample' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff7aea8a3ab5_42620581')) {function content_54ff7aea8a3ab5_42620581($_smarty_tpl) {?><!-- BANNER -->
<header>
    <h1>Hello, I'm Kyle</h1>
    <h5>I make stuff for the web.</h5>
</header>
<!-- END BANNER -->











<!-- FORM -->
<!-- <form class="email-form">
    <div class="input-group">
        <input type="text">
        <label>Your Name</label>
    </div>
    <div class="input-group">
        <input type="email">
        <label>Your Email</label>
    </div>
    <input type="submit">
</form> -->
<!-- END FORM -->

<!-- SAMPLES -->
<!-- <div class="container">
    <div class="header">
        <h2>Portfolio Samples</h2>
    </div>
    <div class="grid">
    <?php  $_smarty_tpl->tpl_vars['sample'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sample']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value['samples']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sample']->key => $_smarty_tpl->tpl_vars['sample']->value) {
$_smarty_tpl->tpl_vars['sample']->_loop = true;
?>
        <figure class="effect-oscar">
            <img src="<?php echo $_smarty_tpl->tpl_vars['sample']->value['image']['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sample']->value['image']['alt'];?>
"/>
            <figcaption>
                <h2> <?php echo $_smarty_tpl->tpl_vars['sample']->value['post_title'];?>
<span>1</span></h2>
                <p><?php echo $_smarty_tpl->tpl_vars['sample']->value['caption'];?>
</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-oscar">
    <?php } ?>
    </div>
</div> -->
<!-- END SAMPLE<?php }} ?>
