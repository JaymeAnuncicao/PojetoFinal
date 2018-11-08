<?php



?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/php/CSS/adm   .css">
    <?php require '../arquivosRequire/header.php';?>
</head>
<body>
    <?php require '../arquivosRequire/navbar.php';?>

    <div class="row container">
        <div class="col-6 container mt-5 ">
            <button class="btn-primary text-light mt-5 marg" >Serviço em Andamento</button>
        </div>
        <div class=" col-6 ">
            <div class="bg-primary text-center">
                <h4 class="">Adicionar Noticia</h4>
                <form action="../PHP/cadas-add.php"  method="post">
                    <input type="text" class="" name="titulo"><br>
                    <textarea name="texto" class=""></textarea>
                    <input type="submit" name="enviar">
                </form>
            </div>
        </div>
    </div>

    
    <?php require '../arquivosRequire/footer.php';?>   
</body>
</html>