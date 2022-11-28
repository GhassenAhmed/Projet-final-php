<?php
include_once "../../connexion db/db_connect.php";
$sql="SELECT * FROM departement";
$query=$pdo->prepare($sql);
$query->execute();
$departement=$query->fetchAll();