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
    
   <!-- <header class="position-relative w-100">
            <h1><label for="nav-toggle"><i class="fa-solid fa-bars" style='padding-right:10px;'></i></label>Dashboard</h1>
            <h3><span class="user"><i class="fa-solid fa-user"></i></span><?= $userName?> <span class="arrow"><i class="fa-solid fa-arrow-down"></i></span></h3>
        </header>-->
    <div class="main-content">
            <div class="p-3 header_admin " style='background:#fff;'> 
                <button class="btn btn-outline-dark mx-1"  id="btn1"><i class="fa-solid fa-list"></i></button>
                <div class="float-end">
            <h3><span class="user"><i class="fa-solid fa-user"></i></span><?= $userName?> <span class="arrow"><i class="fa-solid fa-arrow-down"></i></span></h3>
            </div>
    </div> 
        <div class="main p-5 m-5">
            <main>
                <div class="row" >

                    <div class="col-md-4 px-3 py-4">
                        <!--- Profile card------------------>
                        <div class="card" style="width: 18rem;">
                            <img src="../assets/profile2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Profile</h5>
                                <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-4">
                        <!--- Departement card card------------------>
                            <div class="card" style="width: 18rem;">
                                <img src="../assets/departement2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Departement</h5>
                                    <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 py-4">
                        <!--- Etuduiant card card------------------>
                            <div class="card" style="width: 18rem;">
                                <img src="../assets/etudiant2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Etuduiant</h5>
                                    <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row" >

                    <div class="col-md-4 px-3">
                        <!--- Enseignant card------------------>
                        <div class="card" style="width: 18rem;">
                            <img src="../assets/prof.jpg" class="card-img-top" height='285px'>
                            <div class="card-body">
                                <h5 class="card-title">Profile</h5>
                                <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--- Parametre card card------------------>
                            <div class="card" style="width: 18rem;">
                                <img src="../assets/parametre.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Departement</h5>
                                    <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <!--- aide card------------------>
                            <div class="card" style="width: 18rem;">
                                <img src="../assets/help.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Etuduiant</h5>
                                    <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                    </div>
                </div>
               
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