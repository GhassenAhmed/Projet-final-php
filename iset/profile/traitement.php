<?php
session_start();
require_once '../../connexion db/db_connect.php';
$user=$_SESSION['utilisateur'];
var_dump($user);
if(isset($_POST['update'])){
    
    $utilisateur=$_POST['utilisateur'];
    $numero=$_POST['numero'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];
    $clef=$_POST['clef'];
    $courriel=$_POST['courriel'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $ville=$_POST['ville'];
    $pays=$_POST['pays'];

    $sql ="UPDATE inscrit SET  utilisateur='$utilisateur',numero='$numero',password='$password',password_confirm='$password_confirm',clef='$clef',courriel='$courriel',prenom='$prenom',nom='$nom',ville='$ville',pays='$pays',
     WHERE utilisateur=?";
    $query=$pdo->prepare($sql);
    $query->execute([$user]);
}
?>