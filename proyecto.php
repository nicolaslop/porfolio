
<?php
$pg = "proyecto";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyecto">
<?php include_once ("header.php");?>

    <main class="Container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyecto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que he realizado</p>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4 p-3">
                    <div class="proyecto">
                        <img src="imagenes/abmclientes.png" alt="abm clientes" class="img-fluid">
                        <h2 class="p-3 d-block">ABM CLIENTES</h2>
                        <p class="p-3 pb-5 d-block">Alta,baja y modificacion de un registro de cliente. Realizado en
                            HTML,CSS,PHP,BOOSTRAP, y JSON.</p>
                        <div class="row my-5">
                            <div class="col-6 ps-4">
                                <a href="" target="-blank" class="btn btn.rojo">ver online</a>
                            </div>
                            <div class="col-6 text-center link">
                                <a href="" target="blank">codigo fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 p-3">
                    <div class="proyecto">
                        <img src="imagenes/abmventas.png" alt="abm clientes" class="img-fluid">
                        <h2 class="p-3 d-block">SISTEMA DE GESTION DE VENTAS</h2>
                        <p class="p-3 pb-5 d-block">Alta,baja y modificacion de un registro de cliente. Realizado en
                            HTML,CSS,PHP,BOOSTRAP, y JSON.</p>
                        <div class="row my-5">
                            <div class="col-6 ps-4">
                                <a href="" target="-blank" class="btn btn.rojo">ver online</a>
                            </div>
                            <div class="col-6 text-center">
                                <div class="link">
                                    <a href="" target="blank" class="link" >codigo fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 p-3">
                    <div class="proyecto">
                        <img src="imagenes/proyecto-integrador.png" alt="abm clientes" class="img-fluid">
                        <h2 class="p-3 d-block">PROYECTO INTEGRADOR</h2>
                        <p class="p-3 pb-5 d-block">Proyecto full stack desarrolado en
                            PHP,LARAVEL,JAVASCRIPT,JQUERY,AJAX,HTML,CSS. mercado pagocon panel administrador,gestor de
                            usuario,modulo de permiso y funcionalidades a fines</p>
                        <div class="row my-5">
                            <div class="col-6 ps-4">
                                <a href="" target="-blank" class="btn btn.rojo">ver online</a>
                            </div>
                            <div class="col-6 text-center link">
                                <a href="" target="blank">codigo fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="Container mt-5">
        <div class="row">
            <div class=" Redes col-12 col-sm-3 ">
                <a href="https://github.com/"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>

            </div>
            <div class="col-12 col-sm-3">Sponsor <a href="https://depcsuite.com">depcsuite</a></div>
            <div class="col-12 col-sm-3"><a
                    href="mailto:Contacto@lopeznicolas0794.com.ar">Contacto@lopeznicolas0794.com.ar</a>
            </div>
        </div>
    </footer>
    <div class="Whatsapp pt-3 pb-4 px-4">
        <a href="https://api.whatsapp.com/send?phone=3113312746"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>
