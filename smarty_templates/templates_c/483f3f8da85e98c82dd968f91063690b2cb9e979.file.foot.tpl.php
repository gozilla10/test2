<?php /* Smarty version Smarty-3.1.18, created on 2014-09-01 14:26:33
         compiled from "C:\site\racunovodstvo\smarty_templates\templates\foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1745953f4f71d7e1d03-97810579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483f3f8da85e98c82dd968f91063690b2cb9e979' => 
    array (
      0 => 'C:\\site\\racunovodstvo\\smarty_templates\\templates\\foot.tpl',
      1 => 1409567090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1745953f4f71d7e1d03-97810579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f4f71d7e1d00_20184886',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f4f71d7e1d00_20184886')) {function content_53f4f71d7e1d00_20184886($_smarty_tpl) {?>


	<script type="text/javascript" src="javascript/js-plugin/respond/respond.min.js"></script>
	<script type="text/javascript" src="javascript/js-plugin/jquery/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="javascript/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>




<script type="text/javascript">
	//dodaj postavko
	$('#add').click(function(){
		//stevec postavk
		$('#st_postavk').val(parseInt($('#st_postavk').val())+1);
		$('.postavka').last().after('<div class="row"><button type="button" class="btn btn-success" >TEST</button></div>');
	});

	//zbrisi postavko
	$('.del').click(function(){
		
	});
</script>





</body>
</html>
<?php }} ?>
