<?php
    require_once '../connexion db/db_connect.php';
    if(isset($_GET['profile'])){
    $userName=$_GET['utilisateur'];
    header("location:../profile/index.phtml?utilisateur=".$userName);
    }
    
?>