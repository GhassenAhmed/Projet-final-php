<?php
    session_start();
    if(empty($_SESSION['utilisateur'])){
        header('location:../../authentification/log/log.phtml');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Departement</title>
</head>
<body>
    <?php
        include "../../connexion db/db_connect.php";
        $sql="SELECT d.*,count(e.id_dep) FROM departement d,etudiant e where d.id=e.id_dep group by e.id_dep";
        $query=$pdo->prepare($sql);
        $query->execute();
        $departement =$query->fetchAll();

        $sql="SELECT d.*,count(e.id_dep) FROM departement d,enseignant e where d.id=e.id_dep group by e.id_dep";
        $query=$pdo->prepare($sql);
        $query->execute();
        $departement1 =$query->fetchAll();

    ?>
    <div class="sidebar">
        <div class="sidebar-title">
            <h3>Gestion Institut</h3>
        </div>
        <div class="sidebar-menu">
        <ul>
            <li><a href="../accueil/index.php">
                <i class="fas fa-home"></i>
                <span class="nav-item">Accueill</span>
            </a></li>

            <li><a href="../profile/index.php">
                <i class="fas fa-user"></i>
                <span class="nav-item">Profile</span>
            </a></li>

            <li><a href="../departement/index.php">
                <i class="fas fa-wallet"></i>
                <span class="nav-item">Departement</span>
            </a></li>

            <li><a href="../etudiant/index.php">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Etudiant</span>
            </a></li>

            <li><a href="../enseignant/index.php">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Enseingant</span>
            </a></li>

            <li><a href="#">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Parametres</span>
            </a></li>

            <li><a href="../aide/index.php">
                 <i class="fas fa-question-circle"></i>
                <span class="nav-item">Aide</span>
            </a></li>

            <li class="logout"><a href=../../authentification/logout/index.php>
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
            </a></li>
        </ul>
        </div>
    </div>
    <div class="main-content">
            <div class="p-3 header_admin " style='background:#fff;'> 
                <button class="btn btn-outline-info mx-1"  id="btn1"><i class="fa-solid fa-list"></i></button>
                <div class="float-end">
            <h3><span class="user"><i class="fa-solid fa-user"></i></span><?= $_SESSION['utilisateur']?> <img src="../../authentification/upload/<?= $_SESSION['photo']?>" width="55px" height="55px" style='border-radius:50%;margin-left:2rem;'></img></h3>
            </div>
    </div> 
           
        <div class="main p-5">
            <main>
            <div class="alert alert-success "role="alert">
                 Bienvenue <strong><?= $_SESSION['utilisateur']?></strong> sur votre dashboard !
            </div>
            <table class="table table-striped table-primary ">
                <thead>
                    <tr>
                        <th scope="col" class="py-3">Departements</th>
                        <th scope="col" class="py-3">Nom Departement</th>
                        <th scope="col" class="py-3">Nombre Salles</th>
                        <th scope="col" class="py-3">Nombre Etudiants</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach($departement as $dep):?>
                    <tr>
                        <td class="py-3"><?= $dep['id']?></td>
                        <td class="py-3"><?= $dep['nom']?></td>
                        <td class="py-3"><?= $dep['nbresalles']?></td>
                        <td class="py-3"><?= $dep['count(e.id_dep)']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

            <table class="table table-striped table-primary ">
                <thead>
                    <tr>
                        <th scope="col" class="py-3">Departements</th>
                        <th scope="col" class="py-3">Nom Departement</th>
                        <th scope="col" class="py-3">Nombre Salles</th>
                        <th scope="col" class="py-3">Nombre Enseigants</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach($departement1 as $dep):?>
                    <tr>
                        <td class="py-3"><?= $dep['id']?></td>
                        <td class="py-3"><?= $dep['nom']?></td>
                        <td class="py-3"><?= $dep['nbresalles']?></td>
                        <td class="py-3"><?= $dep['count(e.id_dep)']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </main>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/c5bebe1cfa.js" crossorigin="anonymous"></script>
    <script>
        let btn=document.querySelector("#btn1");
        let sidebar=document.querySelector(".sidebar");
        let content=document.querySelector(".main-content");
        btn.addEventListener("click",function(){
            sidebar.classList.toggle('active');
            content.classList.toggle('active');
        });
    </script>
</body>
</html>