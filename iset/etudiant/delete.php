<?php
include "../../connexion db/db_connect.php";
$id=$_GET['id'];
$sql=$pdo->prepare("DELETE FROM etudiant WHERE id=?");
$sql->execute([$id]);
header('location:./index.php?succes');
exit();


