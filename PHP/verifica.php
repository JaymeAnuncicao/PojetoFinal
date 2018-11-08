<?php 





    require_once 'functions.php';

    if(!empty($_POST['Email']) || !empty($_POST['password'])) {
        header('Location: ../Login/login.php');
        exit();
    }
     
    $usuario = mysqli_real_escape_string($conec, $_POST['Email']);
    $senha = mysqli_real_escape_string($conec, $_POST['password']);
     
    $query = "select email,senha from usuario where email = '$email' and senha ='$senha'";
     
    // $result = mysqli_query($conec, $query);
     
    // $row = mysqli_num_rows($result);
     
    if($query && mysqli_num_rows($query) == 1) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../adm-page/adm.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../adm-page/adm.php');
        exit();
    }















    // $usuario_autenticado = false;
	// $usuarios = array(
	// 		array('Email'=>'admin@admin.com',
	// 				'passsword' => 'admin'
	// 			),
	// );


	// foreach($usuarios as $user){
	// 	if($user['Email'] == $_POST['email'] 
	// 		&& $user['passoword'] == $_POST['senha']){
	// 		$usuario_autenticado = true;
	// 	}
	// }


	// if($usuario_autenticado==true){
	// 	echo "<script>alert('Usuário autenticado')</script>";
	// }else{
	// 	header('Location:../adm-page/adm.php');
	// }	
	 
?>