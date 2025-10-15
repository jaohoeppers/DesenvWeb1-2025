<?php

    setcookie("usuario","nome_user",time() + 86400 * 30, "/");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php

            if(!isset($_COOKIE["usuario"])){
                echo('O cookie "usuario" não foi definido');
            }else{
                echo('Cookie "usuario" definido <br>');
                echo('O valor é: ' . $_COOKIE["usuario"]);
            }

        ?>
    </body>
</html>