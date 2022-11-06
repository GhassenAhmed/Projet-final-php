<?php
    require_once '../connexion db/db_connect.php';
      $error=array();
    if(isset($_POST['send'])){
        extract($_POST);
        if(empty($utilisateur) && empty($password) && empty($password_confirm)){
           $error[0]="Remplissez tous les champs !";
           goto shoform;
        }
        else if(empty($utilisateur)&&empty($password)){
            $error[0]=" Remplissez le mot de passe  ";
            goto shoform;
        }
        else if(empty($utilisateur)){
            $error[0]="Remplissez le nom ";
            goto shoform;
        }else if($password!=$password_confirm){
            $error[0]="confirmer votre mot de passe";
            goto shoform;
        }else if(empty($password)&& empty($password_confirm)){
            $error[0]="Remplissez le mot de passe";
            goto shoform;
        }
        else if(empty($utilisateur)){
            $error[0]=" Remplissez votre utilisateur ";
            goto shoform;
        }else{
        $sql="INSERT INTO inscrit (utilisateur,password,password_confirm) VALUES (?,?,?)";
        $query=$pdo->prepare($sql);
        $query->execute([$utilisateur,$password,$password_confirm]);
        header("location:../log/log.phtml");
        exit;
        }
    }
    shoform:
    include "sign.phtml";

?>