<?php /* Smarty version Smarty-3.1.18, created on 2015-01-04 01:01:28
         compiled from "C:\site\testna-naloga\smarty_templates\templates\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1374554a7cb8517bfe1-16491242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '217ecc2e46f9f7361cafb09097dc1c5673067228' => 
    array (
      0 => 'C:\\site\\testna-naloga\\smarty_templates\\templates\\users.tpl',
      1 => 1420329682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1374554a7cb8517bfe1-16491242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54a7cb8517fe64_34821718',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'viewOnly' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a7cb8517fe64_34821718')) {function content_54a7cb8517fe64_34821718($_smarty_tpl) {?>



    <table class="table  table-hover table-striped">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Surname</td>
                <td>E-mail</td>
                <td>Country</td>
                <td>options</td>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['country_name'];?>
</td>
                    <td>
                        <a href="?i=edit&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                            <i class="glyphicon glyphicon-pencil" title="edit user" alt="edit user"></i>
                        </a> 
                       
                        <?php if (isset($_smarty_tpl->tpl_vars['viewOnly']->value)&&$_smarty_tpl->tpl_vars['viewOnly']->value==1) {?>
                            
                        <?php } else { ?>
                            <a href="#delete">
                                <i class="glyphicon glyphicon-remove-circle delUser" alt="delete user" title="delete user" ref="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></i>
                            </a>
                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }} ?>
