<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="contacto">
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md px-0">
                <button class="navbar-toggler mb-1" type="button" data-toggle="collapse"
                    data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto text-center">
                        <li class="nav-item pr-5">
                            <a class="nav-link  " href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link " href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link " href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>


        </div>
        <div class="row">
            <div class="col-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por Whatsapp</p>
            </div>
            <div class="col-6">
                <form action="" method="POST"></form>
                <div class="mb-3">
                    <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre y Apellido"
                        class="form-control shadow" shadow>
                </div>
                <div class="mb-3">
                    <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo"
                        class="form-control shadow">
                </div>
                <div class="mb-3">
                    <input type="tel" id="txtTelefono" name="txtTelefono" placeholder="Teléfono/Whatsapp"
                        class="form-control shadow">
                </div>
                <div class="mb-3">
                    <textarea id="txtMensaje" name="txtMensaje" placeholder="Escribe aquí el mensaje"
                        class="form-control shadow"></textarea>
                </div>
                <div class="mb-3">
                    <button id="btnEnviar" name="btnEnviar" class="btne px-4">ENVIAR</button>
                </div>
            </div>
        </div>
        </div>
    </main>

    <div class="container">
        <div class="row mb-4">
        </div>
    </div>
    <div class="container">
        <div class="row mb-4">
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    <a href="https://github.com" target="_blank" title="Github" style="color: white;"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in" style="color: white;"></i></a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE" class="sponsor" style="color: white;">DePC Suite</a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    <a href="mailto:fmaldonado.fem@gmail.com" style= "color: white;">fmaldonado.fem@gmail.com</a>
                </div>
            </div>
        </div>
    </footer>
    <div class="whatsapp1" style=" background-color:#370a6d; color: white ; width: 60px; border-top-left-radius: 10px ;
        border-top-right-radius: 10px ; font-size: 30px; text-align: center; padding: 8px 0 15px 0; right:80px; position: fixed; bottom: 0px;">
        <a href="https://api.whatsapp.com/send?phone=1139359908" title="Whatsapp"><i class="fab fa-whatsapp" style="color: white;"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>