<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    

    #Paso 1: Declaramos las variables

    $nombres = $_POST ['nombres'];
    $apellidos = $_POST ['apellidos'];
    $email = $_POST ['email'];
    $telefono = $_POST ['telefono'];

    #Paso 2: Indicamos el destinatario

    $destinatario = 'giusepixd@gmail.com';
    
    #Paso3: Indicamos el asunto
    
    $asunto = 'Mensaje desde mi web🎈';

    #Paso 4: Diseñamos el cuerpo del mensaje

    $cuerpo = 'Nombres:' . $nombres .'\n';
    $cuerpo .= 'Apellidos:' . $apellidos .'\n';
    $cuerpo .= 'Email:' . $email .'\n';
    $cuerpo .= 'Telefono:' . $telefono . '\n';

    #Paso 5: Progamamos el envio al servidor del correo

    if (mail ($destinatario, $asunto, $cuerpo) {
    
        echo "El mensaje se envio con exito😎"

    } else{

        echo "El mensaje no se puedo enviar😓"
    }

); 



}



?>



<!-- Cuando comienza con el signo de dolar acompañado de una palabra $edad es una variable pero si seguido del dolar hay un guion abajo $_SERVER esta es una funcion -->