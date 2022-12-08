<?php
include "../../connexion db/db_connect.php";
$sql=$pdo->prepare("DELETE * FROM etudiant where id=?");
$sql->execute([$_GET['id']]);
header('location:./index.php');
exit();


