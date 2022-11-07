<?php

//var_dump($users);
if(isset($_POST['send'])){
    require_once '../connexion db/db_connect.php';
    extract($_POST);
    $utilisateur=$_POST['utilisateur'];
    $password=$_POST['password'];
    if(empty($utilisateur)&&empty($password)){
        header("location:log.phtml?error=champsvides");
        exit();
    }else if(empty($utilisateur) || empty($password)){
        header("location:log.phtml?error=champsvides");
        exit();
    }else{
        $sql="SELECT * FROM inscrit WHERE utilisateur=? AND password=?";
        $query=$pdo->prepare($sql);
        $query->execute([$utilisateur,$password]);
        $check=$query->fetchAll();
       
        /**/
        if(!empty($check)){

            /*session_start();
            $_SESSION['id']=$check['id'];
            $_SESSION['utilisateur']=$check['utilisateur'];*/
            header("location:../iset/index.php?utilisateur=".$utilisateur);
            exit();
            /*$pwdCheck=password_verify($password,$check['password']);*/
           
            /*if($check['password'] != $password){
                header("location:log.phtml?error=mdp_invalid=".$check['password']);
                exit();

            }
            else if($password === $check['password']){

                session_start();
                $_SESSION['id']=$check['id'];
                $_SESSION['utilisateur']=$check['utilisateur'];
                header("location:../iset/index.phtml?utilisateur=".$_SESSION['utilisateur']);
                exit();
                

            }
            else{
                header("location:log.phtml");
                exit();
            }*/
    }
    else{
        header("location:log.phtml?error=utilisateur_pas_trouvé");
        exit();
    }  
}
}

include 'log.phtml';
   
/*$id=$_POST['id'];
$utilisateur=$_POST['utilisateur'];
$password=$_POST['password'];
if($utilisateur=='admin' && $password=='admin')
header('location:../iset/index.phtml?id=');
else
echo'welcome user';*/