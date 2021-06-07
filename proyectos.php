<?php 
  $pg = "proyectos";

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
    <link rel="stylesheet" href="css/estilos.css">
    <title>Proyectos</title>
</head>

<body id="proyectos">
<?php include_once("header.php");?>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Los siguientes son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-12 p-4">
                <div class="row card">
                    <div class="col-12 py-3">
                        <img src="Imagenes/abmclientes.png" alt="" class="img-fluid">
                        <h2 class="pt-3 pb-3">ABM CLIENTES</h2>
                        <div class="col-12 py-3 mb-5">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json</p>
                        </div>
                    </div>
                    <div class="row p-3 pb-0 text-center">
                        <div class="col-6 p-3">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-3">
                            <a href="" class="fuente">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-4">
                <div class="row card">
                    <div class="col-12 py-3">
                        <img src="Imagenes/abmventas.png" alt="" class="img-fluid">
                        <h2 class="pb-3 pt-3">SISTEMA DE GESTIÓN DE VENTAS</h2>
                    <div class="col-12 py-3 mb-5">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                </div>
                    <div class="row  p-3 pb-0 text-center">
                        <div class="col-6 p-3">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-3">
                            <a href="" class="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-4">
                <div class="row card">
                    <div class="col-12 py-3">
                        <img src="Imagenes/sistema-admin.png" alt="" class="img-fluid">
                        <h2 class="pt-3 pb-3">PROYECTO INTEGRADOR</h2>
                        <div class="col-12 py-3 mb-5">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                        </div>
                    </div>
                    <div class="row p-3 pb-0 text-center">
                        <div class="col-6 p-3">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-3">
                            <a href="" class="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once("footer.php"); ?>
    <div class="whatsapp1" style=" background-color:#370a6d; color: white ; width: 60px; border-top-left-radius: 10px ;
        border-top-right-radius: 10px ; font-size: 30px; text-align: center; padding: 8px 0 15px 0; right:80px; position: fixed; bottom: 0px;">
        <a href="https://api.whatsapp.com/send?phone=1139359908" title="Whatsapp"><i class="fab fa-whatsapp" style="color: white;"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>