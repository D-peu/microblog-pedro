<?php
require "funcoes-sessao.php";
require "../inc/funcoes-usuario.php";

verificaAcesso();

$id = $_GET['id'];
excluirUsuario($conexao, $id);
header("location:usuarios.php");