<?php
session_start();


if(isset($_POST['send'])){
    require_once '../../connexion db/db_connect.php';
    extract($_POST);
    $_SESSION['utilisateur']=$_POST['utilisateur'];
    $_SESSION['password']=$_POST['password'];
    if(empty($_POST['utilisateur'])&&empty($_POST['password'])){
        header("location:log.phtml?error=champsvides");
        exit();
    }else if(empty($_POST['utilisateur']) || empty($_POST['password'])){
        header("location:log.phtml?error=champsvides");
        exit();
    }else{
        $sql="SELECT * FROM inscrit WHERE utilisateur=? AND password=?";
        $query=$pdo->prepare($sql);
        $query->execute([$_POST['utilisateur'],$_POST['password']]);
        $check=$query->fetchAll();
        

        /**/
        if(!empty($check)){
            header("location:../../iset/accueil/index.php?utilisateur=".$_POST['utilisateur']);
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
