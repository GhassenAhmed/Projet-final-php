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
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ajoute Etuduiant</title>
</head>
<body>
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

            <li><a href="">
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

            <li><a href="#">
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
            <h3><span class="user"><i class="fa-solid fa-user"></i></span><?= $_SESSION['utilisateur']?> <span class="arrow"><i class="fa-solid fa-arrow-down"></i></span></h3>
            </div>
    </div> 
           
        <div class="main p-5">
            <main>
            
            <div class="alert alert-success "role="alert">
                 Bienvenue <strong><?= $_SESSION['utilisateur']?></strong> sur votre dashboard !
            </div>
            <div class="retour">
                
            </div>
            <form action="traitement.php" method="post" >
                        <div class="row">
                            <div class="col">
                            <span style='float:right;font-size:50px' ><a href="./ajouteretudiant.php"><i class="bi bi-arrow-return-left"></i></a></span>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label  class="form-label">Cin</label>
                                    <input type="text" class="form-control"   name="cin">
                                    <div class="form-text">Caracteres seulement !</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label  class="form-label">Classe</label>
                                    <input type="text" class="form-control"   name="classe" required>
                                    <div class="form-text">Caracteres seulement !</div>
                                </div>
                            </div>
                               
                        
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label  class="form-label">Nom</label>
                                    <input type="text" class="form-control"   name="nom" requi>
                                    <div class="form-text">Caracteres seulement !</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label  class="form-label">Prenom</label>
                                    <input type="text" class="form-control"   name="prenom" required>
                                    <div class="form-text">Caracteres seulement !</div>
                                </div>
                            </div>
                               
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label  class="form-label">Telephone</label>
                                    <input type="text" class="form-control"    name="tel" required>
                                    <div class="form-text">Caracteres seulement !</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label  class="form-label">Adresse</label>
                                    <input type="text" class="form-control"   name="adresse" required >
                                    <div class="form-text">Caracteres seulement !</div>
                                </div>
                            </div>
                               
                        </div>
                        <div class="row">
                            <div class="col d-flex">
                                <button type="submit" name="ajouter" class="btn btn-primary">ajouter</button>
                            </div>
                        </div>
            </form>
                
                
            
        </div>
        </main>
        
    </div>
                    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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