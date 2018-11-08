<?php 
	require_once '../PHP/init.php';
	if(isset($_POST['enviar']) && !empty($_POST['senha'])){
		echo "<script>alert('Pedido enviado com sucesso!');</script>";

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
		$conec = db_connect();
		
		$query = "insert INTO usuarios (nome,email,senha,telefone) VALUES (:nome,:email,:senha,:telefone);";

		$stmt= $conec->prepare($query);
		$stmt->bindValue(':nome',$nome);
		$stmt->bindValue(':email',$email);
		$stmt->bindValue(':telefone',$telefone);
		$stmt->bindValue(':senha',$senha);
		$stmt->execute();
	}
?>







<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require '../arquivosRequire/header.php';?>
    <link rel="stylesheet" href="/php/CSS/styleLogin.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php';?>
    <div class="container col-lg-6 mt-5 align-middle geral">
        <form action="../PHP/verifica.php" class="z-depth-3 rounded text-center blue darken-4 p-5 divLogin">
            <p class="h4 text-white mb-4">Login</p>
                <input type="email" id="defaultLoginFormEmail" name="Email" class="form-control mb-4" placeholder="E-mail">
    
                <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">
                <input class="btn rounded black btn-block my-4" type="submit" value="Entrar">
                <p class="text-light">Não tem conta?
                <a class="text-white" data-toggle="modal" data-target="#modalCadastro">Cadastre-se</a>
            </p>
        </form>
        
        
    </div>

    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog">
    
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="text-center primary-color-dark p-5" action="<?php $_SERVER["PHP_SELF"]?>"method="post">
                    <input type="text" class="form-control mb-4" name="nome">
                    <input type="emial" class="form-control mb-4" name="email">
                    <input type="text" class="form-control mb-4" name="telefone">
                    <input type="password" class="form-control mb-4" name="senha">
                    <input type="submit" class="btn col-12 btn-black"  name="enviar">
                </form>
                <!-- <form class="text-center primary-color-dark p-5" method="post" action="login.php">
                    <h4 class="modal-title text-white w-100 font-weight-bold">Cadastre-se</h4>
                    <br>
                    <input type="text"  name="nome" class="form-control mb-4" placeholder="Nome">
                    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
                    <input type="text"  name="telefone" class="form-control mb-4" placeholder="Telefone">
                    <input type="password" name="senha" class="form-control mb-4" placeholder="Senha">
                    <input class="btn col-12 btn-black" value="Confirmar" type="submit">
                </form> -->
            </div>
        </div>
    </div>

    <?php require '../arquivosRequire/footer.php';?>
</body>
</html>