
<?php
require("config/config.php");
require("config/crud.php");
require("cabecalho.php");



	@$link = $_GET["link"];
	$pag[1] = "home.php";
	$pag[2] = "frm/frm_cliente.php";
	$pag[3] = "lst/lst_cliente.php";

	if(!empty($link)){
		if (file_exists($pag[$link]))
			# code...
			include $pag[$link];
		else
			include "home.php";
	}else
		include "home.php";

require("rodape.php")
?>