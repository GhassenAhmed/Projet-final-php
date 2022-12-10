<?php

session_start();
include '../../connexion db/db_connect.php';

if(isset($_POST['update']) ){
        if($_SESSION['autorisation']=='0'){
                header("location:index.php?error=autorisation_requis!");
                exit();
        }else{
                $cin=$_POST['cin'];
                $tel=$_POST['tel'];
                
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
            
                $matiere1=$_POST['matiere1'];
                $matiere2=$_POST['matiere2'];
                
                $adresse=$_POST['adresse'];
            
                $sql = $pdo->prepare("UPDATE enseignant SET  cin='$cin',nom='$nom',prenom='$matiere1',matiere2='$matiere2',tel='$matiere1',adresse ='$adresse'
                WHERE id=?");
               $sql->execute([$id]);
               header("location:index.php?update=succes");
               exit();
        }
        
        
   }

if(isset($_POST['ajouter'])){
       
        if($_SESSION['autorisation']=='0'){
                header("location:index.php?error=autorisation_requis!");
                exit();
        }else{
                $cin=$_POST['cin'];
                $tel=$_POST['tel'];
                
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
        
                $matiere1=$_POST['matiere1'];
                $matiere2=$_POST['matiere2'];
                
                $adresse=$_POST['adresse'];
                $sql=$pdo->prepare("INSERT INTO enseignant (cin,nom,prenom,matiere1,matiere2,tel,adresse) VALUES (?,?,?,?,?,?,?)");
                $sql->execute([$cin,$nom,$prenom,$matiere1,$matiere2,$tel,$adresse]);
                header("location:index.php?ajout=succes");
                exit();
        }
       
                

}