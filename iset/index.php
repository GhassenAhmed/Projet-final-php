<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="accueil.css">
    <title>Accueil</title>
</head>
<body>
    <?php 
     require_once '../connexion db/db_connect.php';
     $userName=$_GET['utilisateur'];
    ?>
    <div class="sidebar">
        <div class="sidebar-title">
            <h3>Gestion Institut</h3>
        </div>
        <div class="sidebar-menu">
        <ul>
            <li><a href="#">
                <i class="fas fa-home"></i>
                <span class="nav-item">Accueill</span>
            </a></li>

            <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="nav-item">Profile</span>
            </a></li>

            <li><a href="#">
                <i class="fas fa-wallet"></i>
                <span class="nav-item">Departement</span>
            </a></li>

            <li><a href="#">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Etudiant</span>
            </a></li>

            <li><a href="#">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Enseingant</span>
            </a></li>

            <li><a href="#">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Parametres</span>
            </a></li>

            <li><a href="#">
                 <i class="fas fa-question-circle"></i>
                <span class="nav-item">Aide</span>
            </a></li>

            <li class="logout"><a href="" >
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
            </a></li>
        </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1><span class="menu-icon"><i class="fa-solid fa-bars"></i></span>Dashboard</h1>
            <h3><span class="user"><i class="fa-solid fa-user"></i></span><?= $userName?> <span class="arrow"><i class="fa-solid fa-arrow-down"></i></span></h3>
        </header>
        <div class="main">
            <p class="alert"><strong>Bienvenue a votre admin <span class="dash-p">Dashboard</span></strong> <span class="close"><i class="fa-solid fa-xmark"></i></span></p>
           
        </div>
    </div>
    
    
    <script src="https://kit.fontawesome.com/c5bebe1cfa.js" crossorigin="anonymous"></script>
</body>
</html>