<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="sign.css">
    <title>Sign/Log</title>
</head>
<body>

   
    <div class="row">
        <nav class="navbar bg-primary">
            <div class="col container-fluid">
                <div class="container-fluid">
                <h2 > <i class="fa-solid fa-house" style="color:black; padding-right:10px; font-size:30px;"></i>Institut Supérieur des Etudes Technologiques <span id="bizerte">Bizerte</span></h2>
                </div>
            </div>
            <div class="col">
                <h2 id="h2-col2">College<i class="fa-solid fa-screwdriver-wrench"></i></h2>
            </div>
    </div>

    <div class="row">
        <form class="form" action="test_signup.php" method="post" novalidate>
                             <!-- --------------------title --------------------------->

            <div class="mb-3 container-fluid">
                <h3>Inscriez ici</h3>
                <a href="log.phtml"> <i class="fa-solid fa-house" style="color:black; padding-right:10px; font-size:30px;"></i></a></button>
                
            </div>
                            <!-- --------------------email --------------------------->
            <div class="mb-3">
                <label  class="form-label">Utilisateur</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre .</div>
            </div>
                            <!-- --------------------password --------------------------->
            <div class="mb-3">
                <label  class="form-label"  required>Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            <!-- --------------------confirm password --------------------------->
                    <div id="confirm" >
                        <label  class="form-label"  required>confirm mot de passe</label>
                        <input type="password" class="form-control" name="password_confirm" >
                     
                    </div>
            </div>
            <?php if(count($error)>0) :?>
                <div class="alert alert-danger">
                    <?= $error[0] ?>
                </div>
                <?php endif;?>
                            <!-- --------------------check--------------------------->
            
                            <!-- --------------------button --------------------------->
            <button type="submit" name="send" class="btn btn-primary">Inscrit</button>
        </form>
    </div>
    
    
    <script src="https://kit.fontawesome.com/c5bebe1cfa.js" crossorigin="anonymous"></script>
</body>
</html>