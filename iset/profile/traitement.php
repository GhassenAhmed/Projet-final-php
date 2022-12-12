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


        $sql=$pdo->prepare("SELECT * FROM inscrit WHERE utilisateur=?");
        $sql->execute([$user]);
        $res=$sql->fetch();
    if($res){
            if(empty($photo)){
                if(password_verify($_POST['password'],$res['password'])){
                    $sql ="UPDATE inscrit SET  utilisateur='$utilisateur',numero='$numero',clef='$clef',courriel='$courriel',prenom='$prenom',nom='$nom',ville='$ville',pays='$pays'
                    WHERE utilisateur=:user";
                    $query=$pdo->prepare($sql);
                    $query->execute([
                    'user'=>$user,
                    
                    ]);
                }else{
                $sql ="UPDATE inscrit SET  utilisateur='$utilisateur',numero='$numero',password=:pass,clef='$clef',courriel='$courriel',prenom='$prenom',nom='$nom',ville='$ville',pays='$pays',photo='$photo'
                WHERE utilisateur=:user";
               $query=$pdo->prepare($sql);
               $query->execute([
                'user'=>$user,
                'pass'=>password_hash($_POST['password'],PASSWORD_DEFAULT)
               ]);

               $_SESSION['utilisateur']=$utilisateur;
              
               $sql=$pdo->prepare("SELECT * FROM inscrit WHERE utilisateur=?");
               $sql->execute([$user]);
               $res=$sql->fetch();
            }
            header("location:index.php?update=succes");
            exit();
        }else{
            $sql ="UPDATE inscrit SET  utilisateur='$utilisateur',numero='$numero',password=:pass,clef='$clef',courriel='$courriel',prenom='$prenom',nom='$nom',ville='$ville',pays='$pays',photo='$photo'
            WHERE utilisateur=:user";
           $query=$pdo->prepare($sql);
           $query->execute([
            'user'=>$user,
            'pass'=>password_hash($_POST['password'],PASSWORD_DEFAULT)
           ]);
           $_SESSION['photo']=$photo;
        }
        header("location:index.php?error=echec");
        exit();
    }else{
        header("location:index.php?error=echec");
        exit();
    }
}
?>