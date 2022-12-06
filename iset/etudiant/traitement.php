<?php


include '../../connexion db/db_connect.php';

if(isset($_POST['update'])){
    
    $cin=$_POST['cin'];
    $classe=$_POST['classe'];
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    
    $tel=$_POST['tel'];
    $adresse=$_POST['adresse'];

    $sql = $pdo->prepare("UPDATE etudiant SET  cin='$cin',classe='$classe',nom='$nom',prenom='$prenom',tel='$tel',adresse='$adresse' 
    WHERE id=?");
   $sql->execute([$id]);
   header("location:index.php?update=succes");
   exit();
}
if(isset($_POST['ajouter'])){
       
        $sql=$pdo->prepare("INSERT INTO etudiant (cin,prenom,nom,classe,adresse,tel) VALUES (?,?,?,?,?,?)");
        $sql->execute();
        header("location:index.php?ajout=succes");
        exit();
}