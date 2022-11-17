<?php

<div class="row" style='margin-top:60px;margin-left:50px'>
<div class="col-sm col-md-3 col-xxl-3">
    <div class="card" style="width: 15rem;height:20rem;text-align:center;">
        <img src="../assets/departement.jpg" class="card-img-top" height="300px">
            <div class="card-body">
                <h5 class="card-title">Departement</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    </div>
</div>

<div class="col-sm">
    <div class="card" style="width: 15rem;height:20rem;text-align:center;">
            <img src="../assets/etudiants.jpg" class="card-img-top" height="300px" >
            <div class="card-body">
                <h5 class="card-title">Etudiants</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    </div>
</div>

<div class="col-xl-3">
         <div class="card" style="width: 15rem; height:20rem;text-align:center;">
            <img src="../assets/prof.jpg" class="card-img-top" height="300px">
            <div class="card-body">
                <h5 class="card-title">Enseingants</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
</div>

<div class="col-xl-3">
         <div class="card" style="width: 15rem; height:20rem;text-align:center;">
            <img src="../assets/prof.jpg" class="card-img-top" height="300px">
            <div class="card-body">
                <h5 class="card-title">Enseingants</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
</div>

<div class="col-xl-3">
         <div class="card" style="width: 15rem; height:20rem;text-align:center;">
            <img src="../assets/prof.jpg" class="card-img-top" height="300px">
            <div class="card-body">
                <h5 class="card-title">Enseingants</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
</div>
</div>










/***css */
*{
    box-sizing: border-box;
}
section {
    display: -webkit-flex;
    display: flex;
  }
  nav {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    background: #dfe9f5; 
    padding-bottom: 90px;
    
  }
  nav ul li a{
    text-decoration: none;
    color: #002B5B;
    
  }
  nav ul li{
    list-style-type: none;
    padding-bottom: 10px;
    margin: 10px 10px 10px 10px ;
    font-size: 20px;
    padding-bottom: 30px;
  }
  nav ul li h3{
    border-bottom: 1px outset rgba(48, 45, 45, 0.586);
    border-bottom-width: medium;
   font-size: 20px;
   text-align: justify;
   padding-bottom: 10px;
   border-spacing: 5px;
   margin-left: 5px;
   font-family:Verdana, Geneva, Tahoma, sans-serif;
   letter-spacing: 1px;
   text-align: center;
   font-weight: bolder;
  }
  #h3{
    margin-right: 95px;
  }

  article {
    -webkit-flex: 3;
    -ms-flex: 3;
    flex: 3;
    background-color: #fff;
    padding: 10px;
  }
  .logout{
    margin-bottom: 30px;
  }
  article h3{
    font-size: 20px;
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-style: oblique;
    font-weight: bolder;
    color: #2B4865;
    margin-top: 10px;
  }

  @media (max-width: 600px) {
    section {
      -webkit-flex-direction: column;
      flex-direction: column;
      font-size: 10px;
    }
  }


  /****html */

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
       
       <div class="header">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio laudantium provident ratione.
       </div>
       <div class="nav">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ipsum corrupti eius harum saepe ea!</div>
       
    </article>
   </section>

   <footer>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nihil soluta quas hic ab eaque est magnam et repellat sit!
   </footer>