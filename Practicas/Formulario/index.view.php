<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Formulario Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" class="form-control" id="namne" name="name" value="<?php if(!$send && isset($name))echo $name ?>" placeholder="Nombre">
            <input type="email" class="form-control" id="email" name="email" value="<?php if(!$send && isset($email))echo $email ?>" placeholder="Correo">
            <textarea name="message" class="form-control" id="message" placeholder="Mensaje"><?php if(!$send && isset($message))echo $message ?></textarea>

            <?php  if(!empty($errors)): ?>
                <div class="alert error">
                <?php echo $errors?>
            </div>

            <?php elseif($send): ?>
                <div class="alert success">
                    <p>Enviado correctamente</p> 
                </div>
            <?php endif; ?>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
</body>
</html>