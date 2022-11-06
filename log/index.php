<?php
require_once '../connexion db/db_connect.php';
//var_dump($users);
if(isset($_POST['send'])){
    extract($_POST);
    $id=$_POST['id'];
    $utilisateur=$_POST['utilisateur'];
    $password=$_POST['password'];
    if($utilisateur=='admin' && $password=='admin')
    header('location:../iset/index.phtml?id=');
    else
    echo'welcome user';
   
}


include 'log.phtml';
   
   