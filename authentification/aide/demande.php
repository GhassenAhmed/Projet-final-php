
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
    <link rel="stylesheet" href="style.css">
    <title>Aide</title>
</head>
<body>
    <div class="row row-cols-md-1">
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

    <div class="row d-flex">
        <div class="col">
        
        <form class="form" method="post" action="traitement.php" style='background-color: aliceblue;'>
                             <!-- --------------------title --------------------------->

                            <!-- --------------------utilisateur --------------------------->
            <div class="mb-3">
                <label  class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="....">
                <div  class="form-text">Nous ne partagerons jamais votre nom utilisateur avec quelqu'un d'autre .</div>
                
            </div>
                            <!-- --------------------password --------------------------->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >Email</label>
                <input type="email" class="form-control" name="email" required placeholder="....">
                <div  class="form-text">Nous ne partagerons jamais votre nom utilisateur avec quelqu'un d'autre .</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >Cin</label>
                <input type="text" class="form-control" name="cin" required placeholder="...."> 
                <div  class="form-text">Nous ne partagerons jamais votre nom utilisateur avec quelqu'un d'autre .</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"  >Sujet</label>
                <textarea  class="form-control" name="sujet" required placeholder="...."></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >Message</label>
                <textarea  class="form-control" name="message" required placeholder="...."></textarea>
            </div>
                            <!-- --------------------check--------------------------->
           
                            <!-- --------------------button --------------------------->
            <button type="submit" class="btn btn-primary" name="send">Envoyer</button>
        </form>
        
        </div>
        
    </div>
    
    
    <script src="https://kit.fontawesome.com/c5bebe1cfa.js" crossorigin="anonymous"></script>
</body>
</html>
