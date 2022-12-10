<?php
session_start();
include "../../connexion db/db_connect.php";
if($_SESSION['autorisation']==0 || $_SESSION['autorisation']=='1'){
    header("location:index.php?error=autorisation_requis!");
    exit();
   }
   else{
    $id=$_GET['id'];
    $sql=$pdo->prepare("DELETE FROM enseignant WHERE id=?");
    $sql->execute([$id]);
    header('location:./index.php?succes');
    exit();
   }