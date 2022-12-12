<?php
session_start();
require_once '../../connexion db/db_connect.php';
if(isset($_POST['send'])){
         $utilisateur=$_POST['utilisateur'];
        $password=$_POST['password'];
    if(empty($utilisateur)&&empty($password)){
        header("location:index.php?error=champsvides");
        exit();
    }else if(empty($utilisateur)){
        header("location:index.php?error=utilisateur_champvide");
        exit();
    }else{
        $sql=$pdo->prepare("SELECT * FROM inscrit WHERE utilisateur=?");
        $sql->execute([$utilisateur]);
        $res=$sql->fetch();
        if($res){
             if(password_verify($password,$res['password'])){
            $autorisation=$res['autorisation'];
            $photo=$res['photo'];
            $_SESSION['utilisateur']=$utilisateur;
            $_SESSION['password']=$password;
            $_SESSION['autorisation']=$autorisation;
            $_SESSION['photo']=$photo;
            header("location:../../iset/accueil/index.php?utilisateur=".$_SESSION['utilisateur']);
             exit();
         }
         else{
            header("location:index.php?error=password_incorrect");
            exit();
         }
         }else{
            header("location:index.php?error=utilisateur_invalid");
            exit();
         }
}
}



include "log.phtml";