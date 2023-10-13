<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/IconRushCar.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>


    <section>
        <?php
           echo '<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
           <div class="container-fluid">
               <a class="navbar-brand" href="#">Navbar</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="contacto.php">CONTACTO</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="nosotros.php">NOSOTROS</a>
               </li>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="#">Action</a></li>
                               <li><a class="dropdown-item" href="#">Another action</a></li>
                               <li>
                                   <hr class="dropdown-divider">
                               </li>
                               <li><a class="dropdown-item" href="#">Something else here</a></li>
                           </ul>
                       </li>
                      
                   </ul>
                   <form class="d-flex" role="search">
                       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                       <button class="btn btn-outline-success" type="submit">Search</button>
                   </form>
               </div>
           </div>
           </nav>';
        ?>
        
    </section>

    <div style="margin: 5% 16%">

    <h1 style="text-align:center">INTEGRANTES DEL PROYECTO</h1>

    <section class="row bg-secondary text- center justify-content-center aling-items-center gap-3">
        <?php
            include('./integrantesarray.php');

            for ($i=0; $i < count($integrantes); $i++){
                echo'
                <div style="padding: 80px;">
                <div class="card-text" style="width: 10rem; height: 40 rem; border: 7px solid #2C3434; border-radius: 15px;">
                    <img src=" ' .$integrantes[$i]['img'] .' " class="card-img-top">
                    <div class="card-body;" style="background-color: #0f1212; padding: 5%">
                        <hr>
                        <h2 class="card-title" style="color: white; text-align: center;">' .$integrantes[$i]['nombres'] .'</h3>
                        <h3 class="card-title" style="color: white; text-align: center;">' .$integrantes[$i]['apellidos'] .'</h3>
                        <br><hr>
                        <p>' .$integrantes[$i]['encargo'] .'</p><hr>
                    </div>
                </div>
                </div>
              ';
            }
        ?>

        
    </section>
</div>

    <footer>
            <ul>
                <li class="iconos"><a href="https://www.youtube.com/"><img src="img/YouTube.png"></a></li>
                <li class="iconos"><a href="https://www.facebook.com/"><img src="img/Facebook.png"></a></li>
                <li class="iconos"><a href="mailto:andrea.poma@iestpmonfortianos.edu.pe"><img src="img/Correo.png"></a></li>
                <li class="iconos"><a href="https://www.instagram.com/"><img src="img/Instagram.png"></a></li>
            </ul>
        </footer>
    
    
</body>
</html>