<?php 
  $pg = "index";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Mi Portfolio</title>

</head>

<body id="index">
<?php include_once("header.php");?>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="Imagenes/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web, soy Programador Full stack.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541139359908" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>