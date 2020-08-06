<?php
    //busca los datos de nombre, email, asunto y mensaje del formulario de contacto
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $asunto=$_POST['asunto'];
    $mensaje=$_POST['mensaje'];
    // datos para el correo 
    $destinatario= 'funcionalcross01@gmail.com'; // Correo que va a recibir los mensajes del formulario
    $asuntoEnv=$asunto;
    $msj="Enviado por: $nombre \n";
    $msj.="Email: $email \n";
    $msj.="Mensaje: $mensaje";
    //mail la funcion que envia los datos de formulario hacia el gmail
    mail($destinatario,$asuntoEnv,$msj); 
    echo'<script>alert("Mensaje Enviado Exitosamente");</script>';
    //header('Location:contacto.html');
?>