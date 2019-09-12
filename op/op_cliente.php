<?php
/**
 * Created by PhpStorm.
 * User: kernelkill
 * Date: 11/09/19
 * Time: 23:50
 */

 require("../config/config.php");
 require("../config/crud.php");


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


inserir("cliente",$dados);

header("location:". URL_BASE ."index.php?link=3");

 ?>