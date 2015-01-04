<?php /* Smarty version Smarty-3.1.18, created on 2015-01-03 19:07:50
         compiled from "C:\site\testna-naloga\smarty_templates\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173754a56026265c95-10753022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911306c01fc57ba593087a0d26f1d1a3201f7413' => 
    array (
      0 => 'C:\\site\\testna-naloga\\smarty_templates\\templates\\index.tpl',
      1 => 1420308469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173754a56026265c95-10753022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54a560262a44a2_54203305',
  'variables' => 
  array (
    'step' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a560262a44a2_54203305')) {function content_54a560262a44a2_54203305($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body >

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">
        <div class="row step">
            <a href="?i=add" target="_self">
                <div id="div1" class="col-md-2 <?php if ($_smarty_tpl->tpl_vars['step']->value=='add') {?>activestep<?php }?>" >
                    <span class="fa fa-cloud-download"></span>
                    <p>Add user</p>
                </div>
            </a>
            <a href="?i=edit" target="_self">
                <div class="col-md-2 <?php if ($_smarty_tpl->tpl_vars['step']->value=='edit') {?>activestep<?php }?>" >
                    <span class="fa fa-pencil"></span>
                    <p>Edit user</p>
                </div>
            </a>
            <a href="/" target="_self">
                <div class="col-md-2 <?php if ($_smarty_tpl->tpl_vars['step']->value=='index') {?>activestep<?php }?>" >
                    <span class="fa fa-refresh"></span>
                    <p>List all users</p>
                </div>
            </a>
            <a href="?i=view" target="_self">
                <div class="col-md-2 <?php if ($_smarty_tpl->tpl_vars['step']->value=='view') {?>activestep<?php }?>" >
                    <span class="fa fa-dollar"></span>
                    <p>View user</p>
                </div>
            </a>
            <div class="col-md-2" >
                <span class="fa fa-cloud-upload"></span>
                <p>Othr 2</p>
            </div>
            <div id="last" class="col-md-2" >
                <span class="fa fa-star"></span>
                <p>Othr 3</p>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['step']->value=='index') {?>
        <div class="row list-users">
            <?php echo $_smarty_tpl->getSubTemplate ("users.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['step']->value=='add') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['step']->value=='edit') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['step']->value=='view') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?> 
</div>





<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
