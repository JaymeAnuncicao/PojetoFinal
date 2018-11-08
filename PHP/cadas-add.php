<?php 
	require_once '../PHP/init.php';
	if(isset($_POST['enviar']) && !empty($_POST['texto'])){
		echo "<script>alert('Pedido enviado com sucesso!');</script>";

		$titulo = $_POST['titulo'];
		// $data = $_POST['data'];
		$texto = $_POST['texto'];
		$conec = db_connect();
		
		$query = "insert INTO noticia (titulo,texto) VALUES (:titulo,:texto);";

		$stmt= $conec->prepare($query);
		$stmt->bindValue(':titulo',$titulo);
		// $stmt->bindValue(':data',$data);
		$stmt->bindValue(':texto',$texto);
		$stmt->execute();
	}
?>

