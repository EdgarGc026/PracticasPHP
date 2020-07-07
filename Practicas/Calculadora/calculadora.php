<?php 
$errors = "";
$send = "";


if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['list'];

    switch($operacion){
        case 'suma':
            if(!empty($num1) && !empty($num2)){
                $sumar =  $num1 + $num2;
                return $sumar;
                // echo '<div class="alert alert-success">' .'Tu resultado es: ' .$sumar .'</div>';
                // echo $sumar;
            }else{
                $errors .= 'Por favor ingresa ambos numeros <br />';
            }
            
        break;
    
        case 'resta': 
           if(!empty($num1) && !empty($num2)){
                $restar =  $num1 - $num2;
                echo '<div class="alert alert-success">' .'Tu resultado es: ' .$restar .'</div>';
                // echo $restar;
            }else{
                $errors .= 'Por favor ingresa ambos numeros <br />';
            }
        break;
    
        case 'multiplicacion':
            if(!empty($num1) && !empty($num2)){
                $multiplicar =  $num1 * $num2;
                echo '<div class="alert alert-success">' .'Tu resultado es: ' .$multiplicar .'</div>';
                // echo $multiplicar;
            }else{
                $errors .= 'Por favor ingresa ambos numeros <br />';
            }
        break;
    
        case 'division': 
            if(!empty($num1) && !empty($num2)){
                $dividir =  $num1 / $num2;
                // echo $dividir;
                echo '<div class="alert alert-success>' .'Tu resultado es: ' .$dividir .'</div>';
            }else{
                $errors .= 'Por favor ingresa ambos numeros <br />';
            }
        break;
        
        default: 
            echo $errors .= 'Algo paso... Y todo fallo <br />';
    break;
    
    }
}
require('calculadora.view.php');

?>

