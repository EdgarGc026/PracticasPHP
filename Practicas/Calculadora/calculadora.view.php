
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Calculadora</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card mt-2">
                    <div class="card-header">
                        <p class="text-center">Calculadora - <small>Ingresa los dos datos</small></p>
                    </div>

                    <div class="card-body">
                        <form action="calculadora.php" method="post" class="form-group" name="calculadora">
                            <label for="num1">Ingresa el primer numero</label>
                            <input type="number" name="num1" class="form-control" value="<?php if(!$send && isset($num1))echo $num1 ?>">
                            <label for="num2">Ingresa el segundo numero</label>
                            <input type="number" name="num2" class="form-control" value="<?php if(!$send && isset($num2))echo $num2 ?>">

                           <label>Selecciona la oeracion:</label>
                               <select name="list" class="input-group custom-select mt-2">
                                <option name="suma" value="suma">Suma</option>
                                <option name="resta" value="resta">Resta</option>
                                <option name="multiplicacion" value="multiplicacion">Multiplicacion</option>
                                <option name="division" value="division">Division</option>
                            </select>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-sm mt-2" value="Enviar" >
                            </div>    
                            <?php  if(!empty($errors)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $errors; ?>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>