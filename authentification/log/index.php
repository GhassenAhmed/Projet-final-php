<?php
session_start();
require_once '../../connexion db/db_connect.php';
if(isset($_POST['send'])){
         $utilisateur=$_POST['utilisateur'];
        $password=$_POST['password'];
        var_dump($password);
    if(empty($utilisateur)&&empty($password)){
        header("location:log.phtml?error=champsvides");
        exit();
    }else if(empty($utilisateur)){
        header("location:log.phtml?utilisateur=champvide");
        exit();
    }else{
        $sql=$pdo->prepare("SELECT * FROM inscrit WHERE utilisateur=?");
        $sql->execute([$utilisateur]);
        $res=$sql->fetch();
        var_dump($res);
        if($res){
            if(password_verify($password,$res['password'])){
            $_SESSION['utilisateur']=$utilisateur;
            $_SESSION['password']=$password;
            header("location:../../iset/accueil/index.php?utilisateur=".$_SESSION['utilisateur']);
             exit();
         }
         else{
            header("location:log.phtml?error=password_incorrect");
            exit();
         }
        }else{
            header("location:log.phtml?error=utilisateur_invalid");
            exit();
        }
}
}

include 'log.phtml';
 
            

            