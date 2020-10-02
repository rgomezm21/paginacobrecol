<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobrecol</title>
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="libreriajquery/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.html">
            <img src="LOGO COBRECOL.jpg" alt="imagen logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="index.html">Inicio</a>
                <a class="nav-item nav-link active" href="nosotros.html">Nosotros<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="servicios.html">Servicios</a>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="imagen inicio animate__animated animate__backInLeft">
            <img src="img/cobrecolreunion.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div id="animado" class="h1">
            <div align="center" class="animate__animated animate__backInLeft">
                <img src="img/image.png" alt="cobrecol">
            </div>
            <h1 class="animate__animated animate__backInLeft">Contactanos y veras que somos tu mejor opción</h1>
        </div>
        <hr>
        <div class="datos" ">
            <p class="text-justify ">TEL: 3145651210 - 3145294438 </p>
            <p class="text-justify ">EMAIL: RECICOL.LALOMA@HOTMAIL.COM</p>
            <p class="text-justify "> BARRIO: LA ESPERANZA AV LA VARIANTE Nº 17-73 LA LOMA DE CALENTURA (CESAR).</p>
        </div>
        <hr>

        <center>
        <?php 
$myemail = 'rauleduard132@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
            <div class="formulario ">
            <form method="POST " action="enviar.php ">
                <div class="form-group ">
                    <label for="exampleFormControlInput1 ">Nombre completo</label>
                    <input type="text " name="nombre " class="form-control " id="exampleFormControlInput1 ">
                </div>
                <div class="form-group ">
                    <label for="exampleFormControlInput1 ">Email</label>
                    <input type="email " name="email " class="form-control " id="exampleFormControlInput1 " placeholder="name@example.com ">
                </div>
                <div class="form-group ">
                    <label for="exampleFormControlTextarea1 ">Mensaje</label>
                    <textarea class="form-control " name="mensaje " id="exampleFormControlTextarea1 " rows="3 "></textarea>
                </div>
                <button type="submit " class="btn btn-success ">Enviar</button>
            </form>
        </div>
        </center>
    </div>


    <nav class="navbar navbar-light bg-light ">
        <img src="LOGO COBRECOL.jpg " alt="logo cobrecol ">
        <p class="copyright ">&copy; Todos los derechos reservados a COBRECOL S.A.S. </p>
    </nav>
</body>

</html>