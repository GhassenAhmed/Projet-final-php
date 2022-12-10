<?php
    
   
    // use PHPMailer\PHPMailer\PHPMailer;
    // include "./send.php";
      $error=array();
    if(isset($_POST['send'])){
        require '../../connexion db/db_connect.php';
        extract($_POST);

        if(empty($utilisateur) && empty($password) && empty($password_confirm)&& empty($numero)&& empty($clef)&& empty($courriel)&& empty($prenom)&& empty($nom)&& empty($email)){
           header("location:index.php?error=champsvides");
           exit();
        }
        else if(empty($utilisateur) || empty($password) || empty($password_confirm) || empty($numero)|| empty($clef)|| empty($courriel)|| empty($prenom)|| empty($nom)||empty($email)){
            header("location:index.php?error=champsvides");
            exit();
         }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$utilisateur)){
            header("location:index.php?error=invalid_utilisateur");
            exit();
        }
        else if(!preg_match("/^[0-9]*$/",$numero)){
            header("location:index.php?error=invalid_numeroTel");
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$utilisateur)&&!preg_match("/^[0-9]{2}-[0-9]{3}-[0-9]{3}*$/",$numero)&&empty($password)&&empty($password_confirm)){
            header("location:index.php?error=invalid_utilisateur");
            exit();
        }
        else if($password!==$password_confirm){
            header("location:index.php?error=mdp_invalid&utilisateur=".$utilisateur);
            exit();
        }
        else{
        $sql1="SELECT utilisateur FROM inscrit WHERE utilisateur=?";
        $query1=$pdo->prepare($sql1);
        $query1->execute([$utilisateur]);
        $check_utilisateur=$query1->fetchAll();
        if(!empty($check_utilisateur)){
            header("location:index.php?error=sqlerror");
            exit();
        }else {
        $passHash=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $sql="INSERT INTO inscrit (utilisateur,email,numero,password,password_confirm,clef,courriel,prenom,nom,ville,pays) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $query=$pdo->prepare($sql);
        $query->execute([$utilisateur,$email,$numero,$passHash,$passHash,$clef,$courriel,$prenom,$nom,$ville,$pays]);
        //sendmail("management",$email,"Welcome","welcometoourschoolmanagement");

        header("location:../log/?signup=succes");
        exit();
          }
        }
    }
    
    include "sign.phtml";

?>