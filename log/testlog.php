<?php
require_once '../connexion db/db_connect.php';
//var_dump($users);
if(isset($_POST['send'])){
    extract($_POST);
    $email=$_POST['email'];
    $password=$_POST['password'];
    var_dump($email);
    var_dump($password);
    if($email=='admin@gmail.com' && $password=='admin')
    header('location:../layout');
    else
    echo'welcome user';
}
   
   