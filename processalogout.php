<?php 
if(isset($_POST['enviar-dados-login'])){

include_once("database_connection.php"); 

$userName = $_POST['txtUserName'];
$password = $_POST['txtPass'];

$sql = "SELECT user_name from tb_solicitacao where user_name=?";
$stmt = mysli_stmt_init($connect);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("query selecionado");
		exit();
	}
	else {
		//nota a considerar vamlores que devem corresponder com o base o type de parametro --> String = S, Integer = i, Blob = b, Double = d
		mysqli_stmt_bind_param($stmt,"s",$userName);
		mysqli_stmt_execute($stmt);
		mysql_stmt_store_result($stmt);
		$resultcheck = mysqli_stmt_num_rows($stmt);
		if ($resultcheck > 0) {
			// code...
			exit();
		}else
		{
			$sql = "INSERT INTO tb_solicitacao (user_name,password) VALUES(?)";
			$stmt = mysli_stmt_init($connect);
			if(!mysqli_stmt_prepare($stmt,$sql)){
					header("query do Inserte selecionado");
					exit();
			}els{

				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt,"ss",$userName,$hashedPwd);
				mysqli_stmt_execute($stmt);
				header("string");
				exit();

			} 
		}

		}

		mysqli_stmt_close($stmt);
		mysqli_close($connect);

	}


?>