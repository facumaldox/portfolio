
<header>
        <div class="container">
            <nav class="navbar navbar-expand-md px-0">
                <button class="navbar-toggler mb-1" type="button" data-toggle="collapse"
                    data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2 text-center">
                        <li class="nav-item pr-5">
                            <a class="nav-link <?php echo ($pg == "index")? "active" : ""?>"" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link <?php echo ($pg == "sobre-mi")? "active" : ""?>"" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link <?php echo ($pg == "proyectos")? "active" : ""?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link <?php echo ($pg == "contacto")? "active" : ""?>"" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>