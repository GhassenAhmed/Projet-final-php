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
    <title>Profile</title>
</head>
<body>
    <?php
         require '../../connexion db/db_connect.php';
         $sql1="SELECT * FROM inscrit WHERE utilisateur=?";
         $query1=$pdo->prepare($sql1);
         $query1->execute([$_SESSION['utilisateur']]);
         $profile=$query1->fetch();
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

            <li class="logout"><a href="../../authentification/logout/index.php">
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
            <h3><span class="user"><i class="fa-solid fa-user"></i></span><?= $_SESSION['utilisateur']?><img src="../../authentification/upload/<?= $_SESSION['photo']?>" width="55px" height="55px" style='border-radius:50%;margin-left:2rem;'></img></h3>
            </div>
    </div> 
        <div class="main p-5 ">
            <main>

            <div class="alert alert-success "role="alert">
                 Bienvenue <strong><?= $_SESSION['utilisateur']?></strong> sur votre dashboard !
            </div>

                <div class="row p-5 m-5">
                <form class="form" action="traitement.php" method="post" novalidate enctype="multipart/form-data">
                
                            <div class="row">

                <div class="col">
                                    <!-- -------------------- Nom--------------------------->
                        <div class="mb-3">
                            <label  class="form-label">Nom</label>
                            <input type="text" class="form-control"  pattern="[a-zA-Z0-9]+" title="SVP le nom doit avoir caracteres et nombres seulement" name="nom" required value="<?=$profile['nom'];?>">
                            <div class="form-text">Caracteres seulement !</div>
                        </div>
                </div>

                <div class="col">
                            <!-- -------------------- Prénom--------------------------->
                    <div class="mb-3">
                        <label  class="form-label">Prénom</label>
                        <input type="text" class="form-control"  pattern="[a-zA-Z0-9]+" title="SVP le nom doit avoir caracteres et nombres seulement" name="prenom" value="<?=$profile['prenom']?>"required> <div class="form-text">Caracteres seulement !</div>
                    </div>
                </div>
                </div>


                <!-- --------------------row3 --------------------------->
                <div class="row">

                <div class="col">
                                <!-- --------------------numeroTel--------------------------->
                            <div class="mb-3">
                                <label  class="form-label">Numero Telephone</label>
                                <input type="tel" class="form-control"  pattern="[0-9]{8}" title="SVP le nom doit avoir caracteres et nombres seulement" name="numero" max="8" min="8" required value="<?=$profile['numero']?>">
                                <div  class="form-text">numeros seulement !</div>
                            </div>
                </div>

                <div class="col">
                                    <!-- --------------------Clef d'inscription--------------------------->
                            <div class="mb-3">
                                <label  class="form-label">Clef d'inscription</label>
                                <input type="text" class="form-control"  pattern="[a-zA-Z0-9]+" title="SVP le nom doit avoir caracteres et nombres seulement" name="clef" value="<?=$profile['clef']?>"required>
                                <div class="form-text">Caracteres et numeros seulement !</div>
                            </div>
                </div>
                </div>


                <!-- --------------------row4 --------------------------->
                <div class="row">

                <div class="col">
                                <!-- -------------------- ville--------------------------->
                            <div class="mb-3">
                                <label  class="form-label">Ville</label>
                                <input type="text" class="form-control"  pattern="[a-zA-Z]+" title="SVP le nom doit avoir caracteres et nombres seulement" value="<?=$profile['ville']?>"name="ville">
                                <div class="form-text">Caracteres seulement !</div>
                            </div>
                </div>

                <div class="col">
                                    <!-- -------------------- Pays--------------------------->
                        <div class="mb-3">
                            <label  class="form-label">Pays</label>
                            <input type="text" class="form-control"  pattern="[a-zA-Z]+" title="SVP le nom doit avoir caracteres et nombres seulement" value="<?=$profile['pays']?>"name="pays">
                            <div class="form-text">Caracteres seulement !</div>
                        </div>
                </div>
                </div>

                <!-- --------------------row5 --------------------------->
                <div class="row">

                <div class="col">
                                <!-- --------------------Utilisateur --------------------------->
                            <div class="mb-3">
                                <label  class="form-label">Utilisateur</label>
                                <input type="text" class="form-control"  pattern="[a-zA-Z0-9]+" title="SVP le nom doit avoir caracteres et nombres seulement" name="utilisateur" required value="<?=$profile['utilisateur'];?>">
                                <div id="emailHelp" class="form-text">Caracteres et numeros seulement !</div>
                            </div>
                </div>

                <div class="col">
                        <!-- -------------------- Adresse de courriel--------------------------->
                        <div class="mb-3">
                            <label  class="form-label">Adresse de courriel</label>
                            <input type="text" class="form-control" title="SVP le nom doit avoir caracteres et nombres seulement" name="courriel" value="<?=$profile['courriel']?>"required>
                            <div class="form-text">Caracteres et numeros seulement !</div>
                        </div>
                </div>
                </div>
                <!-- --------------------row5 --------------------------->
                <div class="row">

                        <div class="col">
                                        <!-- --------------------password --------------------------->
                                    <div class="mb-3">
                                        <label  class="form-label"  required>votre nouveau Mot de passe</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="....">
                                    </div>
                        </div>

                        <div class="col">
                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control"  title="SVP ajouter votre image !" name="photo" >
                                   
                                </div> 
                            </div>
                        
                </div>
                            
                            <!-- --------------------button --------------------------->

                <div class="row">
                    <div class="col d-flex">
                    <button type="submit" name="update" class="btn btn-primary">Modifier</button>
                    
                    </div>
                </div>
        </form>
                    
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