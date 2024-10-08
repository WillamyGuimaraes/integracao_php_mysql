<!DOCTYPE html>
<html>
<head>
<title>Formulário HTML - Cadastro de Clientes</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"></link>
</head>
<body>
<div class="container">
<div class="row rounded">
<div class="col-md-12">
<form action="validacao.php" method="post">
<div class="row">
<div class="col-md-8">
<div class="card">
<div class="card-header bg-primary p-3 text-center">
<h3>Cadastro de Clientes</h3>
</div>
<div class="card-body bg-dark text-white">
<div class="form-group text-white">
<label for="nome_cliente">Nome</label>
<input type="text" class="form-control" id="nome_cliente" name="nome_cliente" placeholder="Seu nome" required>
</div>
<div class="form-group text-white">
<label for="cpf_cliente">CPF</label>
<input type="text" class="form-control" minlength="11" maxlength="11" id="cpf_cliente" name="cpf_cliente" placeholder="Seu CPF" title="Digite apenas números" required>
</div>
<div class="form-group text-white">
<label for="email_cliente">Endereço de E-mail</label>
<input type="email" class="form-control" id="email_cliente" name="email_cliente" aria-describedby="emailHelp" placeholder="Seu e-mail" required>
<small id="emailHelp" class="form-text text-white">
</div>
<div class="form-group text-white">
<label for="data_nascimento_cliente">Data de Nascimento <input type="date" class="form-control" id="data_nascimento_cliente" name="data_nascimento_cliente" placeholder="Sua data de nascimento" required>
</div>
<div class="form-group text-center">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
