<header>
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4 <?php echo $pg == "index"? "active":""?> " aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4 <?php echo $pg == "sobre-mi"? "active":""?>" href="sobre-mi.php">Sobre Mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4 <?php echo $pg == "proyecto"? "active":""?> " href="proyecto.php">Proyecto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4 <?php echo $pg == "contacto"? "active":""?>" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-rojo" type="submit">Descargar Mi CV <i
                                class="fa-solid fa-file-arrow-down"></i> </a>
                    </div>
                </div>
            </div>
        </nav>

    </header>