<?php
require_once '../../connexion db/db_connect.php';
if(isset($_POST['send'])){
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $cin=$_POST['cin'];
    $sujet=$_POST['sujet'];
    $message=$_POST['message'];
    $sql=$pdo->prepare("INSERT INTO demande (nom,email,cin,sujet,message) VALUES (?,?,?,?,?)");
    $sql->execute([$nom,$email,$cin,$sujet,$message]);
    header("location:../log/log.phtml?demande_envoyee");
    exit();
}