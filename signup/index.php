<?php
    
      $error=array();
    if(isset($_POST['send'])){
        require '../connexion db/db_connect.php';
        extract($_POST);

        if(empty($utilisateur) && empty($password) && empty($password_confirm)){
           header("location:sign.phtml?error=champsvides");
           $error[0]="Remplissez vos champs SVP !";
           exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$utilisateur)){
            header("location:sign.phtml?error=invalid_utilisateur");
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$utilisateur)&&empty($password)&&empty($password_confirm)){
            header("location:sign.phtml?error=invalid_utilisateur");
            exit();
        }
        else if($password!==$password_confirm){
            header("location:sign.phtml?error=mdp_invalid&utilisateur=".$utilisateur);
            exit();
        }
        else{
        $sql1="SELECT utilisateur FROM inscrit WHERE utilisateur=?";
        $query1=$pdo->prepare($sql1);
        $query1->execute([$utilisateur]);
        $check_utilisateur=$query1->fetchAll();
        if(!empty($check_utilisateur)){
            header("location:sign.phtml?error=sqlerror");
            exit();
        }else {
        
        $sql="INSERT INTO inscrit (utilisateur,password,password_confirm) VALUES (?,?,?)";
        $query=$pdo->prepare($sql);
        $query->execute([$utilisateur,$password,$password_confirm]);
        header("location:../log/log.phtml?signup=succes");
        exit();
          }
         }
        }
    
    
    include "sign.phtml";

?>