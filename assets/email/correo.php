<?php
    //Correo donde se envia el mensaje
    $destinatario = 'vjohan647@gmail.com';

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Contacto Trabajo Johan Vergara";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>
            alert('correo enviado exitosamente')
        </script>";
    echo "<script>
            setTimeout(\"location.href='./email/index.html'\",1000)
        </script>";
?>