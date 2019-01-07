<?php 
if(isset($_POST['enviar-dados-login']))
{

	include_once("database_connection.php"); 

	$userName = $_POST['txtUserName'];
	$password = $_POST['txtPass'];

	//Validação se os meus campos estão vazios
	if (($userName == "") || ($password == "")) {
		header("Location: login/login.html?error=emptyCampos");
		exit();
	}else{

			$sql = "SELECT * from tb_solicitacao where user_name=? OR password=?;";
			$stmt = mysqli_stmt_init($connect);
			//validação se temos o user name na BD
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: login/login.html?error=sqlError");
				exit();
			}else {

				//ir pegar a Password do user 
				mysqli_stmt_bind_param($stmt,"ss",$userName,$password);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				if ($row = mysqli_fetch_assoc($result)) {
				//Validando a Pass se esta correta!	
				  $pwdCheck = ($row['password'] == $password);
					if($pwdCheck == false){
						header("Location: login/login.html?error=usererrada");							
						exit();
					}else if ($pwdCheck == true) {

						//Inicio da Sessão e falidação dos tipos de User para rediricionar nas areas corretas
						session_start();
						$_SESSION['idUser'] = $row['id_solicitacao'];
						$_SESSION['usuarioNome'] = $row['nome_completo'];
						$tipoUser = $row['tipoUser'];
						if($tipoUser == 'adm'){
							header("Location: adm.php?error=okpassouADM");
							exit();
						}else{
							header("Location: index.php?error=okpassouCLIENTE");
							exit();
						}						
					}					
				}else{
					//Erro caso a senha e o user name estiverem errados 
					header("Location: index.php?passei=useresenhaerrada");
					exit();

				}
				
			}
		}

}//fim do 1º IF

?>