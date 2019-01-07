<?php 
include_once("database_connection.php");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 

//Inicio da captura dos dados do nosso formulario para BD
$nomeEmpresa = filter_input(INPUT_POST,'txtEmpresa',FILTER_SANITIZE_STRING);
$nomeCompleto = filter_input(INPUT_POST,'txtNome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'txtEmail',FILTER_SANITIZE_STRING);
$morada = filter_input(INPUT_POST,'txtMorada',FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,'txtTelefone',FILTER_SANITIZE_STRING);
$iban = filter_input(INPUT_POST,'txtIban',FILTER_SANITIZE_STRING);
$numConta = filter_input(INPUT_POST,'txtNumConta',FILTER_SANITIZE_STRING);
$dataEmprestimo = filter_input(INPUT_POST,'txtDataEmprestimo',FILTER_SANITIZE_STRING);
$dataDevolucao = filter_input(INPUT_POST,'txtDataDevolucao',FILTER_SANITIZE_STRING);
$qtdSolicitada = filter_input(INPUT_POST,'txtValorEmprestimo',FILTER_SANITIZE_STRING);
$numSAP = filter_input(INPUT_POST,'txtSAP',FILTER_SANITIZE_STRING);
$formaPagamento = $_POST['txtTipoPagamento'];
$tipoCliente = "Normal";
$cliente = "cliente";
$estadoClientePagamento = "Nao Pago";
$estadoClienteAprovacao = "Nao Aprovado";

//filter_input(INPUT_POST,'txtTipoPagamento',FILTER_SANITIZE_STRING); Teste pegar valores do forme
/*
echo "Nome: $nomeCompleto <br>";
echo "Empresa: $nomeEmpresa <br>";
echo "Morada: $morada <br>";
echo "Telefone: $telefone <br>";
echo "IBAN: $iban <br>";
echo "Numero da Conta: $numConta <br>";
echo "Data: $dataEmprestimo <br>";
echo "Dat dev: $dataDevolucao <br>";
echo "Numero de SAP: $numSAP <br>";
echo "qtd Solicitada: $qtdSolicitada <br>";*/

//Minha Query para inserção dos valores para BD
$result_solicitacao ="INSERT INTO tb_solicitacao(nome_completo,morada,email,telefone,data_emprestimo,data_devolucao,qtd_emprestada,tipo_cliente,numeroSAP,formaPagamento,nomeEmpresa,data_create,Numero_conta,IBAN,tipoUser,estadoPagamento,estadoAprovacao) VALUES('$nomeCompleto','$morada','$email','$telefone','$dataEmprestimo','$dataDevolucao','$qtdSolicitada','$tipoCliente','$numSAP','$formaPagamento','$nomeEmpresa',NOW(),'$numConta','$iban','$cliente','$estadoClientePagamento','$estadoClienteAprovacao')";

// Não vou fazer dessa forma ---> $statement = mysqli_query($connect,$result_solicitacao);



//Check if everything is ok and insert value on BD
if ($connect->query($result_solicitacao) === TRUE) {
    //echo "New record created successfully";
    header("Location:formSolicitar.php");
} else if(isset($_POST['form_aprovar'])){ 

	//Logica de alteração do Estado do Cliente de Não Aprovado para Aprovado
$id = filter_input(INPUT_POST,'txtId',FILTER_SANITIZE_NUMBER_INT);
$username = filter_input(INPUT_POST,'txtUsername',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'txtSenha',FILTER_SANITIZE_STRING);
$aprovado = "Aprovado";
$sqlUpdate = "UPDATE tb_solicitacao SET estadoAprovacao = '$aprovado', user_name = '$username',password = '$senha' WHERE id_solicitacao = '$id'";
$resultadoQuery = mysqli_query($connect,$sqlUpdate);
	if (mysqli_affected_rows($connect)) {
		//enviar mensagem a dizer que alterou
		header("Location: aprovacaoAdm.php");
	}else
	{
			header("Location: aprovacaoAdm.php");

	}
}else if(isset($_POST['form_divida'])){

$id = filter_input(INPUT_POST,'txtId',FILTER_SANITIZE_NUMBER_INT);
$pagamentoEstado = "Pago";
$sqlUpdate = "UPDATE tb_solicitacao SET estadoPagamento = '$pagamentoEstado' WHERE id_solicitacao = '$id'";
$resultadoQuery = mysqli_query($connect,$sqlUpdate);
	if (mysqli_affected_rows($connect)) {
		//enviar mensagem a dizer que alterou
		header("Location: dividasAdm.php");
	}else
	{
			header("Location: dividasAdm.php");

	}

	
}else{

	header("Location:formSolicitar.php");
    echo "Error: " .$result_solicitacao . "<br>" . $connect->error;

}





$connect->close();



?>