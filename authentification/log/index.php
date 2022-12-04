<?php
session_start();
if(isset($_POST['send'])){
         $utilisateur=$_POST['utilisateur'];
        $password=$_POST['password'];
        var_dump($_POST['password']);
    if(empty($utilisateur)&&empty($password)){
        header("location:log.phtml?error=champsvides");
        exit();
    }else if(empty($utilisateur)){
        header("location:log.phtml?utilisateur=champvide");
        exit();
    }else{
        require_once '../../connexion db/db_connect.php';
        $sql="SELECT password FROM inscrit WHERE utilisateur=?";
        $query=$pdo->prepare($sql);
        $passHash=$query->execute([$_POST['utilisateur']]);
        if(password_verify($_POST['password'],$passHash)){
            header("location:log.phtml?password=Password_incorrect");
            exit();
        }
        else if(password_verify($password,$passHash)){
            $_SESSION['utilisateur']=$utilisateur;
            $_SESSION['password']=$password;
            header("location:../../iset/accueil/index.php?utilisateur=".$_SESSION['utilisateur']);
             exit();
         }
         else{
            header("location:log.phtml?error=error");
            exit();
         }
}
}

include 'log.phtml';
 
            

            