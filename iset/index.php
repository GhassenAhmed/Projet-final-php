
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- CSS only -->
    <link  rel="stylesheet" href="index.css">
    <title>Iset</title>
</head>
<body>
    <?php 
     require_once '../connexion db/db_connect.php';
     $userName=$_GET['utilisateur'];
    ?>
   <section>

    <nav  style='background: #dfe9f5;'>
        <ul>
        <li id="h3"><a href="#" class="logo">
                <h3>Gestion d'institut</h3>
                
            </a></li>

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
        </ul>
    </nav>

    <article >
        <div class="row">
            
        </div>
       
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-sm-1">
            <div class="header">
            <h3>Systeme de gestion</h3>
           <span ><i class="fa-regular fa-user"></i> <?=$userName?></span>
            </div>

        </div>
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-sm-1">
            <div class="header">
            <h3>Systeme de gestion</h3>
           <span ><i class="fa-regular fa-user"></i> <?=$userName?></span>
            </div>
            
        </div>
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-sm-1">
            <div class="header">
            <h3>Systeme de gestion</h3>
           <span ><i class="fa-regular fa-user"></i> <?=$userName?></span>
            </div>
            
        </div>
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-sm-1">
            <div class="header">
            <h3>Systeme de gestion</h3>
           <span ><i class="fa-regular fa-user"></i> <?=$userName?></span>
            </div>
            
        </div>
       
    </article>
   </section>

   <footer>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nihil soluta quas hic ab eaque est magnam et repellat sit!
   </footer>

    <script src="https://kit.fontawesome.com/c5bebe1cfa.js" crossorigin="anonymous"></script>
</body>
</html>