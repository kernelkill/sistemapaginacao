<?php 

	$pg			= isset($_GET["pg"]) ? $_GET["pg"]: NULL;
	$pesq		= isset($_GET["pesq"]) ? $_GET["pesq"]: NULL;
	$campo		= isset($_GET["campo"]) ? $_GET["campo"]: NULL; 


	if ($pesq) {
		# code...
		@$sql = "SELECT * FROM cliente WHERE $campo like '%$pesq%' ";
	}else {
		# code...
		@$sql = " SELECT * FROM cliente ";
	}

	$clientes = selecionar($sql);

	$total = total($sql);
	$lpp = 5;
	$paginas = ceil($total / $lpp);
	$inicio = $pg * $lpp;

	
?>


		
<div class="base-home">
			<h1 class="titulo"><span class="cor">Lista de</span> contatos</h1>
	<div class="base-lista">
		<div class="base-lista">
			<form action="<?php echo URL_BASE ."index.php" ?>" method="get">
				<div class="col">
					<span>Valor</span>
					<input type="text" name="pesq" value="<?php echo $pesq ?>" >
				</div>
				<div class="col">
					<span>Campo</span>
					<select name="campo">
						<option value="cliente">Nome</option>
						<option value="email">Email</option>
					</select>
				</div>
				<div class="col">
				<input type="submit" value="Buscar" class="btn">
			</div>
			</form>
		</div>
		<span class="qtde"><b><?php echo $total ?></b> Cliente Cadastrados</span>
			<div class="tabela">	
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					   <tr>
						<th width="5%" align="left">ID</th>
						<th width="25%" align="left">Nome</th>
						<th width="25%" align="left">Email</th>
						<th width="10%" align="left">Telefone</th>
						<th width="20%" colspan="2" align="center">Alterar</th>
					  </tr>
				  </thead>
				  <tbody>
				  <?php

					echo "SELECT * FROM cliente LIMIT $inicio, $lpp";	

				  $clientes = consultar("cliente");
				  $clientes = selecionar($sql ." LIMIT $inicio, $lpp");
				  if ($clientes) {
					  foreach($clientes as $cliente){
					  # code...
				  ?>
					 <tr class="cor1">
						<td><?php echo $cliente["id_cliente"] ?></td>
						<td><?php echo $cliente["cliente"] ?></td>
						<td><?php echo $cliente["email"] ?></td>
						<td><?php echo $cliente["fone"] ?></td>
						<td align="center">
							<a href="index.php?link=2&id=<?php echo $cliente["id_cliente"]?>&acao=Editar" class="btn">editar</a>
						</td>
						<td align="center">
							<a href="index.php?link=2&id=<?php echo $cliente["id_cliente"]?>&acao=Excluir" class="btn excluir">excluir</a>
						</td>
					 </tr>	
					<?php
					  }}else {
						  echo '<span class="qtde"><b>Não existe</b> nenhum cliente cadastrado!!<span>';
					  } ?>		  
				  </tbody>
				</table>
		</div>	
				
				<ul class="paginacao">
					<li><a href="#" class="ant">Anterior</a></li>
					<li class="ativo">1</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#" class="prox">Próximo</a></li>
				</ul>
		</div>	
</div>	
