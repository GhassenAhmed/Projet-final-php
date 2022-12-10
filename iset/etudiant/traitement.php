<?php
include '../../connexion db/db_connect.php';

session_start();

if(isset($_POST['ajouter'])){

        if($_SESSION['autorisation']==0){
         header("location:index.php?error=autorisation_requis!");
         exit();
        }
        else{
        $cin=$_POST['cin'];
        $classe=$_POST['classe'];
                
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
                
        $tel=$_POST['tel'];
        $adresse=$_POST['adresse'];
        $sql=$pdo->prepare("INSERT INTO etudiant (cin,prenom,nom,classe,adresse,tel) VALUES (?,?,?,?,?,?)");
        $sql->execute([$cin,$prenom,$nom,$classe,$adresse,$tel]);
        header("location:index.php?ajout=succes");
        exit();
        }

}
