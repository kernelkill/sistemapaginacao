
		
		<div class="base-home">
			<h1 class="titulo"><span class="cor">Lista de</span> contatos</h1>
		<div class="base-lista">
			
			<div class="tabela">	
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					   <tr>
						<th width="25%" align="left">Nome</th>
						<th width="25%" align="left">Email</th>
						<th width="10%" align="left">Telefone</th>
						<th width="20%" colspan="2" align="center">Alterar</th>
					  </tr>
				  </thead>
				  <tbody>
				  <?php
				  $cliente = consultar("cliente");
				  if ($cliente) {
					  foreach($cliente as $linha){
					  # code...
				  ?>
					 <tr class="cor1">
						<td><?php echo $linha["cliente"] ?></td>
						<td><?php echo $linha["email"] ?></td>
						<td><?php echo $linha["fone"] ?></td>
						<td align="center">
							<a href="index.php?link=2" class="btn">Editar</a>
						</td>
						<td align="center">
							<a href="index.php?link=2" class="btn excluir">excluir</a>
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
