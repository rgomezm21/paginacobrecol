<?php
    $destinario = 'rauleduard132@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde el sitio web";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinario, $email, $mensaje, $header);
    echo "<script>setTimeout(\"location.href='index.html\",1000)</script>";

?>