<?php

require_once('config.php');
require_once('class/user.php');

$user=new user();
$allUsers=$user->listUsers();
$smarty->assign("users", $allUsers);

if(isset($_GET['i'])){
    switch ($_GET['i']){
        case 'edit':
            if(isset($_GET['id'])){
                $userinfo=$user->getUserById($_GET['id']);
                $smarty->assign("userinfo", $userinfo);
            }
            $ids=$user->availableIds();
            $allIds='';
            foreach($ids as $id){
                if($allIds=='')
                    $allIds=$id['id'];
                else
                    $allIds.=', '.$id['id'];
            }
            $smarty->assign('allIds', $allIds);
            
            $countries=$user->listCountries();
            $smarty->assign("countries", $countries);
            
            $smarty->assign("step", "edit");
        break;
    
        case 'add':
            $countries=$user->listCountries();
            $smarty->assign("countries", $countries);
            $smarty->assign("step", "add");
        break;
	
        case 'view':
            $ids=$user->availableIds();
            $allIds='';
            foreach($ids as $id){
                if($allIds=='')
                    $allIds=$id['id'];
                else
                    $allIds.=', '.$id['id'];
            }
            $smarty->assign('allIds', $allIds);
            $smarty->assign("step", "view");
        break;
    
        default:
           $smarty->assign("step", "index");
        break;
    }
     $smarty->display("index.tpl");
}else{
    
    $smarty->assign("step", "index");
    $smarty->display("index.tpl");
}

?>