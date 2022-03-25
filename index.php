<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Uniemy</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link href="utils/fontawesome/css/all.css" rel="stylesheet">


</head>

<body>
    <?php
    $direccion = dirname(__FILE__);
    require_once $direccion . "/navbar.php";
    ?>
    <div class="flexContainer">

 <main class="maxWidth">
  
            <div class="seccion">

            
            <div class="card">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2" class="active"></li>
      </ol>
      <?php
                    require_once $direccion . "/php/index/datos.php";
                    foreach ($rand as $mostrar) {
                    ?>
                    
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" height="400"src="img/bienvenido0.png">
         
        </div>
        <div class="carousel-item">
        <a href="verCurso.php?curso=<?php echo $mostrar["idCurso"]; ?>">
                <img class="d-block w-100" height="400" src="<?php echo $mostrar['imagen']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                    <h4><?php echo $mostrar['titulo']; ?></h4>
                    <p class="AllTitle-module_author_2rV8i">Valoración de <?php echo $mostrar['calificacion']; ?>%</p>
                    </div>
                    </a>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" height="400"src="img/bienvenido.png">
         
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a> <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
             <?php
                    }
                    ?>
                 
      </div>
     </div>
     </div>
                <h1 class="tituloSeccion" align="center"> CURSOS NUEVOS </h1>
                <div class="gridContainer">
                    <?php
                    $direccion = dirname(__FILE__);
                    require_once $direccion . "/php/index/datos.php";
                    foreach ($nuevos as $mostrar) {
                    ?>
                        <div class="tarjeta">
                            <a href="verCurso.php?curso=<?php echo $mostrar["idCurso"]; ?>">
                                <div class="tarjetaCuerpo">
                                    <img alt="Imagen de <?php echo $mostrar["titulo"]; ?>" class="tarjetaImagen" src="<?php echo $mostrar['imagen']; ?>">
                                    <p class="tituloTarjeta"><?php echo $mostrar["titulo"]; ?></p>
                                    <p class="autorTarjeta"><?php echo $mostrar["nombre"]; ?></p>
                                    <?php if ($mostrar["costo"] != 0) {
                                    ?>
                                        <p class="precioTarjeta"><i class="fas fa-dollar-sign"><?php echo number_format($mostrar["costo"], 2); ?></i></p>
                                    <?php
                                    } else {
                                    ?>
                                        <p class="precioTarjeta">Gratis</p>
                                    <?php
                                    }
                                    if ($mostrar["calificacion"] != NULL) {
                                    ?>
                                        <p class="valTarjeta"><i class="far fa-thumbs-up"><?php echo $mostrar["calificacion"]; ?>%</i></p>
                                    <?php
                                    } else {
                                    ?>
                                        <p class="valTarjeta">Sin reseñas</p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="seccion">
                <h1 class="tituloSeccion"  align="center"> MEJORES CALIFICADOS </h1>
                <div class="gridContainer">
                    <?php foreach ($mejorCalif as $mostrar) { ?>
                        <div class="tarjeta">
                            <a href="verCurso.php?curso=<?php echo $mostrar["idCurso"]; ?>">
                                <div class="tarjetaCuerpo">
                                    <img alt="Imagen de <?php echo $mostrar["titulo"]; ?>" class="tarjetaImagen" src="<?php echo $mostrar['imagen']; ?>">
                                    <p class="tituloTarjeta"><?php echo $mostrar["titulo"]; ?></p>
                                    <p class="autorTarjeta"><?php echo $mostrar["nombre"]; ?></p>
                                    <?php if ($mostrar["costo"] != 0) {
                                    ?>
                                        <p class="precioTarjeta"><i class="fas fa-dollar-sign"><?php echo number_format($mostrar["costo"], 2); ?></i></p>
                                    <?php
                                    } else {
                                    ?>
                                        <p class="precioTarjeta">Gratis</p>
                                    <?php
                                    }
                                    if ($mostrar["calificacion"] != NULL) {
                                    ?>
                                        <p class="valTarjeta"><i class="far fa-thumbs-up"><?php echo $mostrar["calificacion"]; ?>%</i></p>
                                    <?php
                                    } else {
                                    ?>
                                        <p class="valTarjeta">Sin reseñas</p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="seccion">
                <h1 class="tituloSeccion"  align="center"> LOS MÁS VENDIDOS </h1>
                <div class="gridContainer">
                    <?php
                    foreach ($masVendido as $mostrar) {
                    ?>
                        <div class="tarjeta">
                            <a href="verCurso.php?curso=<?php echo $mostrar["idCurso"]; ?>">
                                <div class="tarjetaCuerpo">
                                    <img alt="Imagen de <?php echo $mostrar["titulo"]; ?>" class="tarjetaImagen" src="<?php echo $mostrar['imagen']; ?>">
                                    <p class="tituloTarjeta"><?php echo $mostrar["titulo"]; ?></p>
                                    <p class="autorTarjeta"><?php echo $mostrar["nombre"]; ?></p>
                                    <?php if ($mostrar["costo"] != 0) {
                                    ?>
                                        <p class="precioTarjeta"><i class="fas fa-dollar-sign"><?php echo number_format($mostrar["costo"], 2); ?></i></p>
                                    <?php
                                    } else {
                                    ?>
                                        <p class="precioTarjeta">Gratis</p>
                                    <?php
                                    }
                                    if ($mostrar["calificacion"] != NULL) {
                                    ?>
                                        <p class="valTarjeta"><i class="far fa-thumbs-up"><?php echo $mostrar["calificacion"]; ?>%</i></p>
                                    <?php
                                    } else {
                                    ?>
                                        <p class="valTarjeta">Sin reseñas</p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </main>

        <aside class="izquierda">

            <div class="seccion">
                <h1 align="center" class="tituloSeccion random"> Descubre</h1>
                <div class="cuerpo">
                    <?php
                    foreach ($rand as $mostrar) {
                    ?>
                        <div>
                            <a href="verCurso.php?curso=<?php echo $mostrar["idCurso"]; ?>">
                                <div>
                                    <img alt="Lea el manga <?php echo $mostrar['titulo'] ?> totalmente gratis" src="<?php echo $mostrar['imagen'] ?>">
                                    <p><?php echo $mostrar['titulo'] ?></p>
                                    <p><?php echo $mostrar['nombre'] ?></p>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </aside>

    </div>
    <?php
    $direccion = dirname(__FILE__);
    require_once $direccion . "/librerias.php";
    ?>
</body>

</html>