<?php
include "../connexion db/db_connect.php";
$id=$_GET["id"];
$sql=$pdo->prepare("DELETE  FROM etudiant  where id=?");
$sql->execute([$id]);
header ('location:../iset/etudiant/index.php');
exit();

