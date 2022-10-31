<?php
    require_once '../connexion db/db_connect.php';
      $error=array();
    if(isset($_POST['send'])){
        extract($_POST);
        if(empty($email) && empty($password) && empty($password_confirm)){
           $error[0]="Remplissez tous les champs !";
           goto shoform;
        }
        else if(empty($email)&&empty($password)){
            $error[0]=" Remplissez le mot de passe  ";
            goto shoform;
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error[0]="email invalid";
            goto shoform;
        }else if($password!=$password_confirm){
            $error[0]="confirmer votre mot de passe";
            goto shoform;
        }else if(empty($password)&& empty($password_confirm)){
            $error[0]="Remplissez le mot de passe";
            goto shoform;
        }
        else if(empty($email)){
            $error[0]=" Remplissez votre email ";
            goto shoform;
        }else{
        $sql=" INSERT INTO inscrit (email,password,password_confirm) VALUES (?,?,?)";
        $query=$pdo->prepare($sql);
        $query->execute([$email,$password,$password_confirm]);
        header("location:../log/log.phtml");
        exit;
        }
    }
    shoform:
    include "sign.php";

?>