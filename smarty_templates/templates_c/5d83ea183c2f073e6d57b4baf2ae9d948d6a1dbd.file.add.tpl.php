<?php /* Smarty version Smarty-3.1.18, created on 2015-01-03 19:42:28
         compiled from "C:\site\testna-naloga\smarty_templates\templates\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2055854a7ccd04e0937-17394866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d83ea183c2f073e6d57b4baf2ae9d948d6a1dbd' => 
    array (
      0 => 'C:\\site\\testna-naloga\\smarty_templates\\templates\\add.tpl',
      1 => 1420310546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2055854a7ccd04e0937-17394866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54a7ccd0507a31_25222444',
  'variables' => 
  array (
    'countries' => 0,
    'country' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a7ccd0507a31_25222444')) {function content_54a7ccd0507a31_25222444($_smarty_tpl) {?>

 <div class="row add_user">
    <label for="InputName">Add new user</label>
    <div class="col-lg-12">
        <form role="form" id="contact-form" data-toggle="validator">
            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="name" placeholder="Name" required data-error="* Vnesite ime in priimek v polje zgoraj">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="surname" placeholder="Surname" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" name="InputName" id="mail1" placeholder="Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" name="InputName" id="mail2" placeholder="Email again" required>
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
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                        <?php } ?>  
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <button  type="submit" class="btn btn-success" id="addUser"><span class="glyphicon glyphicon-plus"></span> Add user</button>
                
                
            </div>
        </form>
    </div>
</div>

                        
<div class="row list-users" id="displayData">
    <?php echo $_smarty_tpl->getSubTemplate ("users.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>                       
<?php }} ?>
