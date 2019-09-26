<?php

	$acao	= isset($_GET["acao"]) ? $_GET["acao"]: "Cadastrar";
	$id		= isset($_GET["id"]) ? $_GET["id"]: NULL;


	if ($id) {
		# code...
		$valores = consultar("cliente", "id_clinte = $id");
	}

	$nome 		= isset($valores[0]["cliente"]) ? $valores[0]["cliente"] : NULL;
	$email 		= isset($valores[0]["email"]) ? $valores[0]["email"] : NULL;
	$endereco 	= isset($valores[0]["endereco"]) ? $valores[0]["endereco"] : NULL;
	$fone 		= isset($valores[0]["fone"]) ? $valores[0]["fone"] : NULL;
	$bairro 	= isset($valores[0]["bairro"]) ? $valores[0]["bairro"] : NULL;
	$cep 		= isset($valores[0]["cep"]) ? $valores[0]["cep"] : NULL;

?>
		
		<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
		<div class="base-formulario">	
			<form action="op/op_cliente.php" method="POST">
				<label>Nome</label>
					<input name="txt_nome" value="<?php echo $nome ?>" type="text" placeholder="Insira umm nome">
				<label>Email</label>
					<input name="txt_email" value="<?php echo $email ?>" type="text" placeholder="Insira um email">
				<label>Endereço</label>
					<input name="txt_endereco" value="<?php echo $endereco ?>" type="text" placeholder="Insira seu endereço">	
				<div class="col">
					<label>Telefone</label>
					<input name="txt_fone" value="<?php echo $fone ?>" type="text" placeholder="Insira seu telefone">
				</div>	
				
				<div class="col">
					<label>Bairro</label>
					<input name="txt_bairro" value="<?php echo $bairro ?>" type="text" placeholder="Insira seu bairro">
				</div>

				<div class="col">
					<label>CEP</label>
					<input name="txt_cep" value="<?php echo $cep ?>" type="text" placeholder="Insira seu CEP">
				</div>
				
				<div class="col">
				<input type="hidden" name="acao" value="<?php echo $acao?>">
				<input type="hidden" name="id" value="<?php echo $id?>">
				<input type="submit" value="<?php echo $acao?>" class="btn">
				
				</div>
			</form>
		</div>	
</div>	
		
