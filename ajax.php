<?php
require_once('config.php');
global $conn;
global $smarty;
//&& is_int($_GET['id'])
if(isset($_POST['i'])){
    require_once('class/user.php');
    $user=new user();

    switch ($_POST['i']){
        case 'addUser':
            $data=array();
            $data['name']=$_POST['name'];
            $data['surname']=$_POST['surname'];
            $data['mail']=$_POST['mail'];
            $data['country_code']=$_POST['country_code'];
       
            $result=$user->addUser($data);
            
            if($result){
                //return refreshed user table
                print('true');
            }else{
                //return false
                print('Error occured');
            }
        break;
        
        case 'delUser':
            $id=intval($_POST['id']);
            if(is_int($id)){
                $userData=$user->delUser($id);
                print("Successfully deleted !!");
                
            }
        break;
    
        case 'getUser':
            $id=intval($_POST['id']);
            if(is_int($id)){
                $userData=$user->getUserById($id);
                if($userData){
                    //print_r($userData);
                    $smarty->assign('viewOnly', 1);
                    $smarty->assign('users', $userData);
                    $userTpl=$smarty->fetch('users.tpl');
                    print($userTpl);
                }else
                    print('Error occured ID does not exists');
            }
        break;
        
        case 'refreshUsers':
            $userData=$user->listUsers();
            $smarty->assign('users', $userData);
            $userTpl=$smarty->fetch('users.tpl');
            print($userTpl);
        break;
    
        case 'updateUser':
            $data=array();
            $data['id']=$_POST['id'];
            $data['name']=$_POST['name'];
            $data['surname']=$_POST['surname'];
            $data['mail']=$_POST['mail'];
            $data['country_code']=$_POST['country_code'];
       
            $result=$user->updateUser($data);
            print(true);
        break;
    
        default:
            print('What are you doing here ?');
        break;
    }

	

}


?>