<?php
    if(isset($_GET['profile'])){
    require_once '../connexion db/db_connect.php';
    $userName=$_GET['utilisateur'];
    header("location:../profile/index.phtml?utilisateur=".$userName);
    }
    
?>