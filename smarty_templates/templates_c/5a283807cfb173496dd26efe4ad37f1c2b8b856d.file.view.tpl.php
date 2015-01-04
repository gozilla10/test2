<?php /* Smarty version Smarty-3.1.18, created on 2015-01-03 19:15:24
         compiled from "C:\site\testna-naloga\smarty_templates\templates\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3145054a81218825fe9-77156055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a283807cfb173496dd26efe4ad37f1c2b8b856d' => 
    array (
      0 => 'C:\\site\\testna-naloga\\smarty_templates\\templates\\view.tpl',
      1 => 1420308922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3145054a81218825fe9-77156055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54a81218849279_07737437',
  'variables' => 
  array (
    'allIds' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a81218849279_07737437')) {function content_54a81218849279_07737437($_smarty_tpl) {?><div class="row list-users">
    <div class="col-md-7">
        <div class="form-group">
            <label for="exampleInputEmail1">Enter user ID: </label><br/><small>(All available IDs: <?php echo $_smarty_tpl->tpl_vars['allIds']->value;?>
)</small>
            <input type="email" class="form-control" id="userId" placeholder="user ID here (int)">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <button type="button" class="btn btn-info" id="getUser">Get User Info</button>
    </div>

</div>


<div class="row list-users" id="displayData">
    <div class="col-md-12">
        <label for="exampleInputEmail1">User data will be displayed here !</label>
    </div>
</div><?php }} ?>
