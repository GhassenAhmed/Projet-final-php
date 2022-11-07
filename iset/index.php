
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link  rel="stylesheet" href="index.css">
    <title>Iset</title>
</head>
<body>
    <?php 
    $utilisateur=$_GET['utilisateur'];
   var_dump($utilisateur);
    
    ?>
    <div class="row">
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <h3>School Management</h3>
                    
                </a></li>

                <li><a href="#">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">home</span>
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
                    <span class="nav-item">Settings</span>
                </a></li>

                <li><a href="#">
                     <i class="fas fa-question-circle"></i>
                    <span class="nav-item">Help</span>
                </a></li>

                <li><a href="" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
            </ul>
        </nav>
    </div>
    </div>
    <script src="https://kit.fontawesome.com/c5bebe1cfa.js" crossorigin="anonymous"></script>
</body>
</html>