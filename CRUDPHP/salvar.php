<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome 		= $_POST["nome"];
			$email 		= $_POST["email"];
			$senha 		= $_POST["senha"];
			$data_nasc  = $_POST["data_nasc"];

			$sql = "INSERT INTO usuarios (nome, email, senha, data_nasc)VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

			$res=$conn->query($sql);

			if ($res==true) {
				print"<script>alert('Cadastro com sucesso');</script>";
				print"<script>location.href='?page=listar';</script>";
			} else {
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;
		case 'editar':

			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$senha = md5($_POST["senha"]);
			$data_nasc = $_POST["data_nasc"];
			$id = $_POST["id"];

			$sql = "UPDATE usuarios SET 
			            nome = ?,
			            email = ?,
			            senha = ?,
			            data_nasc = ?
			        WHERE 
			            id = ?";

			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssssi", $nome, $email, $senha, $data_nasc, $id);
			$stmt->execute();
			$res = $stmt->affected_rows;
			$stmt->close();

			/*$nome 		= $_POST["nome"];
			$email 		= $_POST["email"];
			$senha 		= md5($_POST["senha"]);
			$data_nasc  = $_POST["data_nasc"];
				
				$sql = "UPDATE usuarios SET 
					nome = '{$nome}',
					email= '{$email}',
					senha= '{$senha}',
					data_nasc='{$data_nasc}'

					WHERE 
					id=".$_REQUEST["id"];
					$res=$conn->query($sql);
*/
                    $stmt = $conn->prepare($sql);


			if ($res==true) {
				print"<script>alert('Editado com sucesso');</script>";
				print"<script>location.href='?page=listar';</script>";
			} else {
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

			break;
			

		case 'excluir':

		 $sql="DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

		 $res=$conn->query($sql);

			if ($res==true) {
				print"<script>alert('Cadastro com sucesso');</script>";
				print"<script>location.href='?page=listar';</script>";
			} else {
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
		break;

			
		default:
			break;

	}