<?php
/**VALIDAÇÃO DOS DADOS RECEBIDOS DO FORMULÁRIO **/
if($_REQUEST['nome_cliente'] == ""){
	echo "O campo Nome não pode ficar vazio.";
	exit;
}

if(strlen($_REQUEST['cpf_cliente']) != 11){
	echo "O campo CPF precisa ter 11 caracteres.";
	exit;
}

if(!stripos($_REQUEST['email_cliente'], "@") || !stripos($_REQUEST['email_cliente'],".")){
	echo "O campo E-mail não é válido.";
	exit;
}

if($_REQUEST['data_nascimento_cliente'] == ""){
	echo "O campo Data de Nascimento não pode ficar vazio.";
	exit;
}
/**FIM DA VALIDAÇÃO DOS DADOS RECEBIDOS DO FORMULÁRIO **/


/**CONEXÃO COM O BD **/
//Constantes para armazenamento das variáveis de conexão.
$usuario = 'root';
$senha = 'senha';
$dbname = 'meubanco';
$host = 'localhost';

try {
	$dsn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
} catch (PDOException $e) {
	echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' .$e->getMessage();
}
/* FIM DOS CÓDIGOS DE CONEXÃO COM O BD */


/**PREPARAÇÃO E INSERÇÃO NO BANCO DE DADOS **/
$stmt = $dsn->prepare("INSERT INTO 
							cliente(nome_cliente, cpf_cliente, email_cliente, data_nascimento_cliente)
							VALUES (?, ?, ?, ?)
						");

$resultSet = $stmt->execute([$_REQUEST['nome_cliente'], $_REQUEST['cpf_cliente'], $_REQUEST['email_cliente'], $_REQUEST['data_nascimento_cliente']]);

if($resultSet){
	echo "Os dados foram inseridos com sucesso.";
}else{
	echo "Ocorreu um erro e não foi possível inserir os dados.";
}

//Destruindo o objecto statement e fechando a conexão
$stmt = null;
$dsn = null;