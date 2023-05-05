<?php
function redirect($url){
    header('Location: ' . $url);
    exit();
}

session_start();
$action = $_GET['action'];

if($action == "set"){
    $_SESSION['key'] = 'session_value';
    redirect("?action=get");

}
else if($action == "get"){
    if(isset($_SESSION['key'])){
        echo $_SESSION['key'];
    }
    else{
        echo "NO SESSION";
    }
}
else if($action == "remove"){
    if(isset($_SESSION['key'])){
        unset($_SESSION['key']);
    }
    redirect("?action=get");
}