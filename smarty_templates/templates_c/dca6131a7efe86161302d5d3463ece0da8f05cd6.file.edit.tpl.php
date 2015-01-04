<?php /* Smarty version Smarty-3.1.18, created on 2015-01-04 00:59:54
         compiled from "C:\site\testna-naloga\smarty_templates\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390054a7cf207ba310-88198294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca6131a7efe86161302d5d3463ece0da8f05cd6' => 
    array (
      0 => 'C:\\site\\testna-naloga\\smarty_templates\\templates\\edit.tpl',
      1 => 1420329593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390054a7cf207ba310-88198294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54a7cf207ba319_14765145',
  'variables' => 
  array (
    'allIds' => 0,
    'userinfo' => 0,
    'countries' => 0,
    'country' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a7cf207ba319_14765145')) {function content_54a7cf207ba319_14765145($_smarty_tpl) {?><div class="row edit_user">
    <div class="col-md-7">
        <div class="form-group">
            <label for="exampleInputEmail1">Enter user ID: </label><br/><small>(All available IDs: <?php echo $_smarty_tpl->tpl_vars['allIds']->value;?>
)</small>
            <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value[0])) {?><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[0]['id'];?>
<?php }?>" class="form-control" id="userId" placeholder="user ID here (int)">
        </div>
    </div>
</div>
<div class="row">   
    <div class="col-md-5">
         <button type="button" class="btn btn-info" id="refreshUser">refresh user info</button>
    </div>
</div>            
<div class="row edit_user">
    <label for="InputName">EDIT USER</label>
    <div class="col-lg-12">
        <form role="form" id="contact-form" data-toggle="validator">
            <input type="hidden" id="userIdd" value="<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value[0])) {?><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[0]['id'];?>
<?php }?>"/>
            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value[0])) {?><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[0]['name'];?>
<?php }?>" class="form-control" name="InputName" id="name" placeholder="Name" required data-error="* Vnesite ime in priimek v polje zgoraj">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value[0])) {?><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[0]['surname'];?>
<?php }?>" class="form-control" name="InputName" id="surname" placeholder="Surname" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" value="<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value[0])) {?><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[0]['email'];?>
<?php }?>" class="form-control" name="InputName" id="mail1" placeholder="Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value[0])) {?><?php echo $_smarty_tpl->tpl_vars['userinfo']->value[0]['email'];?>
<?php }?>" name="InputName" id="mail2" placeholder="Email again" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <select class="selectpicker">
                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['code'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value[0])&&$_smarty_tpl->tpl_vars['userinfo']->value[0]['country']==$_smarty_tpl->tpl_vars['country']->value['code']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                        <?php } ?>  
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <button  type="submit" class="btn btn-success" id="updateUser"><span class="glyphicon glyphicon-plus"></span> Update userinfo!</button>
                
                
            </div>
        </form>
    </div>
</div><?php }} ?>
