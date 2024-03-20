<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control" placeholder="nome">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="text" name="email" class="form-control" placeholder="email">
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="senha" class="form-control" placeholder="senha">
	</div>
	<div class="mb-3">
		<label>data_nascimento</label>
		<input type="date" name="data_nasc" class="form-control" placeholder="data_nasc">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">ENVIAR</button>
	</div>
</form>