
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

    <title>¿Quienes somos?</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/quienessomos.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">


    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <header>

        <?php
        $direccion = dirname(__FILE__);
        include $direccion . "/navbar.php";
        ?>

        <h1>¿QUIÉNES SOMOS? </h1>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#edcf58;"></path>
            </svg></div>
    </header>


    <div class="parte2">
        <div class="et_pb_row_0">
            <div class="col">
                <h3><strong>Nuestra misión:</strong> Acompañarte en reforzar tus conocimientos acerca de temas de interés. Fomentando el aprendizaje y promoviendo el talento de nuestros colaboradores</h3>
            </div>
            <div class="col">

                <h3><strong>Nuestra visión:</strong>&nbsp;Ofrecerte una experiencia única de servicio con el mejor talento digital y la última tecnología.</h3>
            </div>

        </div>
    </div>
    <div class="parte3">

        <img src="/img/logo.png" alt="" class="log3">

    </div>

    <div class="container">

        <form>

            <strong>
                <div class="seccion4">
                    <div class="secci">
                        <a class="imagennot"><img src='https://www.pngitem.com/pimgs/m/214-2145632_open-clip-art-transparent-blank-open-book-clipart.png' alt="" class="imagennot" style="margin-right: 10px;  margin-top: 5%; margin-bottom: 5%;"></a><br>

                        <h2>
                            <li></i> Página dedicada para la ayuda de conocimientos hacia los estudiantes
                                y no estudiantes en temas de interés
                                brindando tutoriales garantizando un aprendizaje del 100%.</li>
                        </h2>
                    </div>
                    <div class="secci">
                        <a class="imagennot"><img src='https://images.vexels.com/media/users/3/153396/isolated/preview/3a868c6872c803c567bd867d226be1af-icono-plano-de-interfaz-de-reproductor-de-video-by-vexels.png' alt="" class="imagennot"style="margin-top: -5%;"></a><br>

                        <h2>
                            <li></i>Vídeos tutoriales donde aprenderás desde lo básico del tema, finalizando
                                con un certificado que acredita tu curso con nosotros</li> <br>

                        </h2>
                    </div>
                </div>
                <br><br>

            </strong>
        </form>

    </div>
</body>

</html>