<?php /* Smarty version Smarty-3.1.18, created on 2014-08-22 14:50:52
         compiled from "C:\site\racunovodstvo\smarty_templates\templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2448253f4f71d7c6772-19520244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea0406b4bf5215bf9739fd10aadf60adf1d01ed' => 
    array (
      0 => 'C:\\site\\racunovodstvo\\smarty_templates\\templates\\head.tpl',
      1 => 1408711850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2448253f4f71d7c6772-19520244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f4f71d7ca5f8_59171041',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f4f71d7ca5f8_59171041')) {function content_53f4f71d7ca5f8_59171041($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>HIDEO HTML5, CSS3, responsive, Bootstrap 3 website template</title>
	<meta name="description" content="HIDEO is a One Page Bootstrap 3 Premium website Template, using nice Paralax effect, HTML5, CSS3 and Twitter Bootstrap 3">
	<meta name="author" content="Little NEKO">
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
	================================================== -->
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Awesome font -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    
    <!-- Bootstrap select -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css" />
	
	<link rel="stylesheet" type="text/css" href="css/racunovodstvo.css" />
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<script src="javascript/modernizr-2.6.1.min.js"></script>
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
	
	
	
	<style>
.progress {    
    position: relative;
    height: 25px;
}

.progress > .progress-type {
    position: absolute;
    left: 0px;
    font-weight: 800;
    padding: 3px 30px 2px 10px;
    color: rgb(255, 255, 255);
    background-color: rgba(25, 25, 25, 0.2);
}

.progress > .progress-completed {
    position: absolute;
    right: 0px;
    font-weight: 800;
    padding: 3px 10px 2px;
}

.step {
 text-align: center;
}

.step .col-md-2 {
    background-color: #fff;
    border: 1px solid #C0C0C0;
    border-right: none;
}

.step .col-md-2:last-child {
    border: 1px solid #C0C0C0;
}

.step .col-md-2:first-child {
    border-radius: 5px 0 0 5px;
}

.step .col-md-2:last-child {
    border-radius: 0 5px 5px 0;
}

.step .col-md-2:hover {
    color: #F58723;
    cursor: pointer;
}

.step .activestep {
    color: #F58723;
    height: 100px;
    margin-top: -7px;
    padding-top: 7px;
    border-left: 6px solid #5CB85C !important;
    border-right: 6px solid #5CB85C !important;
    border-top: 3px solid #5CB85C !important;
    border-bottom: 3px solid #5CB85C !important;
    vertical-align: central;
}

.step .fa {
    padding-top: 15px;
    font-size: 40px;
}
</style>

<script type="text/javascript">
    function resetActive(event, percent) {
        $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
        $(".progress-completed").text(percent + "%");

        $("div").each(function () {
            if ($(this).hasClass("activestep")) {
                $(this).removeClass("activestep");
            }
        });

        if (event.target.className == "col-md-2") {
            $(event.target).addClass("activestep");
        }
        else {
            $(event.target.parentNode).addClass("activestep");
        }
    }
</script>

</head><?php }} ?>
