<?php
/**
 * Created by PhpStorm.
 * User: kernelkill
 * Date: 11/09/19
 * Time: 23:50
 */

 require("../config/config.php");
 require("../config/crud.php");


 $acao      = $_POST["acao"];
 $id        = $_POST["id"];

 $cliente   = strip_tags($_POST["txt_nome"]);
 $email     = strip_tags($_POST["txt_email"]);
 $endereco  = strip_tags($_POST["txt_endereco"]);
 $fone      = strip_tags($_POST["txt_fone"]);
 $bairro    = strip_tags($_POST["txt_bairro"]);
 $cep       = strip_tags($_POST["txt_cep"]);
 //$cpf       = strip_tags($_POST["txt_cpf"]);

$dados = array(
    "cliente"   => $cliente,
    "email"     => $email,
    "endereco"  => $endereco,
    "fone"      => $fone,
    "bairro"    => $bairro,
    "cep"       => $cep   
);

if ($acao === "Cadastrar") {
    # code...
    inserir("cliente",$dados);
}
if ($acao === "Editar") {
    # code...
    alterar("cliente", $dados, "id_clinte = $id");
}
if ($acao === "Excluir") {
    # code...
    deletar("cliente","id_clinte = $id");
}



header("location:". URL_BASE ."index.php?link=3");

 ?>