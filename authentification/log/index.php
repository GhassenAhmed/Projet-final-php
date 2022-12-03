<?php
session_start();
if(isset($_POST['send'])){
    require_once '../../connexion db/db_connect.php';
    extract($_POST);
    if(empty($_POST['utilisateur'])&&empty($_POST['password'])){
        header("location:log.phtml?error=champsvides");
        exit();
    }else if(empty($_POST['utilisateur']) || empty($_POST['password'])){
        header("location:log.phtml?error=champsvides");
        exit();
    }else{
        $sql="SELECT * FROM inscrit WHERE utilisateur=?";
        $query=$pdo->prepare($sql);
        $query->execute($_POST['utilisateur']);
        $check=$query->fetchAll();
        $passHash=$check['password'];
        if(password_verify($_POST['password'],$passHash)){
            header("location:log.phtml?password=Password_correct");
            exit();
        }
        else{
            header("location:../../iset/accueil/index.php?utilisateur=".$_POST['utilisateur']);
            $_SESSION['utilisateur']=$_POST['utilisateur'];
            $_SESSION['password']=$_POST['password'];
             exit();
         }  
}
}

include 'log.phtml';
 
            

            