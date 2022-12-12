<?php
session_start();

require_once '../../connexion db/db_connect.php';
$user=$_SESSION['utilisateur'];
if(isset($_POST['update'])){
    
    $utilisateur=$_POST['utilisateur'];
    $numero=$_POST['numero'];
    
    $password=$_POST['password'];
   
    
    $clef=$_POST['clef'];
    $courriel=$_POST['courriel'];
    
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    
    $ville=$_POST['ville'];
    $pays=$_POST['pays'];
    $photo=$_FILES['photo']['name'];
    $passHash=password_hash($_POST['password'],PASSWORD_DEFAULT);

        $sql=$pdo->prepare("SELECT * FROM inscrit WHERE utilisateur=?");
        $sql->execute([$user]);
        $res=$sql->fetch();
    if($res){
            if(empty($photo)){
                $sql ="UPDATE inscrit SET  utilisateur='$utilisateur',numero='$numero',password='$passHash',password_confirm='$passHash',clef='$clef',courriel='$courriel',prenom='$prenom',nom='$nom',ville='$ville',pays='$pays'
                WHERE utilisateur=?";
               $query=$pdo->prepare($sql);
               $query->execute([$user]);
               $_SESSION['utilisateur']=$utilisateur;
               header("location:index.php?update=succes");
               exit();
            }else{
                $sql ="UPDATE inscrit SET  utilisateur='$utilisateur',numero='$numero',password='$passHash',password_confirm='$passHash',clef='$clef',courriel='$courriel',prenom='$prenom',nom='$nom',ville='$ville',pays='$pays',photo='$photo'
                WHERE utilisateur=?";
                $query=$pdo->prepare($sql);
                $query->execute([$user]);
                $_SESSION['utilisateur']=$utilisateur;
                $_SESSION['photo']=$photo;
                header("location:index.php?update=succes");
                exit();
            }
            
        
       
    }else{
        header("location:index.php?error=echec");
        exit();
    }
   
    }
    else{
        header("location:index.php?error=echec");
        exit();
    }
    
?>