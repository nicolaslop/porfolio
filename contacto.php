
<?php
$pg = "contacto";

if($_POST){
$nombre = $_POST["txtNombre"];
$correo = ($_POST)["txtCoreo"];
$telefono = ($_POST)["txtTelefono"];
$mensaje = ($_POST)["txtMensaje"];

//variis destinatarios
$para ="lopeznicolas070794@hotmail.com";
$titulo = "recibiste un mensaje de tu web";
//mensaje
$cuerpo = "nommbre:$nombre <br>
            correo:$correo <br>
            telefono:$telefono <br>
            mensaje:$mensaje";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

//enviarlo
//mail($para,$titulo,$cuerpo,$cabecera);
header("lacation:confirmacion-envio.php");

}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="Contacto">
<?php include_once ("header.php");?>
    <main class="Container" ba>
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCoreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/whatsapp"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                            placeholder="Escribe aqui tu mensaje"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco" btn>ENVIAR</button>       
                    </div>

                </form>
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
            <div class="col-12 col-sm-3"><a href="mailto:Contacto@lopeznicolas0794.com.ar">Contacto@lopeznicolas0794.com.ar</a>
            </div>
        </div>
    </footer>
    <div class="Whatsapp pt-3 pb-4 px-4">
        <a href="https://api.whatsapp.com/send?phone=3113312746"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>