<?php
    include 'db_connect.php';
      $error=[];
    if(isset($_POST['send'])){
        extract($_POST);
        if(empty($email) && empty($password) && empty($password_confirm)){
           $error[0]="Remplissez tous les champs !";
           goto shoform;
        }
        else if(empty($email)&&empty($password_confirm)){
            $error[0]=" Remplissez le mot de passe  ";
            goto shoform;
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error[0]="email invalid";
            goto shoform;
        }else if($password!=$password_confirm){
            $error[0]="confirmer votre mot de passe";
            goto shoform;
        }
        else if(empty($email)){
            $error[0]=" Remplissez votre email ";
            goto shoform;
        }else{
        $sql=" INSERT INTO inscrit (email,password,password_confirm) VALUES (?,?,?)";
        $query=$pdo->prepare($sql);
        $query->execute([$email,$password,$password_confirm]);
        }
    }
    shoform:
    include "sign.php";

?>