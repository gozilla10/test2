<?php


if($_SERVER['SERVER_ADDR']=='127.0.0.1'){//ce gre za maj localhost 
    define('SITE_ROOT',	'C:\\site\\testna-naloga\\');
    require_once (SITE_ROOT."adodb5\\adodb.inc.php");
}else{ //drugace ce gre za live verzijo 
    /*define('SITE_ROOT',	'/home2/extrem92/www/gozilla.si/');
    require_once (SITE_ROOT."adodb5/adodb.inc.php");*/
    define('SITE_ROOT',	'C:\\site\\testna-naloga\\');
    require_once (SITE_ROOT."adodb5\\adodb.inc.php");
}


/**

* AdoDB Conn

*/

$SQL['type'] = 'mysqli';
/* BACKEND BAZA */

if($_SERVER['SERVER_ADDR']=='127.0.0.1'){
    $SQL['server'] = '127.0.0.1';
    $SQL['user_name'] = 'root';
    $SQL['password'] = '';
    $SQL['database'] = 'gozilla';	
}else{//else live
    /*$SQL['server'] = '';
    $SQL['user_name'] = '';
    $SQL['password'] = '';
    $SQL['database'] = '';*/
     $SQL['server'] = '127.0.0.1';
    $SQL['user_name'] = 'root';
    $SQL['password'] = '';
    $SQL['database'] = 'gozilla';
}


$conn =  ADONewConnection($SQL['type'],'pear');

$conn->Connect($SQL['server'], $SQL['user_name'], $SQL['password'], $SQL['database']);

$conn->SetFetchMode(ADODB_FETCH_ASSOC);

$conn->SetCharSet('utf8');

$conn->execute("SET NAMES 'utf8'");

$conn->execute("SET CHARACTER SET 'utf8_general_ci'");


/**

* smarty

*/

require_once(SITE_ROOT.'smarty_lib/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = SITE_ROOT.'smarty_templates/templates';

$smarty->compile_dir = SITE_ROOT.'smarty_templates/templates_c';

$smarty->cache_dir = SITE_ROOT.'smarty_templates/cache';

$smarty->config_dir = SITE_ROOT.'smarty_templates/configs';




?>