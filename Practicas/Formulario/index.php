<?php 
$errors = "";
$send = "";

// valida los datos que se envian a la hora de pulsar submit
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validando el nombre, que este correcto y evitando inyeccion de codigo
    if(!empty($name)){
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        
    }else{
        $errors .='Por favor ingresa un nombre <br/>';
    }

    // Validando que el correo sea correcto y no sufras inyeccion
    if(!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors .= 'Por favor ingresa un correo valido <br/>';
        }

    }else{
        $errors .= 'Por favor ingresa un correo <br/>';
    }

    // validar los mensajes
    if (!empty($message)) {
        $message = htmlspecialchars($message);
        $message = trim($message);
        $message = stripslashes($message);
    }else{
        $errors .= 'Por favor ingresa el mensaje a enviar <br/>';
    }

    // validar que no haya errores
    if(!$errors){
        $sendTo = 'edgar@email.com';
        $NameEmail = 'Correo enviado';
        $messageEmail = "De: $name \n";
        $messageEmail .= "Correo: $email \n";
        $messageEmail .= "Mensaje:" .$message;

        //Enviarlos por correo
        //mail($sendTo, $NameEmail, $messageEmail);
        $send = true;
    }
}

require('index.view.php');

?>